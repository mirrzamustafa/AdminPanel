<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = "tbl_faculties";
    protected $fillable = ["faculty_type","name","email","phone_no","gender","profile_photo","address","status"];

}
