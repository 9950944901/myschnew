<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fees_Group;
use App\Models\Fees_Type;
use App\Models\FeesDiscount;
use App\Models\FeesMaster;
use App\Models\Stu_Admission;
use App\Models\User;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\IncomeHead;
use App\Models\AddIncome;
use Hash;
use Session;
use Mail;
use File;

class Income extends Controller
{
    public function index()
    {
        $data = IncomeHead::orderBy('id','desc')->get();
        $show = AddIncome::orderBy('id','desc')->get();
        return view('school.income.index',compact('data','show'));
    }

    public function search_income()
    {
        return view('school.income.search-income');
    }

    public function income_head()
    {
        $show = IncomeHead::orderBy('id','desc')->get();
        return view('school.income.income-head',compact('show'));
    }

    public function income_head_data(Request $request)
    {
        $add =new IncomeHead;
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function income_head_delete($id)
    {
        $delete = IncomeHead::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function income_head_update(Request $request , $id)
    {
        $add =IncomeHead::find($id);
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_income_data(Request $request)
    {
        $add =new AddIncome;
        $add->income_head = $request['income_head'];
        $add->name = $request['name'];
        $add->invoice_no = $request['invoice_no'];
        $add->date = $request['date'];
        $add->amount = $request['amount'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/document/', $filename);
            $add->document = $filename;
        }
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function add_data_delete($id)
    {
        $delete = AddIncome::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function update_income_data(Request $request , $id)
    {
        $add = AddIncome::find($id);
        $add->income_head = $request['income_head'];
        $add->name = $request['name'];
        $add->invoice_no = $request['invoice_no'];
        $add->date = $request['date'];
        $add->amount = $request['amount'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/document/', $filename);
            $add->document = $filename;
        }
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

}
