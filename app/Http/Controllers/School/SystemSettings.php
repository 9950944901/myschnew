<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class SystemSettings extends Controller
{
    public function index()
    {
        $data =GeneralSetting::get()->first();
        return view('school.system-settings.index',compact('data'));
    }

    public function notification_setting()
    {
        return view('school.system-settings.notification-setting');
    }

    public function student_profile_update()
    {
        return view('school.system-settings.student-profile-update');
    }

    public function general_setting_data(Request $request)
    {
        
        $add = new GeneralSetting;
        $add->school_name = $request['school_name'];
        $add->school_code = $request['school_code'];
        $add->school_phone = $request['school_phone'];
        $add->school_email = $request['school_email'];
        $add->school_address = $request['school_address'];
        $add->session = $request['session'];
        $add->session_month = $request['session_month'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');

        }
    }


    

    public function general_setting_up(Request $request,$id)
    {
        
        $add = GeneralSetting::find($id);
        
        $add->school_name = $request['school_name'];
        $add->school_code = $request['school_code'];
        $add->school_phone = $request['school_phone'];
        $add->school_email = $request['school_email'];
        $add->school_address = $request['school_address'];
        $add->session = $request['session'];
        $add->session_month = $request['session_month'];
        if($add->Update())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');

        }
    }

}

