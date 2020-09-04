<?php

namespace App\Http\Controllers;
use App\Models\facultytype;
use App\Models\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function addFacultyMembers(){
        // function to add faculty
        $faculty_type = facultytype::select("faculty_type")->get();
        return view("admin.views.add_faculty_members")->with(compact("faculty_type"));
    }

    public function listFacultyMembers(){
        // function to list faculty
    }
}
