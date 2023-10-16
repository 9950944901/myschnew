<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
use App\Models\FeesCollect;
use App\Models\GeneralSetting;
use App\Models\ClassTime;
use Illuminate\Support\Facades\DB;
use App\Models\HomeWork;
use App\Models\StudentLeave;
use App\Models\Add_Class;
use App\Models\AddNotice;
use App\Models\UploadContent;
use App\Models\Syllabus;
use App\Models\ExamSchedule;
use App\Models\ExamResult;
use App\Models\AddTopic;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use App\Models\StudentAttendance;
use App\Models\School_Information;
class Student_Dashboard extends Controller
{
    function dashboard()
    {
        $user = auth()->user();
       $data = Stu_Admission::where('email',$user->email)->get()->first();
       $fees = FeesCollect::where('stu_id',$data->id)->get();
       $sum = FeesCollect::where('stu_id',$data->id)->sum('total');
      return view('student.dashboard.index',compact('data','fees','sum'));
    }

    function stu_fees()
    {
        $user = auth()->user();
        $gener = GeneralSetting::get()->first();
     
        if(!is_null($gener) && $gener['session']){
            $data = Stu_Admission::where('email',$user->email)->get()->first();
            $fees = FeesCollect::where('stu_id',$data->id)->get();
            $sum = FeesCollect::where('stu_id',$data->id)->where('user_id',$gener['session'])->sum('total');
        }else{
            $data = Stu_Admission::where('email',$user->email)->get()->first();
            $fees = FeesCollect::where('stu_id',$data->id)->get();
            $sum = FeesCollect::where('stu_id',$data->id)->where('user_id',0)->sum('total');
        }
    



        return view('student.fees.index',compact('data','fees','sum','gener'));
    }

   









//---------------------------------- Abhishek----------------------------//

function Stu_class_time()
{
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $data_grid = ClassTime::orderBy('id','desc')->where('class' ,$data['class'])->get();
   
    // dd($data_grid);
    return view('student.class-time.index',compact('data','data_grid'));
}


function lesson_plan(Request $request){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
        $data_grid =  DB::table('add_topic')
        ->join('assign_teacher', 'add_topic.class', '=', 'assign_teacher.class')
        ->select('add_topic.*', 'assign_teacher.class')
        ->where('add_topic.class',$data->class)
        ->get();

        // dd($data_grid);

  
    return view('student.lesson-plan.index',compact('data','data_grid'));
}


function home_work(Request $request){
        $user = auth()->user();
        $data = Stu_Admission::where('email',$user->email)->get()->first();
        $home = HomeWork::orderBy('id','desc')->where('class',$data->class)->get();
//  dd($data);

    return view('student.home-work.index',compact('data','home'));
}





function apply_leave(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $info = StudentLeave::where('user_id',$data->id)->get();
    $class = Add_Class::orderBy('id','desc')->where('class',$data->class)->get();
    // dd($info);
    return view('student.apply-leave.index',compact('data','class','info'));
}


function add_leave(Request $req){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $leave = new StudentLeave;
    $leave->user_id = $data->id;
    $leave->section = $data->section;
    $leave->Student_name = $data->first_name . " " . $data->last_name;
    $leave->Apply_date =$req['Apply_date'];
    $leave->class =$data['class'];
    $leave->from_date =$req['from_date'];
    $leave->to_date =$req['to_date'];
    $leave->reason =$req['reason'];
    {
        $file = $req->file('document');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/uploads/student/homework/', $filename);
        $leave->document = $filename;
    }
    if($leave->save()){
       return back()->with('success','Transferred Successfully');
    }else{
        return back()->with('error','Transfer Unsuccessful');

    }
}

function notice(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $show = AddNotice::orderBy('id','desc')->get();
    return view('student.communicate.index',compact('data','show'));
}

function study_material(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $content = UploadContent::orderBy('id','desc')->where('class',$data->class)->get();
    return view('student.dashboard.study-material',compact('data','content'));
}

function student_syllabus(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $datasyllabus = Syllabus::orderBy('id','desc')->where('class',$data->class)->get();
    return view('student.dashboard.syllabus',compact('data','datasyllabus'));
}



function exam_schedule1(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $dataexam = ExamSchedule::orderBy('id','desc')->where('class',$data->class)->get();

    return view('student.examinations.exam-schedule1',compact('data','dataexam'));

}

function exam_result(Request $request){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();

    $exam = DB::table('exam_results')
    ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.admission_no')
    ->select('exam_results.*', 'student_admission.first_name','student_admission.last_name','student_admission.mobile_no','student_admission.father_name','student_admission.section','student_admission.id as student_id')
    ->orderBy('exam_results.id','desc')
    ->where('exam_results.add_no',$data['admission_no'])
    ->get();
    return view('student.examinations.exam-result',compact('data','exam'));
      
}


function stu_report_card($id){

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

      $data = DB::table('student_admission')
    ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
    ->select('student_admission.*','exam_results.id as res_id','exam_results.half_english','exam_results.half_hindi','exam_results.half_math','exam_results.half_science','exam_results.half_social','exam_results.anul_english','exam_results.anul_hindi','exam_results.anul_math','exam_results.anul_science','exam_results.anul_social','exam_results.anul_sanskrit','exam_results.half_sanskrit','exam_results.st_english','exam_results.st_hindi','exam_results.st_math','exam_results.st_science','exam_results.st_social','exam_results.st_sanskrit','exam_results.result')
    ->where('student_admission.id',$id)
    ->orderBy('student_admission.id','desc')->first();

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

    return view('student.report_card.index',compact('data','detals','januy','febry','march','april','may','jun','july','augst','sept','oct','nov','dec'));
}


function student_attendance(){
    $user = auth()->user();
    $data = Stu_Admission::where('email',$user->email)->get()->first();
    $show = StudentAttendance::orderBy('id','desc')->where('stu_id',$data['id'])->get();
    return view('student.attendance.index',compact('data','show'));

}


function student_froget_password(){
     return view('student.pages.froget-password');
}



public function verify(Request $request)
{
    $key = mt_rand(100000,999999);
    $details = [
      'title' => 'Mail From Forget Password',
      'body' =>   $key
  ];
      $data = $request->input();
    $key_expire = date("Y-m-d H:i:s", strtotime("+30 minutes"));
    $result = User::where('email',$data['email'] , $key_expire)->where('role',3)->get()->first();
    // dd($result);
    if($result){
      if($data['email'] == $result->email)
      {
        $add_info =User::where('email',$result->email)->where('role',3)->get()->first();
        $add_info->email = $request->input('email');
        $add_info->otp = $key;
        session()->put('verify_email',$add_info->email);
        $add_info->update();
        Mail::to($request->input('email'))->send(new DemoMail($details));
          return redirect()->back()->with('opt_modal','OTP Sent Successfully');;
      }else{
      return back()->with('error','Unverified Email');
      }
    }
     else{
      return back()->with('error','Unverified Email');
     }
}

public function check_otp(Request $request)
{
    $request->validate([
        'otp' => 'required|min:6|max:6',
    ]);
        $data = $request->input();
        // dd($data);
        $email = session()->get('verify_email');
        $result = User::where('otp',$data['otp'])->where('email',$email)->get()->first();
        if($result){
          if($data['otp'] == $result->otp)
          {
            session()->put('forget_otp',$result->otp);
            return back()->with('opt_modal','OTP Verified Successfully');
          }else{
          return back()->with('error_otp_check','Enter A Valid OTP');
          }
        }
         else{
          return back()->with('error_otp_check','Enter A Valid OTP');
         }
}

public function new_pass(Request $request)
{
    $validatedData = $request->validate([
        'password' => 'required|min:6|max:15|same:conform_password',
        'conform_password' => 'required|min:6|max:15'
    ]);
   if($email = session()->get('verify_email'))
   {     
    $edit_pass =User::where('email',$email)->get()->first();
     $edit_pass->password = Hash::make($request['password']);
     $edit_pass->conform_password = $request['conform_password'];
    if($edit_pass->update())
    {
      session()->flash('verify_email');
      session()->flash('forget_otp');
      return redirect()->route('Student.Login')->with('success','Password Updated Successfully');
    }else{
      return back()->with('error','error');
    }
    }else{
        return back()->with('error','error');  
    }
}



}
