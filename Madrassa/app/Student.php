<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
     protected $fillable = [

            'user_id',
            'student_name',
            'student_dob',
            'student_gender',
            'student_mother',
            'student_father',
            'student_guardian',
            'student_address',
            'student_picode',
            'student_whatsapp',
            'student_current_school',
            'student_current_madrassa',
            'student_blood',
            'student_status',

              ];
}
