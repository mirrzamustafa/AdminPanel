<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schoolclass extends Model
{
    protected $table = "tbl_classes";
    protected $fillable = [
        'class_name',
        'class_section_id',
        'seats_available',
        'status'
    ];
}
