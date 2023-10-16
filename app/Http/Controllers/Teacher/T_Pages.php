<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;
use App\Mail\DemoMail;
use Mail;
use File;

class T_Pages extends Controller
{
    public function index()
    {
        return view('teacher.pages.index');
    }

    public function profile_update(Request $request)
    {
          $user = auth()->user();
          $edit = User::where('id',$user->id)->get()->first();
          $edit->name =$request['name'];
          $edit->about =$request['about'];
          $edit->school_name =$request['school_name'];
          $edit->job =$request['job'];
          $edit->country =$request['country'];
          $edit->add =$request['add'];
          $edit->phone =$request['phone'];
          $edit->email =$request['email'];
          $edit->twitter_profile =$request['twitter_profile'];
          $edit->facebook_profile =$request['facebook_profile'];
          $edit->instagram_profile =$request['instagram_profile'];
          $edit->Linkedin_profile =$request['Linkedin_profile'];
          if($request->hasfile('image'))
          {
            if(File::exists(public_path('/uploads/school/'.$user->image))){
              File::delete(public_path('/uploads/school/'.$user->image));
          }else{}
              $file = $request->file('image');
              $extenstion = $file->getClientOriginalExtension();
              $filename = time().'.'.$extenstion;
              $file->move('public/uploads/school/', $filename);
              $edit->image = $filename;
          }else{
          }
          if($edit->save()){
              return back()->with('success','Profile Updated SuccessFully');
          }else{
              return back()->with('error','Error');
          }
    }

    public function change_password(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required|min:6|max:15|same:conform_password',
            'password' => 'required|min:6|max:15',
            'conform_password' => 'required|min:6|max:15',
        ]);
        $user = auth()->user();
        $data = User::where('id',$user->id)->get()->first();
        if($data->email = $request['email'] && $data->conform_password = $request['password'])
        {
            $edit = User::where('id',$user->id)->get()->first();
            $edit->password = Hash::make($request['password']);
           $edit->conform_password = $request['conform_password'];
           $edit->update();
           return back()->with('success','Password Updated SuccessFully');
        }else{
            return back()->with('error_flesh','Invalid Current Password');
        }
        
    }

}
