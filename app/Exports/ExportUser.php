<?php

namespace App\Exports;

use App\Models\Stu_Admission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
// use Excel;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection1()
    // {

    //     return Stu_Admission::select('admission_no','roll_no','first_name','last_name','class','section','gender','dob','category','religion','email','admission_date','stu_address','aadhaar','father_name','mother_name','mobile_no','father_occupation','gur_name','gur_relation','gur_phone','gur_address','conform_password')->get();
    //   }
    
           protected $data;

           public function __construct($data)
           {
               $this->data = $data;
           }
       
           public function collection()
           {
               return $this->data;
           }
           
 public function headings(): array{
            return ['Admission No','Roll No','First Name','Last Name','Class','Section','Gender','Dob','Category','Religion','Email','Admission Date','Stu Address','Aadhaar','Father Name','Mother Name','Mobile No','Father Occupation','Gur Name','Gur Relation','Gur phone','Gur Address','Conform Password','Random id'];
           }
}

