<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddLeaveType;
use App\Models\Department;
use App\Models\LeaveRequest;
use App\Models\AddStaff;
use App\Models\AddendanceStaff;
use App\Models\User;
use Hash;
use Session;
use Mail;
use File;
use DB;

class T_HumanResource extends Controller
{
    public function apply_leave()
    {
        $user = auth()->user();

        $data = AddLeaveType::orderBy('id','desc')->get();
        $show = LeaveRequest::orderBy('id','desc')->where('user_id',$user->id)->get();
        return view('teacher.human-resource.approve-leave-request',compact('data','show'));
    }

    public function leave_request(Request $request)
    {
        
        $add = new LeaveRequest;
        $add->user_id = auth()->user()->id;
        $add->role = $request['role'];
        $add->name = $request['name'];
        $add->date = $request['date'];
        $add->leave_type = $request['leave_type'];
        $add->from_date = $request['from_date'];
        $add->todate = $request['todate'];
        $add->reason = $request['reason'];
        $add->note = $request['note'];
        $add->same = $request['same'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/leavrequest/', $filename);
            $add->document = $filename;
        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
}
