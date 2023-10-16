<?php

namespace App\Http\Controllers\teacher;

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
use App\Models\AddExamGroup;
use App\Models\ExamSchedule;
use App\Models\ExamResult;
use App\Models\ClassTime;
use App\Models\AddmissionEnquiry;
use App\Models\Syllabus;
use App\Models\HomeWork;
use Hash;
use Session;
use Mail;
use File;
use DB;

class T_HomeWork extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $subject_group = SubjectGroup::orderBy('id','desc')->get();
        $subject = AddSubject::orderBy('id','desc')->get();
        if($request['class'] && $request['section'] && $request['subject_group'] && $request['subject'])
        {
            $home = HomeWork::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->where('subject_group',$request['subject_group'])->where('subject',$request['subject'])->get();
        }else{
            $home = HomeWork::orderBy('id','desc')->get();
        }
        return view('teacher.homework.index',compact('class','sec','subject_group','subject','home'));
    }

    public function homework_data(Request $request)
    {
        $add = new HomeWork;
        $add->user_id = $request['user_id'];
        $add->teacher = $request['teacher'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->subject_group = $request['subject_group'];
        $add->subject = $request['subject'];
        $add->homework_date = $request['homework_date'];
        $add->sub_date = $request['sub_date'];
        $add->evalu_date = $request['evalu_date'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/homework/', $filename);
            $add->document = $filename;
        }
        $add->desc = $request['desc'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    function homework_delete($id)
    {
        $delete = HomeWork::find($id);
        if(File::exists(public_path('/uploads/homework/'.$delete->document))){
            File::delete(public_path('/uploads/homework/'.$delete->document));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
    function homework_update(Request $request , $id)
    {
        $add =HomeWork::find($id);
        $add->user_id = $request['user_id'];
        $add->teacher = $request['teacher'];
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->subject_group = $request['subject_group'];
        $add->subject = $request['subject'];
        $add->homework_date = $request['homework_date'];
        $add->sub_date = $request['sub_date'];
        $add->evalu_date = $request['evalu_date'];
        if($request->hasfile('document'))
        {
            if(File::exists(public_path('/uploads/homework/'.$add->document))){
                File::delete(public_path('/uploads/homework/'.$add->document));
            }else{}
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/homework/', $filename);
            $add->document = $filename;
        }else{
              }
        $add->desc = $request['desc'];
        if($add->update())
        {
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
}
