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
use Hash;
use Session;
use Mail;
use File;
use DB;

class LessonPlan extends Controller
{
    public function index(Request $request)
    {
        $staff = AddStaff::orderBy('id','desc')->where('status',1)->get();

        $filters = [
            'filter_by_name' => $request->input('name'),
        ];
    //    dump($filters);
        if (!empty($filters)) {
            // $data_grid = AddLesson::where('class', $filters['filter_by_name'])->get();
            $data_grid =  DB::table('add_topic')
            ->join('assign_teacher', 'add_topic.class', '=', 'assign_teacher.class')
            ->select('add_topic.*', 'assign_teacher.class',)->where('assign_teacher.class_teacher', $filters['filter_by_name'])
            ->get();
            // dump($data_grid);
        } else {
            $data_grid = "";
        }


        return view('school.lesson-plan.index',compact('staff','data_grid'));
    }

    public function manage_syllabus_status(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();


        if ($request['class'] && $request['section'] && $request['subject_group'] && $request['subject']) {
            $view = AddTopic::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])
            ->where('subject_group',$request['subject_group'])->where('subject',$request['subject'])->get();
            // dump($view);
        }else{
            $view = AddTopic::orderBy('id','desc')->get();
        }
        return view('school.lesson-plan.manage-syllabus-status',compact('view','class','sec','group','subj'));
    }

    public function lesson()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        $show = AddLesson::orderBy('id','desc')->get();
        return view('school.lesson-plan.lesson',compact('class','sec','group','subj','show'));
    }

    public function topic()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        $show = AddLesson::orderBy('id','desc')->get();
        $view = AddTopic::orderBy('id','desc')->get();
        return view('school.lesson-plan.topic',compact('class','sec','group','subj','show','view'));
    }

    public function add_lesson(Request $request)
    {
        $add = new AddLesson;
        $add->class = $request['class']; 
        $add->section = $request['section']; 
        $add->subject_group = $request['subject_group']; 
        $add->subject = $request['subject']; 
        $add->lesson = json_encode($request['lesson']); 
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_lesson($id)
    {
        $delete = AddLesson::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function edit_lesson($id)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        $show = AddLesson::find($id);
        return view('school.lesson-plan.edit-lesson',compact('class','sec','group','subj','show'));
    }

    public function update_lesson(Request $request , $id)
    {
        $add = AddLesson::find($id);
        $add->class = $request['class']; 
        $add->section = $request['section']; 
        $add->subject_group = $request['subject_group']; 
        $add->subject = $request['subject']; 
        $add->lesson = json_encode($request['lesson']); 
        if($add->update()){
            return redirect()->route('SCHOOL.lesson')->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_topic(Request $request)
    {
        $add =new AddTopic;
        $add->class = $request['class']; 
        $add->section = $request['section']; 
        $add->subject_group = $request['subject_group']; 
        $add->subject = $request['subject']; 
        $add->lesson = $request['lesson']; 
        $add->topic = json_encode($request['topic']); 
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_topic($id)
    {
        $delete = AddTopic::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function edit_topic($id)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $group = SubjectGroup::orderBy('id','desc')->get();
        $subj = AddSubject::orderBy('id','desc')->get();
        $show = AddLesson::orderBy('id','desc')->get();
        $view = AddTopic::find($id);
        return view('school.lesson-plan.edit-topic',compact('class','sec','group','subj','show','view'));
    }

    public function update_topic(Request $request , $id)
    {
        $add = AddTopic::find($id);
        $add->class = $request['class']; 
        $add->section = $request['section']; 
        $add->subject_group = $request['subject_group']; 
        $add->subject = $request['subject']; 
        $add->lesson = $request['lesson']; 
        $add->topic = json_encode($request['topic']); 
        if($add->update()){
            return redirect()->route('SCHOOL.topic')->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function manage_status(Request $request)
    {
        $user = AddTopic::findorfail($request->id);


        $user->status = $request->status;
        $user->save();

        return response()->json(['message' => 'Status Updated Successfully.']);
    }
}
