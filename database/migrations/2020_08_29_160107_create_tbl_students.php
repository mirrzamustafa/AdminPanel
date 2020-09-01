<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStudents extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("reg_no", 20)->nullable();
            $table->string("student_name",20)->nullable();
            $table->string("student_father_name",20)->nullable();  
            $table->string("student_mother_name",20)->nullable();
            $table->string("student_gender")->nullable();
            $table->string("student_email", 255)->unique();
            $table->integer("student_roll_no")->nullable();
            $table->string("student_phone_no", 50)->nullable();
            $table->text("student_address")->nullable();
            $table->string("student_photo", 350)->nullable();
            $table->integer("student_age")->default(1);
            $table->string("student_status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_students');
    }

}