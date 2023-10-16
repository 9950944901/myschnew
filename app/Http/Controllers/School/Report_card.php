<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\Stu_Admission;
use Illuminate\Support\Facades\DB;
use App\Models\School_Information;
use Illuminate\Support\Carbon;
class Report_card extends Controller
{
    function index(Request $req){

   


        $data = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();

        $show = DB::table('student_admission')
        ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
        // ->join('add_class','student_admission.class','=','add_class.id')
        ->select('student_admission.*','exam_results.id as res_id','exam_results.half_english','exam_results.half_hindi','exam_results.half_math','exam_results.half_science','exam_results.half_social','exam_results.anul_english','exam_results.anul_hindi','exam_results.anul_math','exam_results.anul_science','exam_results.anul_social','exam_results.anul_sanskrit','exam_results.half_sanskrit','exam_results.st_english','exam_results.st_hindi','exam_results.st_math','exam_results.st_science','exam_results.st_social','exam_results.st_sanskrit','exam_results.result')->orderBy('student_admission.id','desc')->get();

        // dd($show);

        // if ($req['class'] && $req['section']) {
        //     $show = Stu_Admission::orderBy('id','desc')->where('class',$req['class'])->where('section',$req['section'])->where('active_status',1)->get();
        // }else{
        //     $show = Stu_Admission::orderby('id','desc')->where('active_status',1)->get();
        // } 
        
        // return view('school.reportcard.index',compact('data','sec','show'));
        return view('school.reportcard.index',compact('data','sec','show'));
    }


    function student_report_del($id){
        $del = Stu_Admission::find($id);
        if ($del->delete()) {
            return back()->with('success','Deleted record Successfully');
        } else {
            return back()->with('error','Error: Deletion record Unsuccessful');

        }
    }


        function report_edit($id){
        $add = Stu_Admission::find($id);
        $data = Add_Class::orderBy('id','desc')->get();
        $show = Add_Section::orderBy('id','desc')->get();
        return view('school.reportcard.report_edit',compact('add','show','data'));
      }

function Repotcard_up(Request $req,$id){
     $up = Stu_Admission::find($id);
     $up->admission_no = $req['admission_no'];
     $up->roll_no = $req['roll_no'];
     $up->class = $req['class'];
     $up->section = $req['section'];
     $up->first_name = $req['first_name'];
     $up->last_name = $req['last_name'];
     $up->gender = $req['gender'];
     $up->dob = $req['dob'];
     $up->category = $req['category'];
     $up->religion = $req['religion'];
     $up->caste = $req['caste'];
     $up->mobile_no = $req['mobile_no'];
     $up->email = $req['email'];
     $up->admission_date = $req['admission_date'];
     if($req->hasfile('student_image'))
     {
         $file = $req->file('student_image');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('public/uploads/students/', $filename);
         $up->student_image = $filename;
     }
     $up->blood_group = $req['blood_group'];
     $up->stu_house = $req['stu_house'];
     $up->height = $req['height'];
     $up->weight = $req['weight'];
     $up->as_on_date = $req['as_on_date'];
     $up->father_name = $req['father_name'];
     $up->father_mobile = $req['father_mobile'];
     $up->father_accu = $req['father_accu'];
     if($req->hasfile('father_photo'))
     {
         $file = $req->file('father_photo');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('public/uploads/father/', $filename);
         $up->father_photo = $filename;
     }
     if($req->hasfile('mother_photo'))
     {
         $file = $req->file('mother_photo');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('public/uploads/mother/', $filename);
         $up->mother_photo = $filename;
     }
     if($req->hasfile('gur_photo'))
     {
         $file = $req->file('gur_photo');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('public/uploads/gur_photo/', $filename);
         $up->gur_photo = $filename;
     }
     $up->mother_name = $req['mother_name'];
     $up->mother_phone = $req['mother_phone'];
     $up->mother_occu = $req['mother_occu'];
     $up->guardian = $req['guardian'];
     $up->gur_name = $req['gur_name'];
     $up->gur_relation = $req['gur_relation'];
     $up->gur_email = $req['gur_email'];
     $up->gur_phone = $req['gur_phone'];
     $up->gur_occu = $req['gur_occu'];
     $up->gur_address = $req['gur_address'];
     $up->bank_no = $req['bank_no'];
     $up->bank_name = $req['bank_name'];
     $up->ifsc = $req['ifsc'];
     $up->nin_no = $req['nin_no'];
     $up->lin_no = $req['lin_no'];
     $up->rte = $req['rte'];
     $up->pre_school = $req['pre_school'];
     $up->notes = $req['notes'];

     if ($up->update()) {
        return redirect()->route('SCHOOL.Report.card')->with('success','Updated Successfully');
     } else {
        return back()->with('error','Error: Update Unsuccessful');
     }
     
}

function viewreport($id){

    $startjanuary = Carbon::now()->startOfYear()->month(1)->startOfMonth();
    $endjanuary = Carbon::now()->startOfYear()->month(1)->endOfMonth();

    $startfabruary = Carbon::now()->startOfYear()->month(2)->startOfMonth();
    $endfabrury = Carbon::now()->startOfYear()->month(2)->endOfMonth();

    $startmarch = Carbon::now()->startOfYear()->month(3)->startOfMonth();
    $endmarch = Carbon::now()->startOfYear()->month(3)->endOfMonth();

    $startapril = Carbon::now()->startOfYear()->month(4)->startOfMonth();
    $endapril = Carbon::now()->startOfYear()->month(4)->endOfMonth();

    $startmay = Carbon::now()->startOfYear()->month(5)->startOfMonth();
    $endmay = Carbon::now()->startOfYear()->month(5)->endOfMonth();

    $startjun = Carbon::now()->startOfYear()->month(6)->startOfMonth();
    $endjun = Carbon::now()->startOfYear()->month(6)->endOfMonth();

    $startjuly = Carbon::now()->startOfYear()->month(7)->startOfMonth();
    $endjuly = Carbon::now()->startOfYear()->month(7)->endOfMonth();

    $startaugst = Carbon::now()->startOfYear()->month(8)->startOfMonth();
    $endaugst = Carbon::now()->startOfYear()->month(8)->endOfMonth();

    $startsept = Carbon::now()->startOfYear()->month(9)->startOfMonth();
    $endsept = Carbon::now()->startOfYear()->month(9)->endOfMonth();

    $startoct = Carbon::now()->startOfYear()->month(10)->startOfMonth();
    $endoct = Carbon::now()->startOfYear()->month(10)->endOfMonth();

    $startnov = Carbon::now()->startOfYear()->month(11)->startOfMonth();
    $endnov = Carbon::now()->startOfYear()->month(11)->endOfMonth();

    $startdec = Carbon::now()->startOfYear()->month(12)->startOfMonth();
    $enddec = Carbon::now()->startOfYear()->month(12)->endOfMonth();


    $detals = School_Information::orderBy('id','desc')->first();

     // $data = DB::table('student_admission')
        // ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
        // // ->join('add_class','student_admission.class','=','add_class.id')
        // ->select('exam_results.*','student_admission.first_name','student_admission.last_name')
        // ->orderBy('exam_results.id','desc')->get();

      $data = DB::table('student_admission')
    ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
    // ->join('add_class','student_admission.class','=','add_class.id')
    ->select('student_admission.*','exam_results.id as res_id','exam_results.half_english','exam_results.half_hindi','exam_results.half_math','exam_results.half_science','exam_results.half_social','exam_results.anul_english','exam_results.anul_hindi','exam_results.anul_math','exam_results.anul_science','exam_results.anul_social','exam_results.anul_sanskrit','exam_results.half_sanskrit','exam_results.st_english','exam_results.st_hindi','exam_results.st_math','exam_results.st_science','exam_results.st_social','exam_results.st_sanskrit','exam_results.result')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->first();
   
// dd($data);

    $januy = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startjanuary->toDateString(), $endjanuary->toDateString()])->count();

    $febry = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startfabruary->toDateString(), $endfabrury->toDateString()])->count();

    $march = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startmarch->toDateString(), $endmarch->toDateString()])->count();

    $april = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startapril->toDateString(), $endapril->toDateString()])->count();

    $may = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startmay->toDateString(), $endmay->toDateString()])->count();

    $jun = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startjun->toDateString(), $endjun->toDateString()])->count();

    $july = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startjuly->toDateString(), $endjuly->toDateString()])->count();

    $augst = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startaugst->toDateString(), $endaugst->toDateString()])->count();

    $sept = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startsept->toDateString(), $endsept->toDateString()])->count();

    $oct = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startoct->toDateString(), $endoct->toDateString()])->count();

    $nov = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startnov->toDateString(), $endnov->toDateString()])->count();

    $dec = DB::table('student_admission')
    ->join('student_attendance','student_admission.id','=','student_attendance.stu_id')
    ->select('student_attendance.*','student_admission.id')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->whereBetween('date', [$startdec->toDateString(), $enddec->toDateString()])->count();



//   dd($count);

// $startDate = Carbon::now()->startOfYear()->month(1)->startOfMonth();
// // Get the end of January for the current year
// $endDate = Carbon::now()->startOfYear()->month(1)->endOfMonth();
// // Query the database to retrieve all records between the start and end dates
// $records = DB::table('your_table')
//     ->whereBetween('your_date_column', [$startDate->toDateString(), $endDate->toDateString()])
//     ->get();


    return view('school.reportcard.viewreport',compact('data','detals','januy','febry','march','april','may','jun','july','augst','sept','oct','nov','dec'));
}



function reportview(){
    return view('school.reportcard.reportview');

}

function report_add(){
     $report = School_Information::first();
    //  dd($report);
    return view('school.reportcard.school_report',compact('report'));

}

function school_information_in(Request $req){
    $in = new School_Information;
    $in->semail = $req['semail'];
    $in->scode = $req['scode'];
    $in->background_img = $req['scode'];
    $in->ssection = $req['ssection'];
    $in->saddress = $req['saddress'];
    $in->smobile = $req['smobile'];
    $in->sname = $req['sname'];
    
    if($req->hasfile('logoimg'))
    {
        $file = $req->file('logoimg');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/logoimg/', $filename);
        $in->logoimg = $filename;
    }


    if($req->hasfile('background_img'))
    {
        $file = $req->file('background_img');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/background_img/', $filename);
        $in->background_img = $filename;
    }
    if ($in->save()) {
        return back()->with('success','Transferred Successfully');
    } else {
        return back()->with('error','Error: Transfer Unsuccessful');
    }
    
}


function school_information_up(Request $req, $id){
    $in = School_Information::find($id);
    $in->semail = $req['semail'];
    $in->scode = $req['scode'];
    $in->background_img = $req['scode'];
    $in->ssection = $req['ssection'];
    $in->saddress = $req['saddress'];
    $in->smobile = $req['smobile'];
    $in->sname = $req['sname'];
    
    if($req->hasfile('logoimg'))
    {
        $file = $req->file('logoimg');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/logoimg/', $filename);
        $in->logoimg = $filename;
    }

    if($req->hasfile('background_img'))
    {
        $file = $req->file('background_img');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/background_img/', $filename);
        $in->background_img = $filename;
    }


    if ($in->update()) {
        return back()->with('success','Updated Successfully');
    } else {
        return back()->with('error','Error: Update Unsuccessful');
    }
    
}

}
