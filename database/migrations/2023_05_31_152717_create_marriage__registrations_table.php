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
            $table->id();
            $table->string('MR_noDaftarSijil');
            $table->string('MR_suami_ic');
            $table->string('MR_suami_nama');
            $table->string('MR_isteri_ic');
            $table->string('MR_isteri_nama');
            $table->string('MR_noAkaunTerima');
            $table->timestamps();
            $table->string('MR_Status')->nullable();
           
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
