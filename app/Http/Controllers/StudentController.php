<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudents(){
        // function to add students 
        return view("admin.views.add_student");

    }

    public function listStudents(){
        // function to list students 

    }
}
