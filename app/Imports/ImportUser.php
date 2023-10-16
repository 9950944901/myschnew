<?php

namespace App\Imports;

use App\Models\Stu_Admission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;
class ImportUser implements ToModel, WithHeadingRow, WithValidation
{   
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
    
        $rendam = mt_rand(1000,9999);
        $fix = "SA";


     $data1 = new Stu_Admission();
     $data1->random_id = $fix.$rendam;
     $data1->admission_no = $row['admission_no'];
     $data1->roll_no = $row['roll_no'];
     $data1->first_name = $row['first_name'];
     $data1->last_name = $row['last_name'];
     $data1->class = $row['class'];
     $data1->section = $row['section'];
     $data1->gender = $row['gender'];
     $data1->dob = $row['dob'];
     $data1->category = $row['category'];
     $data1->religion = $row['religion'];
     $data1->mobile_no = $row['mobile_no'];

     $data1->email = $row['email'];
     $data1->password = Hash::make($row['conform_password']);
     $data1->conform_password = $row['conform_password'];
     $data1->admission_date = $row['admission_date'];
     $data1->stu_address = $row['stu_address'];
     $data1->father_name = $row['father_name'];
     $data1->father_occupation = $row['father_occupation'];
     $data1->mother_name = $row['mother_name'];
     $data1->gur_name = $row['gur_name'];
     $data1->gur_relation = $row['gur_relation'];
     $data1->gur_address = $row['gur_address'];
     $data1->gur_phone = $row['gur_phone'];
     $data1->aadhaar = $row['aadhaar'];
     $data1->save();

     $data2 = new User();
     $data2->role = 3;
     $data2->student_rendam = $fix.$rendam;
     $data2->email = $row['email'];
     $data2->password = Hash::make($row['conform_password']);
     $data2->conform_password = $row['conform_password'];
     $data2->save();


    }

    public function rules(): array
    {
        return [
            'admission_no' => 'required|unique:student_admission',
            'aadhaar' => 'required|min:12|max:12|unique:student_admission',
            'mobile_no' => 'required|max:10|min:10',
            'father_mobile' => 'max:10|min:10|unique:student_admission',
            'email' => 'required|email|unique:student_admission',
            'email' => 'required|email|unique:users',
         
            'conform_password' => 'required|min:6|max:15',

             // Above is alias for as it always validates in batches
              '*.admission_no' => 'required|unique:student_admission',
              '*.aadhaar' => 'required|min:12|max:12|unique:student_admission',
              '*.mobile_no' => 'required|max:10|min:10',
              '*.email' => 'required|email|unique:student_admission',
              '*.email' => 'required|email|unique:users',
              '*.conform_password' => 'required|min:6|max:15',
          
        ];
        
    }

}
