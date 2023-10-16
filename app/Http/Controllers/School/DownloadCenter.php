<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddLeaveType;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\Department;
use App\Models\LeaveRequest;
use App\Models\AddStaff;
use App\Models\UploadContent;
use App\Models\AddSubject;
use App\Models\User;
use App\Models\Syllabus;
use Hash;
use Session;
use Mail;
use File;

class DownloadCenter extends Controller
{
    public function index()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $content = UploadContent::orderBy('id','desc')->get();
        return view('school.download-center.index',compact('class','sec','content'));
    }

    public function assignments()
    {
        return view('school.download-center.assignments');
    }

    public function study_material()
    {
        $content = UploadContent::orderBy('id','desc')->get();
        return view('school.download-center.study-material',compact('content'));
    }

    public function syllabus()
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $subject = AddSubject::orderBy('id','desc')->get();
        $data = Syllabus::orderBy('id','desc')->get();
        return view('school.download-center.syllabus',compact('class','subject','data'));
    }

    public function other_downloads()
    {
        return view('school.download-center.other-downloads');
    }

    public function upload_content_data(Request $request)
    {
        $add = new UploadContent;
        $add->name = $request['name'];
        $add->content_type = $request['content_type'];
        $add->availabe_for = json_encode($request['availabe_for']);
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->date = $request['date'];
        $add->desc = $request['desc'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/content/', $filename);
            $add->document = $filename;
        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function content_delete($id)
    {
        $delete = UploadContent::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function content_update(Request $request , $id)
    {
        $add =  UploadContent::find($id);
        $add->name = $request['name'];
        $add->content_type = $request['content_type'];
        $add->date = $request['date'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_syllabus_data(Request $request)
    {
        // dd($request->input());
        $add = new Syllabus;
        $add->session = $request['session'];
        $add->content_title = $request['content_title'];
        $add->availabe_for = $request['availabe_for'];
        $add->syllabus_type = $request['syllabus_type'];
        $add->class = $request['class'];
        $add->subject = $request['subject'];
        if($request->hasfile('syllabus_file'))
        {
            $file = $request->file('syllabus_file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/syllabus/', $filename);
            $add->syllabus_file = $filename;
        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function syllabus_delete($id)
    {
        $delete = Syllabus::find($id);
        if(File::exists(public_path('/uploads/syllabus/'.$delete->syllabus_file))){
            File::delete(public_path('/uploads/syllabus/'.$delete->syllabus_file));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function syllabus_update(Request $request , $id)
    {
        $add =Syllabus::find($id);
        $add->session = $request['session'];
        $add->content_title = $request['content_title'];
        $add->availabe_for = $request['availabe_for'];
        $add->syllabus_type = $request['syllabus_type'];
        $add->class = $request['class'];
        $add->subject = $request['subject'];
        if($request['syllabus_file'])
        {
        if($request->hasfile('syllabus_file'))
        {
            if(File::exists(public_path('/uploads/syllabus/'.$add->syllabus_file))){
                File::delete(public_path('/uploads/syllabus/'.$add->syllabus_file));
            }else{}
            $file = $request->file('syllabus_file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/syllabus/', $filename);
            $add->syllabus_file = $filename;
        }
        }else{

        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }



}
