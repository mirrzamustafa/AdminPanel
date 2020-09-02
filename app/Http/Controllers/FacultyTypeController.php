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
    
    public function saveFacultyTypes(Request $request){
        // function to list faculty types
        $request->validate([
            'faculty_type' => 'required|unique:tbl_faculty_types',
            'dd_status' => 'required'
        ]);
        facultytype::create($request->all());
        return redirect()->route("listfacultytypes")->with('success','Faculty type has been successfully created');
    }

  
    public function listFacultyTypes(){
        // function to add faculty types
        $facultytypes = facultytype::get();
        return view("admin.views.list_faculty_type",compact('facultytypes'));
    }

    public function showFacultyTypeDetails(Request $request){
        $details = facultytype::where('id',$request->id)->first();
        return view("admin.views.show_faculty_type_details",compact("details"));
    }

    public function deleteFacultyType(Request $request){
        facultytype::where('id',$request->id)->delete();
        return redirect()->back()->with('success','Faculty type has been successfully deleted');
    }

    public function editFacultyTypeDetails(Request $request){

        $details = facultytype::where('id',$request->id)->first();
        return view("admin.views.edit_faculty_type_details",compact("details"));
    }

    public function updateFacultyTypeDetails(Request $request){

      facultytype::where('id',$request->id)->update(['faculty_type' => $request->faculty_type , 'dd_status' => $request->dd_status]);
       return redirect()->route('listfacultytypes')->with('success','Faculty type details have been successfully updated');
    }
}
