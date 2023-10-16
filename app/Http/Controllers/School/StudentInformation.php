<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stu_Admission;
use App\Models\User;
use App\Models\Add_Class;
use App\Models\Add_Section;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class StudentInformation extends Controller
{
    public function index(Request $request)
    {
        
        $data = Add_Class::orderBy('id','desc')->get();
        $sec = Add_Section::orderBy('id','desc')->get();
        if ($request['class'] && $request['section']) {
            $show = Stu_Admission::orderBy('id','desc')->where('class',$request['class'])->where('section',$request['section'])->get();
        }else{
            $show = Stu_Admission::orderby('id','desc')->get();
        } 
        return view('school.student-information.index',compact('show','data','sec'));
    }

    public function student_details_show($id)
    {
        $show = Stu_Admission::find($id);
        return view('school.student-information.student-details-show',compact('show'));
    }

    public function student_details_edit($id)
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $show = Add_Section::orderBy('id','desc')->get();
         $add = Stu_Admission::find($id);
        return view('school.student-information.student-details-edit',compact('data','show','add'));
    }

    public function student_admission()
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $show = Add_Section::orderBy('id','desc')->get();
        return view('school.student-information.student-admission',compact('data','show'));
    }

    public function student_admission_import()
    {
        return view('school.student-information.student-admission-import');
    }

    public function online_admission()
    {
        $data = Add_Class::orderBy('id','desc')->get();
        $show = Add_Section::orderBy('id','desc')->get();
        return view('school.student-information.online-admission',compact('data','show'));
    }

    public function disabled_students()
    {
        $show = Stu_Admission::orderby('id','desc')->where('active_status',0)->get();
        return view('school.student-information.disabled-students',compact('show'));
    }


        function student_Active($id){
        $status = Stu_Admission::where('id',$id)->update(['active_status' => 0]);
        return back()->with('success','Status Changed Successfully');
        }
        function details_inactive($id){
        $status = Stu_Admission::where('id',$id)->update(['active_status' => 1]);
        return back()->with('success','Status Changed Successfully');
        }

    public function bulk_delete()
    {
        return view('school.student-information.bulk-delete');
    }

    public function student_categories()
    {
        return view('school.student-information.student-categories');
    }

    public function disabled_reason()
    {
        return view('school.student-information.disabled-reason');
    }


    public function student_admission_data(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|email|unique:users',
            'aadhaar' => 'required|unique:student_admission',
            'admission_no' => 'required|unique:student_admission',
            'password' => 'required|min:6|max:15|same:conform_password',
            'conform_password' => 'required|min:6|max:15',
        ],
        [
            'aadhaar.required' => 'required unique Aadhaar no.',
            'admission_no.required' => 'required unique admission no.',
            'password.required' => 'Password and confirm password did not match',
            'conform_password.required' => 'Required confirm password',
        ]);
        $session = GeneralSetting::get()->first();

if(!is_null($session) && $session['session']){

        $add =new Stu_Admission;
        $add->admission_no = $req['admission_no'];
        $add->roll_no = $req['roll_no'];
        $add->aadhaar = $req['aadhaar'];
        $add->class = $req['class'];
        $add->section = $req['section'];
        $add->first_name = $req['first_name'];
        $add->last_name = $req['last_name'];
        $add->password = $req['password'];
        $add->conform_password = $req['conform_password'];
        $add->gender = $req['gender'];
        $add->dob = $req['dob'];
        $add->category = $req['category'];
        $add->religion = $req['religion'];
        $add->caste = $req['caste'];
        $add->mobile_no = $req['mobile_no'];
        $add->email = $req['email'];
        $add->admission_date = $req['admission_date'];
        $add->session = $session['session'];
        if($req->hasfile('student_image'))
        {
            $file = $req->file('student_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/students/', $filename);
            $add->student_image = $filename;
        }
        $add->blood_group = $req['blood_group'];
        $add->stu_address = $req['stu_address'];
        $add->height = $req['height'];
        $add->weight = $req['weight'];
        $add->as_on_date = $req['as_on_date'];
        $add->father_name = $req['father_name'];
        $add->father_mobile = $req['father_mobile'];
        $add->father_occupation = $req['father_occupation'];
        if($req->hasfile('father_photo'))
        {
            $file = $req->file('father_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/father/', $filename);
            $add->father_photo = $filename;
        }
        if($req->hasfile('mother_photo'))
        {
            $file = $req->file('mother_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/mother/', $filename);
            $add->mother_photo = $filename;
        }
        if($req->hasfile('gur_photo'))
        {
            $file = $req->file('gur_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/gur_photo/', $filename);
            $add->gur_photo = $filename;
        }
        $add->mother_name = $req['mother_name'];
        $add->mother_phone = $req['mother_phone'];
        $add->mother_occu = $req['mother_occu'];
        $add->guardian = $req['guardian'];
        $add->gur_name = $req['gur_name'];
        $add->gur_relation = $req['gur_relation'];
        $add->gur_email = $req['gur_email'];
        $add->gur_phone = $req['gur_phone'];
        $add->gur_occu = $req['gur_occu'];
        $add->gur_address = $req['gur_address'];
        if($add->save())
        {
            $data = new User;
            $data->name = $req['first_name'].$req['last_name'];
            $data->email = $req['email'];
            $data->password = Hash::make($req['password']);
            $data->conform_password = $req['conform_password'];
            $data->phone = $req['mobile_no'];
            $data->role = '3';
            $data->save();
            return redirect()->route('SCHOOL.Student.Details')->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }else{
        return back()->with('error','Error: Added Session');
    }





    }

    public function add_class(Request $req)
    {
        $add = new Add_Class;
        $add->class = $req['class'];
        if($add->save())
        {
            return back()->with('success','Class Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_section(Request $req)
    {
        $add = new Add_Section;
        $add->section = $req['section'];
        if($add->save())
        {
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_sec($id){
        $delete = Add_Section::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Record Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function delete_class($id){
        $delete = Add_Class::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Record Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


    public function edit_class(Request $req ,$id)
    {
        $add =Add_Class::find($id);
        $add->class = $req['class'];
        if($add->save())
        {
            return back()->with('success','Class Edited Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function edit_section(Request $req ,$id)
    {
        $add =Add_Section::find($id);
        $add->section = $req['section'];
        if($add->save())
        {
            return back()->with('success','Section Edited Successfully');
        }else{
            return back()->with('error','Error');
        }

    }


    
    public function student_details_delete($id){
        $delete = Stu_Admission::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function student_edit_detatils(Request $req,$id)
    {

        $req->validate([
            'email' => 'required|email|unique:student_admission,email,'.$id,
            'admission_no' => 'required|unique:student_admission,admission_no,'.$id,
            'aadhaar' => 'required|unique:student_admission,aadhaar,'.$id,
        ]);
       
        $add =Stu_Admission::find($id);
        $add->admission_no = $req['admission_no'];
        $add->roll_no = $req['roll_no'];
        $add->class = $req['class'];
        $add->section = $req['section'];
        $add->first_name = $req['first_name'];
        $add->last_name = $req['last_name'];
        $add->gender = $req['gender'];
        $add->dob = $req['dob'];
        $add->category = $req['category'];
        $add->religion = $req['religion'];
        $add->caste = $req['caste'];
        $add->mobile_no = $req['mobile_no'];
        $add->email = $req['email'];
        $add->password = Hash::make($req['password']);
        $add->conform_password = $req['password'];
        $add->admission_date = $req['admission_date'];
        if($req->hasfile('student_image'))
        {
            $file = $req->file('student_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/students/', $filename);
            $add->student_image = $filename;
        }
        $add->blood_group = $req['blood_group'];
        $add->stu_address = $req['stu_address'];
        $add->height = $req['height'];
        $add->weight = $req['weight'];
        $add->as_on_date = $req['as_on_date'];
        $add->father_name = $req['father_name'];
        $add->father_mobile = $req['father_mobile'];
        $add->father_occupation = $req['father_occupation'];
        if($req->hasfile('father_photo'))
        {
            $file = $req->file('father_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/father/', $filename);
            $add->father_photo = $filename;
        }
        if($req->hasfile('mother_photo'))
        {
            $file = $req->file('mother_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/mother/', $filename);
            $add->mother_photo = $filename;
        }
        if($req->hasfile('gur_photo'))
        {
            $file = $req->file('gur_photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/gur_photo/', $filename);
            $add->gur_photo = $filename;
        }
        $add->mother_name = $req['mother_name'];
        $add->mother_phone = $req['mother_phone'];
        $add->mother_occu = $req['mother_occu'];
        $add->guardian = $req['guardian'];
        $add->gur_name = $req['gur_name'];
        $add->gur_relation = $req['gur_relation'];
        $add->gur_email = $req['gur_email'];
        $add->gur_phone = $req['gur_phone'];
        $add->gur_occu = $req['gur_occu'];
        $add->gur_address = $req['gur_address'];
        $add->bank_no = $req['bank_no'];
        $add->bank_name = $req['bank_name'];
        $add->ifsc = $req['ifsc'];
        $add->aadhaar = $req['aadhaar'];
        $add->lin_no = $req['lin_no'];
        $add->rte = $req['rte'];
        $add->pre_school = $req['pre_school'];
        $add->notes = $req['notes'];

    if ($up = User::where('email',$req->oldemail)->first()) {
        $up = User::where('email',$req->oldemail)->first();
        $up->name = $req->first_name . " " . $req->last_name;
        $up->email = $req['email'];
        $up->password = Hash::make($req['password']);
        $up->conform_password = $req['password'];
        $up->update();
        
    } else {
        return back()->with('error','Error');
    }
        if($add->update())
        {
            return redirect()->route('SCHOOL.Student.Details')->with('success','Edited Successfully');
        }else{
            return back()->with('error','Error');
        }

    }


    public function student_details(Request $req)
    {
        $data = Stu_Admission::orderBy('id','desc')->where('class',$req->class)->orwhere('section',$req->section)->get();

        return view('school.student-information.show-filter',compact('data'));
    }

}
