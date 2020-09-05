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

    public function saveFacultyMembers(Request $request){
        $request->validate([
            "dd_type" => "required",
            "name" => "required|unique:tbl_faculties",
            "email" => "required|unique:tbl_faculties",
            "gender" => "required",
            "faculty_mem_phone_no" => "required",
            "faculty_mem_picture" => "required",
            "faculty_mem_address" => "required",
            "status" => "required"
        ]);
        $faculty = new faculty();
        if($request->hasFile('faculty_mem_picture')){
            $picture = $request->file('faculty_mem_picture');
            $extention = $picture->getClientOriginalExtension();
            $picturename = time() . '.' . $extention ;
            $picture->move('uploads/faculty_pictures',$picturename);
            $faculty->profile_photo = $picturename;
        }else{
            return $request;
        }
        $faculty->faculty_type = $request->dd_type;
        $faculty->name = $request->name; 
        $faculty->email = $request->email; 
        $faculty->phone_no = $request->faculty_mem_phone_no;
        $faculty->gender = $request->gender;
        $faculty->status = $request->status;
        $faculty->address = $request->faculty_mem_address;
        $faculty->save();

        return redirect()->route("listfacultymembers")->with("success", "Faculty member added successfully");
    }

    public function deleteFacultyMembers(Request $request){
        faculty::where('id' , $request->id)->first()->delete();
        return redirect()->route("listfacultymembers")->with("success", "Faculty member deleted successfully");
    }   

    public function editFacultyMember(Request $request){
        $faculty_type = facultytype::select("faculty_type")->get();
        $details = faculty::where('id',$request->id)->first();
        return view("admin.views.edit_faculty_members",compact("details","faculty_type"));
    }

    public function updateFacultyMember(Request $request){
        $request->validate([
            "dd_type" => "required",
            "name" => "required",
            "email" => "required",
            "gender" => "required",
            "faculty_mem_phone_no" => "required",
            "faculty_mem_picture" => "required",
            "faculty_mem_address" => "required",
            "status" => "required"
        ]);

        $faculty = new faculty();
      if($request->hasFile('faculty_mem_picture')){
            $picture = $request->file('faculty_mem_picture');
            $extention = $picture->getClientOriginalExtension();
            $picturename = time() . '.' . $extention ;
            $picture->move('uploads/faculty_pictures',$picturename);
            $faculty->profile_photo = $picturename;
        }else{
            return $request;
        }
        $faculty->faculty_type = $request->dd_type;
        $faculty->name = $request->name; 
        $faculty->email = $request->email; 
        $faculty->phone_no = $request->faculty_mem_phone_no;
        $faculty->gender = $request->gender;
        $faculty->status = $request->status;
        $faculty->address = $request->faculty_mem_address;
        $faculty->save();
        return redirect()->route("listfacultymembers")->with("success","Faculty member updated successfully");
    }

    public function showFacultyMember(Request $request){
        $details = faculty::where('id', $request->id)->first();
        return view("admin.views.show_faculty_member")->with(compact("details"));
    }

    public function listFacultyMembers(){
        // function to list faculty
        $faculty = faculty::get();
        return view("admin.views.list_faculty_members",compact("faculty"));
    }
}
