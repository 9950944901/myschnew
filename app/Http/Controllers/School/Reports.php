<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
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
use App\Models\ExamResult;
use App\Models\ClassTime;
use App\Models\AddmissionEnquiry;
use App\Models\Syllabus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
use File;

class Reports extends Controller
{
    public function index(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if ($request['class'] && $request['section']) {
            $show = Stu_Admission::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->get();
            // dump($show);
        }else{
            $show = Stu_Admission::orderby('id','desc')->get();
            // dd($show);
        } 

        $data_show = DB::table('student_admission')
                ->join('users', 'student_admission.email', '=', 'users.email')
                ->select('student_admission.*','users.conform_password')
                ->get();
                // dd($data);
          $data_grid = ClassTime::orderBy('id','desc')->get();
          $data_enqiry = AddmissionEnquiry::orderBy('id','desc')->get();
       
        return view('school.reports.index',compact('class','sec','show','data_show','data_grid','data_enqiry'));
    }

    public function finance()
    {
        return view('school.reports.finance');
    }

    public function attendance()
    {
        return view('school.reports.attendance');
    }

    public function examinations(Request $request)
    {
        $class = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        $exam_group = AddExamGroup::orderBy('id','desc')->get();
        if($request['session'] && $request['exam_group'] && $request['class'] && $request['section'])
        {
            $data= DB::table('exam_results')
                ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.admission_no')
                // ->join('student_admission', 'exam_result.class', '=', 'student_admission.class')
                ->select('exam_results.*', 'student_admission.first_name','student_admission.last_name')
                ->orderBy('exam_results.id','desc')
                ->where('exam_results.class',$request['class'])->where('exam_results.section',$request['section'])->where('exam_results.exam_group',$request['exam_group'])->where('exam_results.session',$request['session'])
                ->get();

        }else{
        $data= DB::table('exam_results')
                ->join('student_admission', 'exam_results.add_no', '=', 'student_admission.admission_no')
                // ->join('student_admission', 'exam_result.class', '=', 'student_admission.class')
                ->select('exam_results.*', 'student_admission.first_name','student_admission.last_name')
                ->orderBy('exam_results.id','desc')
                ->get();
                // dd($data);
        }
        return view('school.reports.examinations',compact('class','sec','exam_group','data'));
    }

    public function online_examination()
    {
        return view('school.reports.online-examination');
    }

    public function lesson_plan()
    {
        $view = AddTopic::orderBy('id','desc')->get();
        $syllabus = Syllabus::orderBy('id','desc')->get();
        return view('school.reports.lesson-plan',compact('view','syllabus'));
    }

    public function human_resource()
    {
        $show = AddStaff::orderBy('id','desc')->get();
        return view('school.reports.human-resource',compact('show'));
    }

    public function transport()
    {
        return view('school.reports.transport');
    }

    public function alumni()
    {
        return view('school.reports.alumni');
    }

    public function user_log()
    {
        $add_user = User::orderBy('id','desc')->where('role',2)->orwhere('role',3)->get();
        $staff = User::orderBy('id','desc')->where('role',2)->get();
        $student = User::orderBy('id','desc')->where('role',3)->get();
        return view('school.reports.user-log',compact('add_user','staff','student'));
    }
}
