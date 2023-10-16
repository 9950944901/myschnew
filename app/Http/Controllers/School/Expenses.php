<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpenseHead;
use App\Models\AddExpense;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class Expenses extends Controller
{
    public function index()
    {
        $data = ExpenseHead::orderBy('id','desc')->get();
        $show = AddExpense::orderBy('id','desc')->get();

        return view('school.expenses.index',compact('data','show'));
    }

    public function search_expense(Request $req)
    {
        // $now = Carbon::now()->format('Y-m-d');
    // dd($now);

        if ($req->filter == "today") {
           $search_expese = AddExpense::orderBy('id','desc')->select('*')
           ->whereDate('created_at',Carbon::today())->get();
            // dd($search_expese);
        } elseif($req->filter == "week") {
            $search_expese = AddExpense::orderBy('id','desc')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()
            ->endOfWeek()])->get();
            // dd($search_expese);
        }elseif($req->filter == "month"){
            $search_expese = AddExpense::orderBy('id','desc')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth()->format('Y-m-d'), Carbon::now()
            ->startOfMonth()->format('Y-m-d')])->get();

        }else{
            $search_expese = AddExpense::orderBy('id','desc')->get(); 
        }
        

        return view('school.expenses.search-expense',compact('search_expese'));
    }

    public function expense_head()
    {
        $data = ExpenseHead::orderBy('id','desc')->get();
        return view('school.expenses.expense-head',compact('data'));
    }

    public function expense_data(Request $request)
    {
        $add =new ExpenseHead;
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function expense_delete($id)
    {
        $delete = ExpenseHead::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function expense_update(Request $request , $id)
    {
        $add =ExpenseHead::find($id);
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_expense_data(Request $request)
    {
        $add = new AddExpense;
        $add->expense_head = $request['expense_head'];
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

    public function expense_data_delete($id)
    {
        $delete = AddExpense::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


function Expense_Data_up(Request $req,$id){
    $up = AddExpense::find($id);
    $up->expense_head = $req['expense_head'];
    $up->name = $req['name'];
    $up->invoice_no = $req['invoice_no'];
    $up->date = $req['date'];
    $up->amount = $req['amount'];
    if($req['document'])
    {
    if($req->hasfile('document'))
    {
        if(File::exists(public_path('/uploads/document/'.$up->document))){
            File::delete(public_path('/uploads/document/'.$up->document));
        }else{}
        $file = $req->file('document');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/document/', $filename);
        $up->document = $filename;
    }
    }else{

    }

    if($up->update()){
            return back()->with('success','Updated Data Successfully');
    }else{
            return back()->with('error','Error Data did not update');

    }

}











    
}
