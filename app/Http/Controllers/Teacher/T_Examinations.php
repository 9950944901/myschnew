<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\SubjectGroup;
use App\Models\AddSubject;
use App\Models\AddLesson;
use App\Models\AddStaff;
use App\Models\AddTopic;
use App\Models\AddExamGroup;
use App\Models\ExamSchedule;
use App\Models\Stu_Admission;
use App\Models\ExamResult;
use Hash;
use Session;
use Mail;
use File;
use Illuminate\Support\Facades\DB;
use App\Models\School_Information;
use Illuminate\Support\Carbon;

class T_Examinations extends Controller
{
    public function index()
    {
        $show = AddExamGroup::orderBy('id','desc')->get();
        return view('teacher.examinations.index',compact('show'));
    }

    public function exam_schedule(Request $request)
    {
        // dd($request->input());
        $aa_class = Add_Class::orderBy('id','desc')->where('status',1)->get();
        $group = AddExamGroup::orderBy('id','desc')->get();
        $subject = AddSubject::orderBy('id','desc')->get();
        $subject_group = SubjectGroup::orderBy('id','desc')->get();
        // dd($aa_class);
        if($request['exam_group'] && $request['subject'])
        {
            $data = ExamSchedule::orderBy('id','desc')->where('exam_group',$request['exam_group'])->where('subject',$request['subject'])->get();
            // dd($data);
        }else{
            $data = ExamSchedule::orderBy('id','desc')->get();
          
        }
        return view('teacher.examinations.exam-schedule',compact('group','aa_class','subject','subject_group','data'));
    }

    public function exam_result(Request $request)
    {
        $exam_group = AddExamGroup::orderBy('id','desc')->get();
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();

        if($request['session'] && $request['exam_group'] && $request['class'] && $request['section'])
        {
            $data= DB::table('exam_results')
                ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.admission_no')
                // ->join('student_admission', 'exam_result.class', '=', 'student_admission.class')
                ->select('exam_results.*', 'student_admission.first_name','student_admission.last_name','student_admission.first_name','student_admission.mobile_no','student_admission as student_id',)->orderBy('exam_results.id','desc')->where('exam_results.class',$request['class'])->where('exam_results.section',$request['section'])->where('exam_results.exam_group',$request['exam_group'])->where('exam_results.session',$request['session'])
                ->get();

        }else{
        $data= DB::table('exam_results')
                ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.admission_no')
                // ->join('student_admission', 'exam_result.class', '=', 'student_admission.class')
                ->select('exam_results.*', 'student_admission.first_name','student_admission.id as student_id','student_admission.mobile_no','student_admission.father_name','student_admission.last_name')
                ->orderBy('student_admission.id','desc')
                ->get();
                // dd($data);
        }
        return view('teacher.examinations.exam-result',compact('exam_group','class','sec','data'));
    }

    public function marks_grade()
    {
        return view('teacher.examinations.marks-grade');
    }

    public function add_exam(Request $request)
    {
        $add = new AddExamGroup;
        $add->name = $request['name']; 
        $add->exam_type = $request['exam_type']; 
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_exam($id)
    {
        $delete = AddExamGroup::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function update_exam(Request $request , $id)
    {
        $add = AddExamGroup::find($id);
        $add->name = $request['name']; 
        $add->exam_type = $request['exam_type']; 
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function add_exam_schedule(Request $request)
    {
        $add = new ExamSchedule;
        $add->subject = $request['subject']; 
        $add->class = $request['class'];
        $add->exam_group = $request['exam_group']; 
        $add->date_from = $request['date_from'];
        $add->start_time = $request['start_time'];
        $add->duration = $request['duration'];
        $add->room_no = $request['room_no'];
        $add->max_marks = $request['max_marks'];
        $add->min_marks = $request['min_marks'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_exam_schedule($id)
    {
        $delete = ExamSchedule::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function update_exam_schedule(Request $request , $id)
    {
        $add = ExamSchedule::find($id);
        $add->subject = $request['subject']; 
        $add->exam_group = $request['exam_group']; 
        $add->date_from = $request['date_from'];
        $add->start_time = $request['start_time'];
        $add->duration = $request['duration'];
        $add->class = $request['class'];
        $add->room_no = $request['room_no'];
        $add->max_marks = $request['max_marks'];
        $add->min_marks = $request['min_marks'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_exam_result(Request $request)
    {
        $add =new ExamResult;
        $add->session = $request['session']; 
        $add->exam_group = $request['exam_group']; 
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->roll_no = $request['roll_no'];
        $add->add_no = $request['add_no'];
        $add->total_marks = $request['total_marks'];
        $add->rec_marks = $request['rec_marks'];
        $add->percent = $request['percent'];
        $add->result = $request['result'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_exam_result($id)
    {
        $delete = ExamResult::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    function update_exam_result(Request $request , $id)
    {
        $add =ExamResult::find($id);
        $add->session = $request['session']; 
        $add->exam_group = $request['exam_group']; 
        $add->class = $request['class'];
        $add->section = $request['section'];
        $add->roll_no = $request['roll_no'];
        $add->add_no = $request['add_no'];
        $add->total_marks = $request['total_marks'];
        $add->rec_marks = $request['rec_marks'];
        $add->percent = $request['percent'];
        $add->result = $request['result'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

function Student_report_card($id){


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

    return view('teacher.report_card.index',compact('data','detals','januy','febry','march','april','may','jun','july','augst','sept','oct','nov','dec'));
}










}
