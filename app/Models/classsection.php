<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classsection extends Model
{
    protected $table = "tbl_class_sections";
    protected $fillable = ["section_name","status"];

}
