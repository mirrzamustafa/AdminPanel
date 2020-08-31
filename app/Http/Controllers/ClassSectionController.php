<?php

namespace App\Http\Controllers;

use App\Models\schoolclass;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
   public function addClassSection(){
        // function to create class sections
        return view('admin.views.add_section');
   }

   public function listClassSection(){
        // function to list all created class sections

   }
}
