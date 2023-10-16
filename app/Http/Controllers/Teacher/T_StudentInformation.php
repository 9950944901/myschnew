<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
use App\Models\User;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\FeesCollect;
use Hash;
use Session;
use Mail;
use File;

class T_StudentInformation extends Controller
{
    public function index(Request $request)
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();

       
    //    dump($filters);
        if ($request['class'] && $request['section']) {
            $show = Stu_Admission::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->where('active_status',1)->get();
            // dump($show);
        }else{
            $show = Stu_Admission::orderby('id','desc')->where('active_status',1)->get();
            // dd($show);
        } 
        return view('teacher.student-information.index',compact('show','data','sec'));
    }

    public function student_details_show12($id)
    {
        $show = Stu_Admission::find($id);
        // $fees = FeesCollect::where('stu_id',$id)->first();
        // dd($fees);
        return view('teacher.student-information.details',compact('show'));
    }

    public function disabled_students()
    {
        $show = Stu_Admission::orderby('id','desc')->where('active_status',0)->get();
        return view('teacher.student-information.disabled-students',compact('show'));
    }

    public function online_admission()
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $show = Add_Section::orderBy('id','desc')->get();
        return view('teacher.student-information.online-admission',compact('data','show'));
    }



    public function add_class(Request $req)
    {
        $add = new Add_Class;
        $add->class = $req['class'];
        if($add->save())
        {
            return back()->with('success','Class Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_section(Request $req)
    {
        $add = new Add_Section;
        $add->section = $req['section'];
        if($add->save())
        {
            return back()->with('success','Section Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_sec($id){
        $delete = Add_Section::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_class($id){
        $delete = Add_Class::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


    public function edit_class(Request $req ,$id)
    {
        $add =Add_Class::find($id);
        $add->class = $req['class'];
        if($add->save())
        {
            return back()->with('success','Class Edited Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function edit_section(Request $req ,$id)
    {
        $add =Add_Section::find($id);
        $add->section = $req['section'];
        if($add->save())
        {
            return back()->with('success','Section Edited Successfully');
        }else{
            return back()->with('error','Error');
        }

    }


    
    public function student_details_delete($id){
        $delete = Stu_Admission::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

}
