<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
use App\Models\User;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\SubjectGroup;
use App\Models\AddSubject;
use App\Models\AddLesson;
use App\Models\AddStaff;
use App\Models\AddTopic;
use App\Models\StudentLeave;
use App\Models\StudentAttendance;
use Hash;
use Session;
use Mail;
use File;
use DB;

class Attendance extends Controller
{
    public function index(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if($request['class'] && $request['section'] && $request['date'])
        {
            $info = StudentAttendance::select("student_attendance.*","student_admission.admission_no","student_admission.roll_no","student_admission.roll_no","student_admission.first_name","student_admission.last_name","student_admission.dob","student_admission.id as stuid")
            ->join("student_admission","student_admission.id","=","student_attendance.stu_id")->orderBy('student_admission.id','desc')->where('student_attendance.class',$request['class'])->where('student_attendance.section',$request['section'])->where('student_attendance.date',$request['date'])->get();
            // dd($show);
        }else{
            $info = StudentAttendance::select("student_attendance.*","student_admission.admission_no","student_admission.roll_no","student_admission.roll_no","student_admission.first_name","student_admission.last_name","student_admission.dob",)
            ->join("student_admission","student_admission.id","=","student_attendance.stu_id")->where('student_attendance.date',0000)->get();
        }
        return view('school.attendance.index',compact('class','sec','info'));
    }

    public function attendance_by_date()
    {
        return view('school.attendance.attendance-by-date');
    }

    public function approve_leave(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $student = Stu_Admission::orderBy('id','desc')->where('active_status',1)->get();
        $stu_data = StudentLeave::orderBy('id','desc')->get();

        if ($request['class'] && $request['section']) {
            $stu_data = StudentLeave::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->get();
            // dump($stu_data);
        }else{
            $stu_data = StudentLeave::orderBy('id','desc')->get();
        }
        return view('school.attendance.approve-leave',compact('class','sec','student','stu_data'));
    }

    public function approve_leave_data(Request $request)
    {
        $add = new StudentLeave;
        $add->class = $request['class']; 
        $add->section = $request['section']; 
        $add->Student_name = $request['Student_name']; 
        $add->Apply_date = $request['Apply_date']; 
        $add->from_date = $request['from_date']; 
        $add->to_date = $request['to_date']; 
        $add->reason = $request['reason'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/studentleave/', $filename);
            $add->document = $filename;
        } 
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function student_appr_delete($id)
    {
        $delete = StudentLeave::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function student_appr_change_status($id)
    {
        $delete = StudentLeave::where('id',$id)->update(['status'=>0,'approvalby'=>'Admin']);
        return back()->with('success','Approved Successfully');
    }
}
