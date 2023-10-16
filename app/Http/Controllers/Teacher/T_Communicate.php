<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddNotice;

class T_Communicate extends Controller
{
    public function index()
    {
        $show = AddNotice::orderBy('id','desc')->get();
        return view('teacher.communicate.index',compact('show'));
    }
}
