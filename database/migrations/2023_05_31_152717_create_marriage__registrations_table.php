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
        Schema::create('marriage__registrations', function (Blueprint $table) {
            $table->id('MR_ID');
            // $table->string('MR_noDaftarSijil')->nullable();
            // $table->string('MR_suami_ic')->nullable();
            // $table->string('MR_suami_nama')->nullable();
            // $table->string('MR_isteri_ic')->nullable();
            // $table->string('MR_isteri_nama')->nullable();
            // $table->string('MR_noAkaunTerima')->nullable();
            $table->string('MR_Jurunikah_Name')->nullable();
            $table->string('MR_Payment_Receipt')->nullable();
            $table->string('MR_Lafaz_Taliq')->nullable();
            $table->string('MR_Approval_Date')->nullable();
            $table->timestamps();
            $table->string('MR_Approval_Status')->nullable();
            $table->string('MR_Submit_Status')->nullable();
            $table->string('U_IC_No')->nullable();
            $table->foreignId('request_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage__registrations');
    }
};
