<?php

use Illuminate\Support\Facades\Route;
Route::get('/','AdminHomeController@dashboard')->name('dashboard');


// Admin control 
Route::get("/login", "AdminController@adminLoginForm")->name("login");
Route::get("/register","AdminController@adminRegisterForm")->name("register");

// classes Section routes

Route::get("/add-section","ClassSectionController@addClassSection")->name('addclasssection');
Route::get("/list-section","ClassSectionController@listClassSection")->name('listclasssections');
Route::post("/save-section","ClassSectionController@saveClassSection")->name("saveclasssection");
Route::get("/delete-section","ClassSectionController@deleteClassSection")->name("deleteclasssection");
Route::get("/show-section","ClassSectionController@showClassSection")->name("showclasssection");
Route::get("/edit-section","ClassSectionController@editClassSection")->name("editclasssection");
Route::post("/update-section","ClassSectionController@updateClassSection")->name("updateclasssection");

// classes routes


Route::get("/add-class","SchoolClassController@addClass")->name('addclasses');
Route::get("/list-class","SchoolClassController@listClass")->name('listclasses');
Route::post("/save-class","SchoolClassController@saveClass")->name('saveclasses');
Route::get("/delete-class","SchoolClassController@deleteClass")->name('deleteclass');
Route::get("/show-class","SchoolClassController@showClass")->name('showclass');
Route::post("/update-class","SchoolClassController@updateClass")->name('updateclass');
Route::get("/edit-class","SchoolClassController@editClass")->name('editclass');

// faculty type routes

Route::get("/add-faculty-types","FacultyTypeController@addFacultyTypes")->name("addfacultytypes");
Route::get("/list-faculty-types","FacultyTypeController@listFacultyTypes")->name("listfacultytypes");
Route::post("/save-faculty-type", "FacultyTypeController@saveFacultyTypes")->name('savefacultytypes');
Route::get("/delete-faculty-type", 'FacultyTypeController@deleteFacultyType')->name("deletefacultytype");
Route::get("/show-faculty-type", 'FacultyTypeController@showFacultyTypeDetails')->name("showfacultytypedetails");
Route::get("/edit-faculty-type-details", 'FacultyTypeController@editFacultyTypeDetails')->name('editfacultytypedetails');
Route::post("/update-faculty-type-details", 'FacultyTypeController@updateFacultyTypeDetails')->name('updatefacultytypes');



// faculty members routes

Route::get("/add-faculty-members","FacultyController@addFacultyMembers")->name("addfacultymembers");
Route::get("/list-faculty-members","FacultyController@listFacultyMembers")->name("listfacultymembers");
Route::post("/save-faculty-members","FacultyController@saveFacultyMembers")->name("savefacultymembers");
Route::get("/delete-faculty-members","FacultyController@deleteFacultyMembers")->name("deletefacultymember");
Route::get("/show-faculty-member","FacultyController@showFacultyMember")->name("showfacultymember");
Route::get("/edit-faculty-member", 'FacultyController@editFacultyMember')->name('editfacultymember');
Route::post("/update-faculty-member", 'FacultyController@updateFacultyMember')->name('updatefacultymember');

// students routes
Route::get("/add-students","StudentController@addStudent")->name("addstudent");
Route::get("/list-students","StudentController@listStudents")->name("liststudents");
Route::post("/save-students","StudentController@saveStudent")->name("savestudent");
Route::get("/delete-student","StudentController@deleteStudent")->name("deletestudent");
Route::get("/show-details","StudentController@showDetails")->name("showstudentdetails");
Route::get("/edit-student-details","StudentController@editDetails")->name("editstudentdetails");
Route::post("/update-student-details","StudentController@updateDetails")->name("updatestudent");

