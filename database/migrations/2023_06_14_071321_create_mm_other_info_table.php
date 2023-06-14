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
        Schema::create('mm_other_info', function (Blueprint $table) {
            $table->id();
            $table->string('Request_Status')->nullable();
            $table->date('Date_Request')->nullable();
            $table->date('Date_Nikah')->nullable();
            $table->string('Marriage_Place')->nullable();
            $table->string('Marriage_Country')->nullable();
            $table->string('Marriage_Place_Address')->nullable();
            $table->string('Marriage_Dowry_Type')->nullable();
            $table->string('Marriage_Dowry')->nullable();
            $table->string('Other_Grants')->nullable();
            $table->string('W_IC_No')->nullable();
            $table->string('W_Name')->nullable();
            $table->string('W_Address')->nullable();
            $table->string('W_Phone')->nullable();
            $table->string('W_Category_Nikah')->nullable()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mm_other_info');
    }
};
