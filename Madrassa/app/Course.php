<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //


     protected $fillable = [
        


        'course_name',
        'course_description',
        'course_image',
        'course_duration',
        'course_duration_type',
        'course_category',
        'course_student_type',
        'course_status',
    ];
}
