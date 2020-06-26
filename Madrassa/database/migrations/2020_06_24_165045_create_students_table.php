<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('student_name');
            $table->date('student_dob');
            $table->string('student_gender');
            $table->string('student_mother');
            $table->string('student_father');
            $table->string('student_guardian');
            $table->string('student_address');
            $table->string('student_picode');
            $table->integer('student_whatsapp')->length(15);
            $table->string('student_current_school');
            $table->string('student_current_madrassa');
            $table->integer('student_blood');
            $table->integer('student_status')->default('1');
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
        Schema::dropIfExists('students');
    }
}
