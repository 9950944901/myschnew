<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
use App\Models\GeneralSetting;
use App\Models\FeesCollect;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index()
    {
        $session = GeneralSetting::get()->first();
        // dd(Carbon::today()->format('Y-m-d'));
        $total_student = Stu_Admission::where('active_status',1)->count();
        if (!is_null($session) && $session['session']) {
        $tot_session_stu = Stu_Admission::where('active_status',1)->where('session',$session['session'])->count();
        $total_fees = FeesCollect::where('user_id',$session['session'])->sum('total');
        $today_total = FeesCollect::whereDate('created_at',Carbon::today()->format('Y-m-d'))->sum('total');
        } else {
            $tot_session_stu = Stu_Admission::where('active_status',1)->where('session',0)->count();
            $total_fees = FeesCollect::where('user_id',0)->sum('total');
            $today_total = FeesCollect::whereDate('created_at',Carbon::today()->format('Y-m-d'))->sum('total');
        }
     
      
        return view('school.dashboard.index',compact('total_student','tot_session_stu','total_fees','today_total'));
    }
    public function teacher_index()
    {
        $session = GeneralSetting::get()->first();
        if (!is_null($session) && $session['session']) {
            $total_student = Stu_Admission::where('active_status',1)->count();
            $tot_session_stu = Stu_Admission::where('active_status',1)->where('session',$session['session'])->count();

        } else {
               $total_student = Stu_Admission::where('active_status',1)->count();
            $tot_session_stu = Stu_Admission::where('active_status',1)->where('session',0)->count();
        }
        
      
        return view('teacher.dashboard.index',compact('total_student','tot_session_stu'));
    }
}
