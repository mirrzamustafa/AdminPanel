<?php

namespace App\Http\Controllers;

use App\Models\facultytype;
use Illuminate\Http\Request;

class FacultyTypeController extends Controller
{
    public function addFacultyTypes(){
        // function to list faculty types
        return view("admin.views.add_faculty_type");

    }

    public function listFacultyTypes(){
        // function to add faculty types

    }
}
