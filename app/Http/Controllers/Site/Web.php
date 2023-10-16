<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parents_Says;
use App\Models\FrontCMS_Teacher;
use App\Models\Gallery;
use App\Models\FrontCms_Setting;
use App\Models\Contact_Request;
use App\Models\Career_Request;
use App\Models\Openings;
use App\Models\Openings_Request;

class Web extends Controller
{
    function index()
    {
        $parents = Parents_Says::orderBy('id','desc')->get();
        $teacher = FrontCMS_Teacher::orderBy('id','desc')->get();
        $gallery = Gallery::orderBy('id','desc')->limit(6)->get();
        return view('site.index',compact('parents','teacher','gallery'));
    }

    function gallery()
    {
        $gallery = Gallery::orderBy('id','desc')->get();
        return view('site.gallery',compact('gallery'));
    }

    function about()
    {
        $parents = Parents_Says::orderBy('id','desc')->get();
        $teacher = FrontCMS_Teacher::orderBy('id','desc')->limit(4)->get();
        return view('site.about',compact('teacher','parents'));
    }

    function teachers()
    {
        $teacher = FrontCMS_Teacher::orderBy('id','desc')->get();
        return view('site.teachers',compact('teacher'));
    }

    function contact()
    {
        $add = FrontCms_Setting::get()->first();
        return view('site.contact',compact('add'));
    }

    function contact_request(Request $request)
    {
        $add = new Contact_Request;
        $add->name = $request['name'];
        $add->email = $request['email'];
        $add->number = $request['number'];
        $add->msg = $request['msg'];
        if($add->save()){
            return back()->with('success','successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function career()
    {
        $career = Openings::orderBy('id','desc')->where('status',1)->get();
        return view('site.blog',compact('career'));
    }

    function career_request(Request $request)
    {
        $add = new Career_Request;
        $add->name = $request['name'];
        $add->number = $request['number'];
        $add->email = $request['email'];
        $add->qualification = $request['qualification'];
        $add->experience = $request['experience'];
        $add->apply_for = $request['apply_for'];
        if($request->hasfile('resume'))
        {
            $file = $request->file('resume');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/career/', $filename);
            $add->resume = $filename;
        }
        if($add->save()){
            return back()->with('success','successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function career_apply($id)
    {
        $career = Openings::where('id',$id)->where('status',1)->get()->first();
        return view('site.apply',compact('career'));
    }

    function career_opening_req(Request $request)
    {
        $add = new Openings_Request;
        $add->job_id = $request['job_id'];
        $add->name = $request['name'];
        $add->number = $request['number'];
        $add->email = $request['email'];
        if($request->hasfile('resume'))
        {
            $file = $request->file('resume');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/openings/', $filename);
            $add->resume = $filename;
        }
        if($add->save()){
            return redirect()->route('Site.Blog')->with('success','successfully');
        }else{
            return back()->with('error','Error');
        }
    }

}
