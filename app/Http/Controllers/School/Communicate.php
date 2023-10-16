<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddNotice;

class Communicate extends Controller
{
    public function index()
    {
        $show = AddNotice::orderBy('id','desc')->get();
        return view('school.communicate.index',compact('show'));
    }

    public function send_email()
    {
        return view('school.communicate.send-email');
    }

    public function send_sms()
    {
        return view('school.communicate.send-sms');
    }

    public function email_sms_log()
    {
        return view('school.communicate.email-sms-log');
    }

    public function add_notice(Request $req)
    {
        $add = new AddNotice;
        $add->title = $req['title'];
        $add->desc = $req['desc'];
        $add->notice_date = $req['notice_date'];
        $add->publish_on = $req['publish_on'];
        $add->send_to = json_encode($req['send_to']);
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_notice($id)
    {
        $delete = AddNotice::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function update_notice(Request $req , $id)
    {
        $add = AddNotice::find($id);
        $add->title = $req['title'];
        $add->desc = $req['desc'];
        $add->notice_date = $req['notice_date'];
        $add->publish_on = $req['publish_on'];
        if($add->update())
        {
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


}
