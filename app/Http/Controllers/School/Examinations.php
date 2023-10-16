<?php

namespace App\Http\Controllers\School;

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

class Examinations extends Controller
{
    public function index()
    {
        $show = AddExamGroup::orderBy('id','desc')->get();
        return view('school.examinations.index',compact('show'));
    }

    public function exam_schedule(Request $request)
    {
        $ad_class = Add_Class::orderBy('id','desc')->get();
        $group = AddExamGroup::orderBy('id','desc')->get();
        $subject = AddSubject::orderBy('id','desc')->get();
        $subject_group = SubjectGroup::orderBy('id','desc')->get();
        
        if($request['exam_group'] && $request['subject'])
        {
            $data = ExamSchedule::orderBy('id','desc')->where('exam_group',$request['exam_group'])->where('subject',$request['subject'])->get();
        }else{
            $data = ExamSchedule::orderBy('id','desc')->get();
        }
        return view('school.examinations.exam-schedule',compact('group','ad_class','subject','subject_group','data'));
    }

    public function exam_result(Request $request)
    {
        $exam_group = AddExamGroup::orderBy('id','desc')->get();
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        
        if($request['session'] && $request['exam_group'] && $request['class'] && $request['section'])
        {
            $data= DB::table('exam_results')
                ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.id')
                ->select('exam_results.*', 'student_admission.first_name','student_admission.last_name')->orderBy('exam_results.id','desc')->where('exam_results.class',$request['class'])->where('exam_results.section',$request['section'])->where('exam_results.exam_group',$request['exam_group'])->where('exam_results.session',$request['session'])
                ->get();

        }else{

                $data = DB::table('student_admission')
                ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
                ->select('exam_results.*','student_admission.first_name','student_admission.last_name')
                ->orderBy('exam_results.id','desc')->get();

        }

        return view('school.examinations.exam-result',compact('exam_group','class','sec','data'));
    }



    function examresult(){
        $exam_group = AddExamGroup::orderBy('id','desc')->get();
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $Stu_Admiss = Stu_Admission::orderBy('id','desc')->get();

        return view('school.examinations.examresult',compact('exam_group','class','sec','Stu_Admiss'));
    }


    public function marks_grade()
    {
        return view('school.examinations.marks-grade');
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
        $add->exam_group = $request['exam_group']; 
        $add->date_from = $request['date_from'];
        $add->start_time = $request['start_time'];
        $add->duration = $request['duration'];
        $add->class = $request['class'];
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

    public function Student_result_in(Request $request)
    {

$request->validate([
    'roll_no'=>'required|unique:exam_results',
]);

        $add = new ExamResult;
        $add->sname = $request['sname']; 
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
        $add->half_english = $request['half_english'];
        $add->half_hindi = $request['half_hindi'];
        $add->half_math = $request['half_math'];
        $add->half_science = $request['half_science'];
        $add->half_social = $request['half_social'];
        $add->anul_english = $request['anul_english'];
        $add->anul_hindi = $request['anul_hindi'];
        $add->anul_math = $request['anul_math'];
        $add->anul_science = $request['anul_science'];
        $add->anul_social = $request['anul_social'];
        $add->half_sanskrit = $request['half_sanskrit'];
        $add->anul_sanskrit = $request['anul_sanskrit'];

        $add->st_english = $request['st_english'];
        $add->st_hindi = $request['st_hindi'];
        $add->st_math = $request['st_math'];
        $add->st_science = $request['st_science'];
        $add->st_social = $request['st_social'];
        $add->st_sanskrit = $request['st_sanskrit'];
        // dd($add);
        if($add->save()){
            return redirect()->route('SCHOOL.exam-result')->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

function exam_result_edit($id){

    $exam_group = AddExamGroup::orderBy('id','desc')->get();
    $class = Add_Class::orderBy('id','desc')->get();
    $sec = Add_Section::orderBy('id','desc')->get();
    $Stu_Admiss = Stu_Admission::orderBy('id','desc')->get();



$data = ExamResult::find($id);

    // $data = DB::table('student_admission')
    // ->join('exam_results','student_admission.admission_no','=','exam_results.add_no')
    // ->join('add_class','student_admission.class','=','add_class.id')
    // ->select('student_admission.*','add_class.class as addclass','exam_results.id as res_id','exam_results.session','exam_results.st_english','exam_results.st_hindi','exam_results.st_math','exam_results.st_science','exam_results.st_social','exam_results.st_sanskrit','exam_results.half_english','exam_results.half_hindi','exam_results.half_math','exam_results.half_science','exam_results.half_social','exam_results.half_sanskrit','exam_results.anul_english','exam_results.anul_hindi','exam_results.anul_math','exam_results.anul_science','exam_results.anul_social','exam_results.anul_sanskrit','exam_results.exam_group','exam_results.add_no','exam_results.sname')
    // ->where('exam_results.id',$id)
    // ->first();

// dd($data);

    return view('school.examinations.exam_result_edit',compact('exam_group','class','sec','data','Stu_Admiss'));

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

    function Student_result_up(Request $request , $id)
    {
        $add = ExamResult::find($id);
        $add->sname = $request['sname']; 
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
        $add->half_english = $request['half_english'];
        $add->half_hindi = $request['half_hindi'];
        $add->half_math = $request['half_math'];
        $add->half_science = $request['half_science'];
        $add->half_social = $request['half_social'];
        $add->anul_english = $request['anul_english'];
        $add->anul_hindi = $request['anul_hindi'];
        $add->anul_math = $request['anul_math'];
        $add->anul_science = $request['anul_science'];
        $add->anul_social = $request['anul_social'];
        $add->half_sanskrit = $request['half_sanskrit'];
        $add->anul_sanskrit = $request['anul_sanskrit'];
        $add->st_english = $request['st_english'];
        $add->st_hindi = $request['st_hindi'];
        $add->st_math = $request['st_math'];
        $add->st_science = $request['st_science'];
        $add->st_social = $request['st_social'];
        $add->st_sanskrit = $request['st_sanskrit'];
     
    
        if($add->update()){
            return redirect()->route('SCHOOL.exam-result')->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }






}
