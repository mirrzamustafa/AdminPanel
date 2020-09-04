<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("class_name",30)->nullable();
            $table->string("class_section_id")->default("A");
            $table->integer("seats_available")->default(0);
            $table->string("status")->default("Active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_classes');
    }
}