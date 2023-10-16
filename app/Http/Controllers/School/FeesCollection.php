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
use App\Models\FeesCollect;
use App\Models\GeneralSetting;
use Hash;
use Session;
use Mail;
use File;
use Illuminate\Support\Facades\DB;

class FeesCollection extends Controller
{

    public function index(Request $request)
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if($request['class'] && $request['section'])
        {
            $show = Stu_Admission::orderby('id','desc')->where('active_status',1)->where('class',$request['class'])->where('section',$request['section'])->get();
        }else{
            $show = Stu_Admission::orderby('id','desc')->where('active_status',1)->get();
        }
        return view('school.fees-collection.index',compact('data','sec','show'));
    }

    public function collect_fees_action($id)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $group = Fees_Group::orderBy('id','desc')->get();
        $type = Fees_Type::orderBy('id','desc')->get();
        $fees = FeesCollect::orderBy('id','desc')->where('stu_id',$id)->get();
        $show = Stu_Admission::find($id);
        $sum = FeesCollect::where('stu_id',$id)->sum('total');
        $info = GeneralSetting::where('status',1)->first();
       $total_fee = FeesDiscount::where('discount',$show->class)->where('name',$info->session)->first();

        return view('school.fees-collection.collect-fees-action',compact('show','group','type','fees','sum','info','total_fee','class'));
    }

    public function search_fees_payment()
    {
       $data = DB::table('student_admission')
            ->join('add_collect_fees', 'student_admission.id', '=', 'add_collect_fees.stu_id')
            ->select('student_admission.*', 'add_collect_fees.stu_id', 'add_collect_fees.fees_group', 'add_collect_fees.fees_type', 'add_collect_fees.id', 'add_collect_fees.created_at', 'add_collect_fees.payment_mode', 'add_collect_fees.total')
            ->get();
            // dump($data);
        return view('school.fees-collection.search-fees-payment',compact('data'));
    }

    public function search_due_fees()
    {
        return view('school.fees-collection.search-due-fees');
    }

    public function fees_master()
    {
        $show = Fees_Group::orderBy('id','desc')->get();
        $data = Fees_Type::orderBy('id','desc')->get();
        $add = FeesMaster::orderBy('id','desc')->get();
        return view('school.fees-collection.fees-master',compact('show','data','add'));
    }

    public function fees_group()
    {
        $data = Fees_Group::orderBy('id','desc')->get();
        return view('school.fees-collection.fees-group',compact('data'));
    }

    public function fees_type()
    {
        $data = Fees_Type::orderBy('id','desc')->get();
        return view('school.fees-collection.fees-type',compact('data'));
    }

    public function fees_discount()
    {
        $class= Add_Class::where('status',1)->get();
        $fees = Fees_Type::where('status',1)->get();
        $data = FeesDiscount::orderBy('id','desc')->get();
        return view('school.fees-collection.fees-class',compact('data','class','fees'));
    }

    public function fees_carry_forward(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if($request['class'] && $request['section']) {
            $show = Stu_Admission::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->get();
            // dump($show);
        }else{
            $show = Stu_Admission::orderBy('id','desc')->get();
        }
        return view('school.fees-collection.fees-carry-forward',compact('show','class','sec'));
    }

    public function fees_reminder()
    {
        return view('school.fees-collection.fees-reminder');
    }

    public function due_fees_add_fees()
    {
        return view('school.fees-collection.due-fees-add-fees');
    }


    public function collect_fees_data(Request $request)
    {
        $add = new Fees_Group;
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


    public function fees_gorup_delete($id)
    {
        $delete = Fees_Group::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function fees_edit_coll(Request $request , $id)
    {
        $add = Fees_Group::find($id);
        $add->name = $request['name'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function fees_type_data(Request $request)
    {
        $add = new Fees_Type;
        $add->name = $request['name'];
        $add->fess_code = $request['fess_code'];
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function fees_type_delete($id)
    {
        $delete = Fees_Type::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function fees_type_edit(Request $request , $id)
    {
        $add = Fees_Type::find($id);
        $add->name = $request['name'];
        $add->fess_code = $request['fess_code'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function fees_discount_add(Request $request)
    {
        $add = new FeesDiscount;
        $add->name = $request['name'];
        $add->discount = $request['discount'];
        $add->amount = $request['amount'];
        $add->desc = json_encode($request['fees_type']);
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    public function fees_discount_delete($id)
    {
        $delete = FeesDiscount::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function fees_discount_edit(Request $request , $id)
    {
        $add = FeesDiscount::find($id);
        // $add->name = $request['name'];
        // $add->discount = $request['discount'];
        $add->amount = $request['amount'];
        // $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        } 

    }

    public function fees_master_data(Request $request)
    {
        $add =new FeesMaster;
        $add->group = $request['group'];
        $add->type = $request['type'];
        $add->due_date = $request['due_date'];
        $add->amount = $request['amount'];
        $add->fine_type = $request['fine_type'];
        $add->percentage = $request['percentage'];
        $add->fine_amount = $request['fine_amount'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    public function collect_fees_datas(Request $request)
    {
        $add =new FeesCollect;
        $add->user_id = $request['session'];
        $add->stu_id = $request['stu_id'];
        $add->date = $request['date'];
        $add->fees_group = $request['class'];
        $add->fees_type = $request['fees_type'];
        $add->payment_mode = $request['payment_mode'];
        $add->note = $request['note'];
        $add->total = $request['total'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    function collect_fees_delete($id)
    {
        $delete = FeesCollect::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function collect_fees_update(Request $request , $id)
    {
        $add =FeesCollect::find($id);
        $add->date = $request['date'];
        // $add->fees_group = $request['fees_group'];
        $add->fees_type = $request['fees_type'];
        $add->payment_mode = $request['payment_mode'];
        $add->note = $request['note'];
        $add->total = $request['total'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    public function master_fees_delete($id)
    {
        $delete = FeesMaster::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function master_fees_update(Request $request ,$id)
    {
        $add =FeesMaster::find($id);
        $add->group = $request['group'];
        $add->type = $request['type'];
        $add->due_date = $request['due_date'];
        $add->amount = $request['amount'];
        $add->fine_type = $request['fine_type'];
        $add->percentage = $request['percentage'];
        $add->fine_amount = $request['fine_amount'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }

    public function fees_carry_data(Request $request , $id)
    {
        $add =Stu_Admission::find($id);
        $add->balance = $request['balance'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        } 
    }
}
