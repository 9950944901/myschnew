<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;
use App\Mail\DemoMail;
use Mail;
use File;


class Admin_Login extends Controller
{
  
    public function Check(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:6|max:15',
            'email' => 'required'
        ]);
        $user = User::Where('email','=',$request->email)->first();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $role = (int)$user->role; 
            $status = (int)$user->status;
            if($role === 1 && $status == 1){
            $request->session()->put('ADMINSET',$user->email);
            $request->session()->put('ADMINDATA',$user->id);
            return redirect()->route('SCHOOL.Home')->with('success','Admin Sign in Successful');
            }        
            else{
                return back()->with('error','Sign in details are not valid');
            }
          }else{
            return back()->with('error','Sign in details are not valid');
        }
    }

    public function signout()
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('SCHOOL.ADmin.Login')->with('success','Sign Out Successful');
    }

    public function verify(Request $request)
    {
        $key = mt_rand(100000,999999);
        $details = [
          'title' => 'Mail From Forget Password',
          'body' =>   $key
      ];
          $data = $request->input();
        $key_expire = date("Y-m-d H:i:s", strtotime("+30 minutes"));
        $result = User::where('email',$data['email'] , $key_expire)->where('role',1)->get()->first();
        // dd($result);
        if($result){
          if($data['email'] == $result->email)
          {
            $add_info =User::where('email',$result->email)->where('role',1)->get()->first();
            $add_info->email = $request->input('email');
            $add_info->otp = $key;
            session()->put('verify_email',$add_info->email);
            $add_info->update();
            Mail::to($request->input('email'))->send(new DemoMail($details));
              return redirect()->back()->with('opt_modal','OTP Sent Successfully');;
          }else{
          return back()->with('error','Unverified Email');
          }
        }
         else{
          return back()->with('error','Unverified Email');
         }
    }

    public function check_otp(Request $request)
    {
        $request->validate([
            'otp' => 'required|min:6|max:6',
        ]);
            $data = $request->input();
            // dd($data);
            $email = session()->get('verify_email');
            $result = User::where('otp',$data['otp'])->where('email',$email)->get()->first();
            if($result){
              if($data['otp'] == $result->otp)
              {
                session()->put('forget_otp',$result->otp);
                return back()->with('opt_modal','OTP Verified Successfully');
              }else{
              return back()->with('error_otp_check','Enter A Valid OTP');
              }
            }
             else{
              return back()->with('error_otp_check','Enter A Valid OTP');
             }
    }

    public function new_pass(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:6|max:15|same:conform_password',
            'conform_password' => 'required|min:6|max:15'
        ]);
       if($email = session()->get('verify_email'))
       {     
        $edit_pass =User::where('email',$email)->get()->first();
         $edit_pass->password = Hash::make($request['password']);
         $edit_pass->conform_password = $request['conform_password'];
        if($edit_pass->update())
        {
          session()->flash('verify_email');
          session()->flash('forget_otp');
          return redirect()->route('SCHOOL.ADmin.Login')->with('success','Password Updated Successfully');
        }else{
          return back()->with('error','error');
        }
        }else{
            return back()->with('error','error');  
        }
    }
}
