<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function addClass(){
        // function to create classes
        return view("admin.views.add_class");

    }

    public function listClass(){
        // function to list classes

    }
}
