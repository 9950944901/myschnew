<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddLeaveType;
use App\Models\Department;
use App\Models\LeaveRequest;
use App\Models\AddStaff;
use App\Models\AddendanceStaff;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HumanResource extends Controller
{
    public function index()
    {
        $show = AddStaff::orderBy('id','desc')->where('status',1)->get();
        return view('school.human-resource.index',compact('show'));
    }

    public function staff_attendance(Request $request)
    {
        $data = AddStaff::orderBy('id','desc')->where('status',1)->get();
        $filters = [
            'filter_by_staff_id' => $request->input('staff')
        ];
    //    dump($filters);
        if ($request['staff']) {
            $show = DB::table('add_staff')
                    ->join('add_attend_staff', 'add_staff.id', '=', 'add_attend_staff.staff_id')
                    ->select('add_staff.*', 'add_attend_staff.staff_id', 'add_attend_staff.attendance', 'add_attend_staff.desc' , 'add_attend_staff.created_at', 'add_attend_staff.id')->orderBy('add_attend_staff.id','desc')->where('add_attend_staff.staff_id',$request['staff'])
                    ->get();
            }else{
            $show = DB::table('add_staff')
                        ->join('add_attend_staff', 'add_staff.id', '=', 'add_attend_staff.staff_id')
                        ->select('add_staff.*', 'add_attend_staff.staff_id', 'add_attend_staff.attendance', 'add_attend_staff.desc' , 'add_attend_staff.created_at', 'add_attend_staff.id')->orderBy('add_attend_staff.id','desc')
                        ->get();
                  
           }
        return view('school.human-resource.staff-attendance',compact('data','show'));
    }


    public function staff_attendance2(Request $req)
    {

        if(!is_null($req->month)){
            $startjun = Carbon::now()->startOfYear()->month($req->month)->startOfMonth();
            $endjun = Carbon::now()->startOfYear()->month($req->month)->endOfMonth();
            $dates = [];
            while ($startjun <= $endjun) {
                $dates[] = $startjun->format('Y-m-d');
                $startjun->addDay();
            }

            $staf = DB::table('add_staff')
            ->join('add_attend_staff', 'add_staff.id', '=', 'add_attend_staff.staff_id')
            ->select('add_staff.*')->where('add_staff.status',1)->orderBy('add_staff.id','desc')
            ->get(); 

        }else{

            $startjun = Carbon::now()->startOfMonth();
            $endjun = Carbon::now()->endOfMonth();
            $dates = [];
            while ($startjun <= $endjun) {
                $dates[] = $startjun->format('Y-m-d');
                $startjun->addDay();
            }
            $staf = DB::table('add_staff')
            ->join('add_attend_staff', 'add_staff.id', '=', 'add_attend_staff.staff_id')
            ->select('add_staff.*')->where('add_staff.status',1)->orderBy('add_staff.id','desc')
            ->get();
       }

        return view('school.human-resource.staff-attendance2',compact('staf','dates'));
    }
    public function attendance2_list()
    {
        // $show = DB::table('add_staff')
        // ->join('add_attend_staff', 'add_staff.id', '=', 'add_attend_staff.staff_id')
        // ->select('add_staff.*', 'add_attend_staff.staff_id', 'add_attend_staff.attendance', 'add_attend_staff.desc' , 'add_attend_staff.created_at', 'add_attend_staff.id')->orderBy('add_attend_staff.id','desc')
        // ->get();

        $show = AddStaff::orderBy('id','desc')->where('status',1)->get();
        return view('school.human-resource.staff-attendance2_list',compact('show'));
    }

    function attend_staff(Request $request)
    {
        $add = new AddendanceStaff;
        $add->staff_id = $request['staff_id'];
        $add->attendance = $request['attendance'];
        $add->desc = $request['desc'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }


function attendance_sent(Request $req){

  $tec = AddendanceStaff::where('date',$req->date)->first();
//   dd($tec);
   if(is_null($tec)){
     foreach($req->attendance as $stafid => $stafattdence){
             if ($stafattdence == 'Present') {
                $stf_status = "Present";
             } else if($stafattdence == 'Late'){
                $stf_status = "Late";
             }else if($stafattdence == 'Absent'){
                $stf_status = "Absent";
             }else if($stafattdence == 'Half Day'){
                $stf_status = "Half Day";
             }

          $sent = new AddendanceStaff;
          $sent->staff_id = $stafid;
        //   $sent->desc = $req['teachename'];
          $sent->attendance = $stafattdence;
          $sent->date = $req['date'];
        //   dd($sent);
          $sent->save();

            }
            return redirect()->route('SCHOOL.staff-attendance2')->with('success','Attendance Taken Successfully');
        }else{
            return back()->with('error','Error: Attendance Taken Already');
        }

        }



    public function payroll()
    {
        $data = AddStaff::orderBy('id','desc')->get();
        return view('school.human-resource.payroll',compact('data'));
    }

    public function approve_leave_request()
    {
        $data = AddLeaveType::orderBy('id','desc')->get();
        $show = LeaveRequest::orderBy('id','desc')->get();
        $addleavetype = AddLeaveType::orderBy('id','desc')->get();
        // dd($addleavetype);
        return view('school.human-resource.approve-leave-request',compact('data','show','addleavetype'));
    }

    public function apply_leave()
    {
        return view('school.human-resource.apply-leave');
    }

    public function leave_type()
    {
        $data = AddLeaveType::orderBy('id','desc')->get();
     
        return view('school.human-resource.leave-type',compact('data'));
    }

    public function teachers_rating()
    {
        return view('school.human-resource.teachers-rating');
    }

    public function department()
    {
        $show = Department::orderBy('id','desc')->get();
        return view('school.human-resource.department',compact('show'));
    }

    public function disabled_staff()
    {
        $show = AddStaff::orderBy('id','desc')->where('status',0)->get();
        return view('school.human-resource.disabled-staff',compact('show'));
    }

    public function staff_directory_add_staff()
    {
        $show = Department::orderBy('id','desc')->get();
        return view('school.human-resource.staff-directory-add-staff',compact('show'));
    }


    public function staff_directory_show($id)
    {
        $show =AddStaff::find($id);
        return view('school.human-resource.staff-directory-show',compact('show'));
    }

    public function add_leave_type(Request $request)
    {
        $add =new AddLeaveType;
        $add->name = $request['name'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function leave_type_delete($id)
    {
        $delete = AddLeaveType::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_leave_type_update(Request $request , $id)
    {
        $add =AddLeaveType::find($id);
        $add->name = $request['name'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function add_department(Request $request)
    {
        $add =new Department;
        $add->name = $request['name'];
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function department_delete($id)
    {
        $delete = Department::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function department_update(Request $request , $id)
    {
        $add = Department::find($id);
        $add->name = $request['name'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function leave_request(Request $request)
    {
        $add =new LeaveRequest;
        $add->role = $request['role'];
        $add->name = $request['name'];
        $add->date = $request['date'];
        $add->leave_type = $request['leave_type'];
        $add->from_date = $request['from_date'];
        $add->todate = $request['todate'];
        $add->reason = $request['reason'];
        $add->note = $request['note'];
        $add->same = $request['same'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/leavrequest/', $filename);
            $add->document = $filename;
        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function leave_request_up(Request $request,$id)
    {
        $add = LeaveRequest::find($id);
        $add->role = $request['role'];
        $add->name = $request['name'];
        $add->date = $request['date'];
        $add->leave_type = $request['leave_type'];
        $add->from_date = $request['from_date'];
        $add->todate = $request['todate'];
        $add->reason = $request['reason'];
        $add->note = $request['note'];
        $add->same = $request['same'];
        if($request->hasfile('document'))
        {
            $file = $request->file('document');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/leavrequest/', $filename);
            $add->document = $filename;
        }
        if($add->save()){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }
    }
    

    public function leave_request_delete($id)
    {
        $delete = LeaveRequest::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function view_request_update(Request $request , $id)
    {
        $add = LeaveRequest::find($id);
        $add->same = $request['same'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function add_staff(Request $req)
    {
        $rendam = mt_rand(100,999);
        $fix = "STF";

        $validatedData = $req->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:15|same:conform_password',
            'conform_password' => 'required|min:6|max:15',
        ]);
        $add =new AddStaff;

        $add->staff_id = $fix.$rendam;
        $add->role = $req['role'];
        $add->designation = $req['designation'];
        $add->department = $req['department'];
        $add->firstname = $req['firstname'];
        $add->lastname = $req['lastname'];
        $add->father_name = $req['father_name'];
        $add->mother_name = $req['mother_name'];
        $add->email = $req['email'];
        $add->gender = $req['gender'];
        $add->dob = $req['dob'];
        $add->joining_date = $req['joining_date'];
        $add->phone = $req['phone'];
        $add->contact_no = $req['contact_no'];
        $add->marital_status = $req['marital_status'];
        if($req->hasfile('staff_image'))
        {
            $file = $req->file('staff_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/staff/', $filename);
            $add->staff_image = $filename;
        }
        $add->cadd = $req['cadd'];
        $add->padd = $req['padd'];
        $add->qualification = $req['qualification'];
        $add->work_exp = $req['work_exp'];
        $add->note = $req['note'];
        if($add->save())
        {
            $data = new User;
             $data->name = $req->firstname . ' '. $req->lastname;
            $data->email = $req['email'];
            $data->password = Hash::make($req['password']);
            $data->conform_password = $req['conform_password'];
            $data->phone = $req['phone'];
            $data->role = '2';
            $data->save();
            return redirect()->route('SCHOOL.staff-directory')->with('success','Added Successfully');
        }else{
            return back()->with('error','Error');
        }

    }

    public function edit_staff($id)
    {
        $show = Department::orderBy('id','desc')->get();
        // $add = AddStaff::find($id);
        // dd($add);

$add = DB::table('users')
         ->join('add_staff','users.email','=','add_staff.email')
           ->select('add_staff.*','users.conform_password')->where('add_staff.id',$id)->first();

// dd($add);

        return view('school.human-resource.edit-staff',compact('show','add'));
    }

function staff_directory_del($id){

    $del = AddStaff::find($id);
    
    if ($del->delete()) {
        return back()->with('success','deleted record Successfully');
    } else {
        return back()->with('error','deleted record Successfully');
    }
    
}


    public function update_staff(Request $req , $id)
    {
        // dd($req->input());
        $add =AddStaff::find($id);
        // $add->staff_id = $req['staff_id'];
        $add->role = $req['role'];
        $add->designation = $req['designation'];
        $add->department = $req['department'];
        $add->firstname = $req['firstname'];
        $add->lastname = $req['lastname'];
        $add->email = $req['email'];
        $add->father_name = $req['father_name'];
        $add->mother_name = $req['mother_name'];
        $add->gender = $req['gender'];
        $add->dob = $req['dob'];
        $add->joining_date = $req['joining_date'];
        $add->phone = $req['phone'];
        $add->contact_no = $req['contact_no'];
        $add->marital_status = $req['marital_status'];
        $add->status = $req['status'];
        if($req->hasfile('staff_image'))
        {
            $file = $req->file('staff_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/staff/', $filename);
            $add->staff_image = $filename;
        }
        $add->cadd = $req['cadd'];
        $add->padd = $req['padd'];
        $add->qualification = $req['qualification'];
        $add->work_exp = $req['work_exp'];
        $add->note = $req['note'];

if ($up = User::where('email',$req->oldemail)->first()) {
    $up = User::where('email',$req->oldemail)->first();
    $up->name = $req->firstname . " " . $req->lastname;
    $up->email = $req->email;
    $up->conform_password = $req->password;
    $up->password = Hash::make($req->password);
    $up->update();
} else {
    return back()->with('error','Error');
}


        
        if($add->update())
        {
            return redirect()->route('SCHOOL.staff-directory')->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    




    public function attend_staff_delete($id)
    {
        $delete = AddendanceStaff::find($id);
        if($delete->delete())
        {
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function attend_staff_update(Request $request , $id)
    {     
        // dd($request->input());
        $add = AddendanceStaff::find($id);
        $add->staff_id = $request['staff_id'];
        $add->attendance = $request['attendance'];
        $add->desc = $request['desc'];
        if($add->update()){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Error');
        }
    }

    public function generate_payroll()
    {
        return view('school.human-resource.generate-payroll');
    }

}
