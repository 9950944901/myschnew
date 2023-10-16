<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontCms_Setting;
use App\Models\Gallery;
use App\Models\Parents_Says;
use App\Models\FrontCMS_Teacher;
use App\Models\Contact_Request;
use App\Models\Career_Request;
use App\Models\Openings;
use App\Models\Openings_Request;
use File;

class FrontCMS extends Controller
{
    function index()
    {
        $info = FrontCms_Setting::get()->first();
        return view('school.front-cms.setting.index',compact('info'));
    }

    function setting_data(Request $request)
    {
        $add = FrontCms_Setting::get()->first();
        $add->school_name = $request['school_name'];
        $add->school_code = $request['school_code'];
        $add->school_phone = $request['school_phone'];
        $add->school_email = $request['school_email'];
        $add->school_address = $request['school_address'];
        $add->open_start_time = $request['open_start_time'];
        $add->open_end_time = $request['open_end_time'];
        if($request->hasfile('web_logo'))
        {
          if(File::exists(public_path('/uploads/site-logo/'.$add->web_logo))){
            File::delete(public_path('/uploads/site-logo/'.$add->web_logo));
        }else{}
            $file = $request->file('web_logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/site-logo/', $filename);
            $add->web_logo = $filename;
        }else{
        }
        $add->facebook = $request['facebook'];
        $add->instagram = $request['instagram'];
        $add->skype = $request['skype'];
        $add->google = $request['google'];
        $add->copy_by = $request['copy_by'];
        $add->copy_by_url = $request['copy_by_url'];
        $add->about = $request['about'];
        if($add->update())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function gallery()
    {
        $show = Gallery::orderBy('id','desc')->paginate('8');
        return view('school.front-cms.gallery.index',compact('show'));
    }

    function gallery_data(Request $request)
    {
        $add = new Gallery;
        if($request->hasfile('gallery'))
        {
            $file = $request->file('gallery');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/gallery/', $filename);
            $add->gallery = $filename;
        }
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','error');
        }
    }

    function gallery_delete($id)
    {
        $delete = Gallery::find($id);
        if(File::exists(public_path('/uploads/gallery/'.$delete->gallery))){
            File::delete(public_path('/uploads/gallery/'.$delete->gallery));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    function parents_say()
    {
        $show = Parents_Says::orderBy('id','desc')->get();
        return view('school.front-cms.parrents.index',compact('show'));
    }

    function parents_say_data(Request $request)
    {
        $add = new Parents_Says;
        $add->name = $request['name'];
        $add->job = $request['job'];
        $add->says = $request['says'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/parents/', $filename);
            $add->image = $filename;
        }
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function parents_say_delete($id)
    {
        $delete = Parents_Says::find($id);
        if(File::exists(public_path('/uploads/parents/'.$delete->image))){
            File::delete(public_path('/uploads/parents/'.$delete->image));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
    function teachers()
    {
        $show = FrontCMS_Teacher::orderBy('id','desc')->get();
        return view('school.front-cms.teacher.index',compact('show'));
    }

    function teachers_data(Request $request)
    {
        $add = new FrontCMS_Teacher;
        $add->name = $request['name'];
        $add->job = $request['job'];
        $add->location = $request['location'];
        $add->contact = $request['contact'];
        $add->email = $request['email'];
        $add->about = $request['about'];
        $add->personal_statement = $request['personal_statement'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/front/teacher/', $filename);
            $add->image = $filename;
        }
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function teachers_delete($id)
    {
        $delete = FrontCMS_Teacher::find($id);
        if(File::exists(public_path('/uploads/front/teacher/'.$delete->image))){
            File::delete(public_path('/uploads/front/teacher/'.$delete->image));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function teachers_edit($id)
    {
        $show = FrontCMS_Teacher::find($id);
        return view('school.front-cms.teacher.edit',compact('show'));
    }

    function teachers_update(Request $request , $id)
    {
        $add = FrontCMS_Teacher::find($id);
        $add->name = $request['name'];
        $add->job = $request['job'];
        $add->location = $request['location'];
        $add->contact = $request['contact'];
        $add->email = $request['email'];
        $add->about = $request['about'];
        $add->personal_statement = $request['personal_statement'];
        if($request->hasfile('image'))
        {
            if(File::exists(public_path('/uploads/front/teacher/'.$add->image))){
                File::delete(public_path('/uploads/front/teacher/'.$add->image));
            }else{}
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/front/teacher/', $filename);
            $add->image = $filename;
        }else{}
        if($add->save())
        {
            return redirect()->route('Front.CMS.Teachers')->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function contect_request()
    {
        $contect = Contact_Request::orderBy('id','desc')->get();
        return view('school.front-cms.contact.index',compact('contect'));
    }

    function contect_request_delete($id)
    {
        $delete = Contact_Request::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
    
    function career_request()
    {
        $career = Career_Request::orderBy('id','desc')->get();
        return view('school.front-cms.career.index',compact('career'));
    }

    function career_request_delete($id)
    {
        $delete = Career_Request::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function openings()
    {
        $open = Openings::orderBy('id','desc')->get();
        return view('school.front-cms.openings.index',compact('open'));
    }

    function openings_data(Request $request)
    {
        $add = new Openings;
        $add->post = $request['post'];
        $add->vacancies = $request['vacancies'];
        $add->work_status = $request['work_status'];
        $add->experience = $request['experience'];
        $add->qualification = $request['qualification'];
        $add->location = $request['location'];
        if($add->save()){
            return back()->with('success','Added successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function openings_update(Request $request , $id)
    {
        $add = Openings::find($id);
        $add->post = $request['post'];
        $add->vacancies = $request['vacancies'];
        $add->work_status = $request['work_status'];
        $add->experience = $request['experience'];
        $add->qualification = $request['qualification'];
        $add->location = $request['location'];
        if($add->update()){
            return back()->with('success','Updated successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function openings_delete($id)
    {
        $delete = Openings::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function openings_active($id)
    {
        $add = Openings::where('id',$id)->update(['status'=>0]);
        return back()->with('success','Status Changed Successfully');
    }

    function openings_inactive($id)
    {
        $add = Openings::where('id',$id)->update(['status'=>1]);
        return back()->with('success','Status Changed Successfully');
    }

    function openings_view($id)
    {
        $add = Openings::find($id);
        $career = Openings_Request::where('job_id',$id)->get();
        return view('school.front-cms.openings.view',compact('add','career'));
    }

    function openings_view_delete($id)
    {
        $delete = Openings_Request::find($id);
        if(File::exists(public_path('/uploads/openings/'.$delete->resume))){
            File::delete(public_path('/uploads/openings/'.$delete->resume));
        }else{}
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

}
