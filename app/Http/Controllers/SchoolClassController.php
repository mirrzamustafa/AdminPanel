<?php

namespace App\Http\Controllers;
use App\Models\classsection;
use App\Models\schoolclass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{


    public function addClass(){
        // function to create classes
        $sections = classsection::select("section_name")->get();
        return view("admin.views.add_class")->with(compact("sections"));
    }

    public function saveClass(Request $request){
     // return $request->all();

     //form field name
        $request->validate([
            'class_name' => 'required | unique:tbl_classes',
            'section' => 'required',
            'seats_available' => 'required ',
            'status' => 'required',
        ]);
        //if you want to use this method you jhave to use the same input field as use in database columns 
                //schoolclass::create($request->all());
                //if different name
                $n = new schoolclass();
                $n->class_name = $request->class_name;
                $n->class_section_id = $request->section;
                $n->seats_available = $request->seats_available;
                $n->status = $request->status;
                $n->save();
        return redirect()->route('listclasses')->with('success','Class added successfully');

    }  

    public function deleteClass(Request $request){
       schoolclass::where('id', $request->id)->first()->delete();
       return redirect()->route('listclasses')->with('success','Class deleted successfully');
    }  

    public function showClass(Request $request){
        $class = schoolclass::where('id', $request->id)->first();
        return view('admin.views.show_class_details', compact('class'));
    }   

    public function updateClass(Request $request){
        $request->validate([
            'class_name' => 'required',
            'dd_section' => 'required',
            'seats_available' => 'required',
            'dd_status' => 'required',
        ]);
        schoolclass::where('id', $request->id)->update(['class_name' => $request->class_name,'class_section_id' => $request->dd_section,'seats_available' => $request->seats_available,'status' => $request->dd_status] );
        return redirect()->route('listclasses')->with('success','Class edited successfully');
    }

    public function editClass(Request $request){
        $class = schoolclass::where('id',$request->id)->first();
        return view("admin.views.edit_class_details", compact("class"));
    }

    public function listClass(){
        // function to list classes
        $classes = schoolclass::get();
        return view('admin.views.list_classes' , compact('classes')) ;
    }
}
