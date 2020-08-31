<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function addFacultyMembers(){
        // function to add faculty
        return view("admin.views.add_faculty_members");
    }

    public function listFacultyMembers(){
        // function to list faculty

    }
}
