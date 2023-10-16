<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddVisitor;
use App\Models\PhoneCall;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\AddmissionEnquiry;

class FrontOffice extends Controller
{
    public function index(Request $request)
    {
        // dd($request->input());
        if($request['create'] && $request['enquiry_from_date'] && $request['enquiry_to_date'])
        {
            $show = AddmissionEnquiry::orderBy('id','desc')->where('source',$request['create'])->whereBetween('date', [$request['enquiry_from_date'], $request['enquiry_to_date']])->get();
            // dd($show);
        }else{
            $show = AddmissionEnquiry::orderBy('id','desc')->get();
        }
        $class = Add_Class::orderBy('id','desc')->get();
        return view('school.front-office.index',compact('class','show'));
    }

    public function book()
    {
        $show = AddVisitor::orderBy('id','desc')->get();
        return view('school.front-office.visitor-Book',compact('show'));
    }

    public function phone()
    {
        $show = PhoneCall::orderBy('id','desc')->get();
        return view('school.front-office.phone-call-log',compact('show'));
    }

    public function visitor_data(Request $request)
    {
        $add = new AddVisitor;
        $add->purpose = $request['purpose'];
        $add->name = $request['name'];
        $add->phone = $request['phone'];
        $add->id_number = $request['id_number'];
        $add->number_person = $request['number_person'];
        $add->date = $request['date'];
        $add->intime = $request['intime'];
        $add->outtime = $request['outtime'];
        $add->desc = $request['desc'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/document/', $filename);
            $add->document = $filename;
        }
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function visitor_delete($id)
    {
        $delete = AddVisitor::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function phone_call_data(Request $request)
    {
        $add = new PhoneCall;
        $add->phone = $request['phone'];
        $add->name = $request['name'];
        $add->date = $request['date'];
        $add->desc = $request['desc'];
        $add->follow_date = $request['follow_date'];
        $add->call_duration = $request['call_duration'];
        $add->note = $request['note'];
        $add->call_type = $request['call_type'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function phone_delete($id)
    {
        $delete = PhoneCall::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function admission_enquiry(Request $request)
    {
        $add = new AddmissionEnquiry;
        $add->name = $request['name'];
        $add->email = $request['email'];
        $add->phone = $request['phone'];
        $add->address = $request['address'];
        $add->desc = $request['desc'];
        $add->note = $request['note'];
        $add->date = $request['date'];
        $add->follow_date = $request['follow_date'];
        $add->assigned = $request['assigned'];
        $add->reference = $request['reference'];
        $add->source = $request['source'];
        $add->class = $request['class'];
        $add->number_of_child = $request['number_of_child'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function admission_enquiry_delete($id)
    {
        $delete = AddmissionEnquiry::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function admission_enquiry_update(Request $request , $id)
    {
        $add =AddmissionEnquiry::find($id);
        $add->name = $request['name'];
        $add->email = $request['email'];
        $add->phone = $request['phone'];
        $add->address = $request['address'];
        $add->desc = $request['desc'];
        $add->note = $request['note'];
        $add->date = $request['date'];
        $add->follow_date = $request['follow_date'];
        $add->assigned = $request['assigned'];
        $add->reference = $request['reference'];
        $add->source = $request['source'];
        $add->class = $request['class'];
        $add->number_of_child = $request['number_of_child'];
        $add->status = $request['status'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
}
