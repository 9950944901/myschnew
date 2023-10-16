<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stu_Admission extends Model
{
    use HasFactory;
    protected $table = "student_admission";

    protected $fillable = ['admission_no','roll_no','first_name','last_name','class','section','gender','dob','category','religion','caste','mobile_no','email','password','conform_password','admission_date','blood_group','stu_address','weight','as_on_date','father_name','father_mobile','father_occupation','mother_name','mother_phone','mother_occu','gur_name','gur_relation','gur_email','gur_occu','gur_address','height','gur_phone','aadhaar','random_id'];


}
