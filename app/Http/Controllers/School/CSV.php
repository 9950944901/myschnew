<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportAdmisan;
use App\Imports\ImportUser;
use App\Imports\studentUser;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\Validator;
use League\Csv\Reader;
use App\Models\Stu_Admission;

class CSV extends Controller
{
    public function importView(Request $request){
        return view('school.csv.admisan.importFile');
    }

    public function import(Request $request){
            $request->validate([
                'filecsv' => 'required',
            ]);

        try {
            Excel::import(new ImportUser, $request->file('filecsv')->store('files'));
            return redirect()->route('SCHOOL.Student.Details')->with('success','Imported CSV File Successfully');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
            //  dd($failures);
             return back()->with('import_error',$failures);
            //  foreach ($failures as $failure) {
            //      $failure->row(); // row that went wrong
            //      $failure->attribute(); // either heading key (if using heading row concern) or column index
            //      $failure->errors(); // Actual error messages from Laravel validator
            //      $failure->values(); // The values of the row that has failed.
            //  }
        }

    }



//   protected $id;

//     public function __construct($id)
//     {
//         $this->id = $id;
//     }


    public function up_import(Request $request){
            $request->validate([
                'filecsv2' => 'required',
            ]);

        try {
            Excel::import(new studentUser, $request->file('filecsv2')->store('files'));
            return redirect()->route('SCHOOL.Student.Details')->with('success','Imported CSV File Successfully');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
            //  dd($failures);
             return back()->with('import_error_update',$failures);
            //  foreach ($failures as $failure) {
            //      $failure->row(); // row that went wrong
            //      $failure->attribute(); // either heading key (if using heading row concern) or column index
            //      $failure->errors(); // Actual error messages from Laravel validator
            //      $failure->values(); // The values of the row that has failed.
            //  }
        }

    }















    

    public function exportUsers(Request $request){
        $data = Stu_Admission::select('admission_no', 'roll_no', 'first_name', 'last_name', 'class', 'section', 'gender', 'dob', 'category', 'religion', 'email', 'admission_date', 'stu_address', 'aadhaar', 'father_name', 'mother_name', 'mobile_no', 'father_occupation', 'gur_name', 'gur_relation', 'gur_phone', 'gur_address', 'conform_password','random_id')->where('class', $request['classcsv'])->where('section', $request['sectioncsv'])->get();

        return Excel::download(new ExportUser($data), 'student_admission.xlsx');

    }


}
