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
        Schema::create('MM_Card_Applications', function (Blueprint $table) {
            $table->id('MR_Card_ID');
            $table->string('Card_App_Address')->nullable();
            $table->string('Card_App_Approval_Status', 20)->nullable();
            $table->string('Card_App_Delivery_Options', 50)->nullable();
            $table->string('Card_App_Type', 50)->nullable();
            $table->date('Card_App_Redeem_Date')->nullable();
            $table->string('Card_App_Submit_Status', 10)->nullable();
            $table->string('Card_App_Redeem_Location')->nullable();
            $table->string('Card_App_Payment_Receipt', 20)->nullable();
            $table->date('Card_App_Approval_Date')->nullable();
            $table->string('Card_App_Comment')->nullable();
            $table->string('U_IC_No');
            $table->timestamps();
            $table->foreignId('registration_id')->nullable();

            // $table->foreign('U_IC_No')->references('ic')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MM_Card_Applications');
    }
};
