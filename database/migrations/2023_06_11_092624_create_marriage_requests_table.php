<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Marriage_Mohon', function (Blueprint $table) {
            $table->id('Slip_Mohon_Online');
            $table->string('U_IC_No')->nullable();
            $table->string('U_Name')->nullable();
            $table->string('MM_Other_Info_ID')->nullable();
            $table->string('Birthday')->nullable();
            $table->integer('Age')->nullable();
            $table->string('Ethnic')->nullable();
            $table->string('Rationality')->nullable();
            $table->string('IC_Address')->nullable();
            $table->string('Home_Num')->nullable();
            $table->string('Current_Address')->nullable();
            $table->string('Edu_Level')->nullable();
            $table->string('Employment_Sector')->nullable();
            $table->string('Job')->nullable();
            $table->string('Job_Address')->nullable();
            $table->string('Office_Phone')->nullable();
            $table->string('Amount_Salary')->nullable();
            $table->string('Spouse_Name')->nullable();
            $table->string('Marriage_Status')->nullable();
            $table->string('PrepCourse_ID')->nullable();
            $table->string('Status_Saudara_Baru')->nullable();
            $table->timestamps();

            $table->string('Pasangan_IC_No')->nullable();
            $table->string('P_Name')->nullable();
            $table->string('P_Date_of_Birth')->nullable();
            $table->string('P_Age')->nullable();
            $table->string('P_Ethnic')->nullable();
            $table->string('P_Rationality')->nullable();
            $table->string('P_IC_Address',)->nullable();
            $table->string('P_Current_Address')->nullable();
            $table->string('P_Home_Num')->nullable();
            $table->string('P_Edu_Level')->nullable();
            $table->string('P_Employment_Sector')->nullable();
            $table->string('P_Job')->nullable();
            $table->string('P_Job_Address')->nullable();
            $table->string('P_Office_Phone')->nullable();
            $table->string('P_Amount_Salary')->nullable();
            $table->string('P_Spouse_Name')->nullable();
            $table->string('P_Marriage_Status')->nullable();
            $table->string('P_PrepCourse_ID')->nullable();
            $table->string('P_Status_Saudara_Baru')->nullable();
            $table->string('P_Date_Convert_Islam')->nullable();
            $table->string('P_Islam_Register_No')->nullable();
            $table->string('P_Marriage_Couple_License__No')->nullable();
            $table->string('P_Phone_No')->nullable();
            // $table->foreign('U_IC_No')->references('ic')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Marriage_Mohon');
    }
};
