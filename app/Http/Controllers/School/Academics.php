<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddLeaveType;
use App\Models\Department;
use App\Models\LeaveRequest;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\AddStaff;
use App\Models\Stu_Admission;
use App\Models\User;
use App\Models\AddSubject;
use App\Models\SubjectGroup;
use App\Models\AssignTeacher;
use App\Models\TeacherTime;
use App\Models\ClassTime;
use App\Models\PromoteStudent;
use Hash;
use Session;
use Mail;
use File;
use DB;

class Academics extends Controller
{
    public function index(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        if ($request['class'] && $request['section']) {
            $data_grid = ClassTime::orderBy('id','desc')->where('class' ,$request['class'])->where('section' ,$request['section'])->get();
            // dump($data_grid);
        } else {
            $data_grid = ClassTime::orderBy('id','desc')->get();
        }
        return view('school.academics.index',compact('class','sec','subj','group','data_grid'));
    }

    public function teachers_timetable(Request $request)
    {
        $staff = AddStaff::orderBy('id','desc')->where('status',1)->get();
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        
        if ($request['teacher_name']) {
            $data_grid = TeacherTime::orderBy('id','desc')->where('teacher_name' ,$request['teacher_name'])->get();
            // dump($data_grid);
        } else {
            $data_grid ="";
        }

        // dd($staff);
        return view('school.academics.teachers-timetable',compact('staff','class','sec','subj','data_grid'));
    }

    public function assign_class_teacher()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $staff = AddStaff::orderBy('id','desc')->get();
        $data = AssignTeacher::orderBy('id','desc')->get();
        return view('school.academics.assign-class-teacher',compact('class','sec','staff','data'));
    }

    public function promote_students(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if ($request['class'] && $request['section']) {
            $show = Stu_Admission::orderBy('id','desc')->where('active_status',1)->where('class',$request['class'])->where('section',$request['section'])->get();
            // dump($show);
        } else {
            $show = Stu_Admission::orderBy('id','desc')->where('active_status',1)->get();
        }
        return view('school.academics.promote-students',compact('class','sec','show'));
    }

    public function subject_group()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $sub = AddSubject::orderBy('id','desc')->get();
        $data = SubjectGroup::orderBy('id','desc')->get();
        return view('school.academics.subject-group',compact('class','sec','sub','data'));
    }

    public function subjects()
    {
        $show = AddSubject::orderBY('id','desc')->get();
        return view('school.academics.subjects',compact('show'));
    }

    public function class()
    {
        return view('school.academics.class');
    }

    public function sections()
    {
        return view('school.academics.sections');
    }

    public function subjects_data(Request $request)
    {
        $add =new AddSubject;
        $add->name = $request['name'];
        $add->subject_type = $request['subject_type'];
        $add->subject_code = $request['subject_code'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function subjects_update(Request $request , $id)
    {
        $add =AddSubject::find($id);
        $add->name = $request['name'];
        $add->subject_type = $request['subject_type'];
        $add->subject_code = $request['subject_code'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function subjects_delete($id)
    {
        $delete = AddSubject::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function subjects_group_data(Request $request)
    {
        $add =new SubjectGroup;
        $add->name = $request['name'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->Subject = json_encode($request['Subject']);
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function subjects_group_delete($id)
    {
        $delete = SubjectGroup::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function subjects_group_update(Request $request , $id)
    {
        $add =SubjectGroup::find($id);
        $add->name = $request['name'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function assign_teacher_data(Request $request)
    {
        $add =new AssignTeacher;
        $add->class_teacher = $request['class_teacher'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        if($request['class_teacher']){
            $add->save();
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Select A Class Teacher');
        }
    }

    public function assign_delete($id)
    {
        $delete = AssignTeacher::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function assign_update(Request $request ,$id)
    {
        $add =AssignTeacher::find($id);
        $add->class_teacher = $request['class_teacher'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


    function teacher_time_data(Request $request)
    {
        // dd($request->input());
        $add =new TeacherTime;
        $add->teacher_name = $request['teacher_name'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->subject = $request['subject'];
        $add->start_time = $request['start_time'];
        $add->end_time = $request['end_time'];
        $add->room_no = $request['room_no'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    public function teacher_time_delete($id)
    {
        $delete = TeacherTime::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function class_time_data(Request $request)
    {
        $add =new ClassTime;
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->subject = $request['subject'];
        $add->subject_group = $request['subject_group'];
        $add->start_time = $request['start_time'];
        $add->end_time = $request['end_time'];
        $add->room_no = $request['room_no'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    function class_time_delete($id)
    {
        $delete = ClassTime::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function promote_student_data(Request $request , $id)
    {
        $add =Stu_Admission::find($id);
        $add->current_result = $request['current_result'];
        $add->session_status = $request['session_status'];
        $add->session = $request['session'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        if($request->session_status =="Leave") 
        {
            $add->active_status = "0";
        }else{    
        }
        if($add->update()){
            $info =new PromoteStudent;
            $info->student_id = $request['student_id'];
            $info->current_result = $request['current_result'];
            $info->session_status = $request['session_status'];
            $info->session = $request['session'];
            $info->class = $request['class'];
            $info->section = $request['section'];
            $info->save();
            return back()->with('success','Promoted Successfully');
        }else{
            return back()->with('error','Error');
        }  
    }
}
