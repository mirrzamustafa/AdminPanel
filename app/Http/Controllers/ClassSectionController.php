<?php

namespace App\Http\Controllers;

use App\Models\classsection;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
   public function addClassSection(){
        // function to create class sections
        return view('admin.views.add_section');
   }

   public function saveClassSection(Request $request){
        $request->validate([
             'section_name'  => 'required | unique:tbl_class_sections',
             'status'  => 'required',
        ]);

        classsection::create($request->all());
        return redirect()->route("listclasssections")->with("success","Section added successfully");
   } 

   public function deleteClassSection(Request $request){
        classsection::where('id',$request->id)->delete();
        return redirect()->back()->with("success","Section added successfully");

   }

   public function showClassSection(Request $request){
         $section = classsection::where('id',$request->id)->first();
         return view("admin.views.show_class_section",compact("section"));
   }

   public function editClassSection(Request $request){

          $section = classsection::where('id',$request->id)->first();
          return view("admin.views.edit_class_section",compact("section"));
   } 

   public function updateClassSection(Request $request){
          classsection::where('id', $request->id)->update(['section_name' => $request->section_name, 'status' => $request->status]);
          return redirect()->route("listclasssections")->with("success","Section Edited successfully");

     }

   public function listClassSection(){
        // function to list all created class sections

        $sections = classsection::get();
        return view("admin.views.list_class_sections",compact("sections"));
   }
}
