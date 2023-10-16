<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;
use App\Mail\DemoMail;
use Mail;
use File;

class Student_Login extends Controller
{
    public function login_data(Request $request)
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
            if($role === 3 && $status == 1){
            $request->session()->put('STUDENTSET',$user->email);
            $request->session()->put('STUDENTDATA',$user->id);
            return redirect()->route('Student.Home')->with('success','Sign In Successful');
            }        
            else{
                return back()->with('error_sws','Sign In details are not valid');
            }
          }else{
            return back()->with('error_sws','Sign In details are not valid');
        }
    }

    function signout()
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('Student.Login')->with('success_msg','Sign Out Successful');
    }
}
