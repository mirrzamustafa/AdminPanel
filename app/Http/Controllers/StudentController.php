<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request ;

class StudentController extends Controller
{
    public function addStudent(){
        // function to add students 
        return view("admin.views.add_student");

    }

    public function saveStudent(Request $request){
        $request->validate([
            'reg_no' => 'required|unique:tbl_students',
            'student_name' => 'required',
            'student_father_name' => 'required',
            'student_mother_name' => 'required',
            'student_age' => 'required',
            'student_roll_no' => 'required|unique:tbl_students',
            'student_email' => 'required|unique:tbl_students',
            'student_phone_no' => 'required',
            'student_gender' => 'required',
            'student_photo' => 'required',
            'student_address' => 'required',
            'student_status' => 'required',

        ]);
        
        $student = new student();
        if($request->hasfile('student_photo')){
            $picture = $request->file('student_photo');
            $extention = $picture->getClientOriginalExtension();
            $picturename = time() . '.' . $extention ;
            $picture->move('uploads/profile_pictures',$picturename);
            $student->student_photo = $picturename;
        }else{
            return $request;
        }
        $student->reg_no = $request->reg_no;
        $student->student_name = $request->student_name;
        $student->student_father_name = $request->student_father_name;
        $student->student_mother_name = $request->student_mother_name;
        $student->student_age = $request->student_age;
        $student->student_roll_no = $request->student_roll_no;
        $student->student_email = $request->student_email;
        $student->student_phone_no = $request->student_phone_no;
        $student->student_gender = $request->student_gender;
        $student->student_address = $request->student_address;
        $student->student_status = $request->student_status;
        $student->save();        
        return redirect()->route('liststudents')->with('success','Student is added successfully');
    }

    public function listStudents(){
        // function to list students
        $students = student::get();
        return view('admin.views.list_students',compact('students'));
    }

    public function deleteStudent(Request $request){
        student::where('id',$request->id)->delete();
        return redirect()->back()->with("success","Student deleted successfully");
    }

    public function showDetails(Request $request){
        $student = student::where('id',$request->id)->first();
        return view('admin.views.show_student_details', compact('student'));
    }

    public function editDetails(Request $request){
        $student = student::where('id',$request->id)->first();
        return view('admin.views.edit_student_details',compact('student'));
    }

    public function updateDetails(Request $request){

        $request->validate([
            'reg_no' => 'required',
            'student_name' => 'required',
            'student_father_name' => 'required',
            'student_mother_name' => 'required',
            'student_age' => 'required',
            'student_roll_no' => 'required',
            'student_email' => 'required',
            'student_phone_no' => 'required',
            'student_gender' => 'required',
            'student_photo' => 'required',
            'student_address' => 'required',
            'student_status' => 'required',

        ]);
        $student = student::find($request->id);
        if($request->hasfile('student_photo')){
            $picture = $request->file('student_photo');
            $extention = $picture->getClientOriginalExtension();
            $picturename = time() . '.' . $extention ;
            $picture->move('uploads/profile_pictures',$picturename);
            $student->student_photo = $picturename;
        }else{
            return request;
        }
        $student->reg_no = $request->reg_no;
        $student->student_name = $request->student_name;
        $student->student_father_name = $request->student_father_name;
        $student->student_mother_name = $request->student_mother_name;
        $student->student_age = $request->student_age;
        $student->student_roll_no = $request->student_roll_no;
        $student->student_email = $request->student_email;
        $student->student_phone_no = $request->student_phone_no;
        $student->student_gender = $request->student_gender;
        $student->student_address = $request->student_address;
        $student->student_status = $request->student_status;
        $student->save();

        return redirect()->route('liststudents')->with('success','Student edited successfully');
    }
}
