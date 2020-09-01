<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = "tbl_students";
    protected $fillable = [
                            'reg_no',
                            'student_name',
                            'student_father_name',
                            'student_mother_name',
                            'student_age',
                            'student_roll_no',
                            'student_email',
                            'student_phone_no',
                            'student_gender',
                            'student_photo',
                            'student_address',
                            'student_status',
                        ];
}
