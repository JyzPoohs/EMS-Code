<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = ['tujuan_aduan','keterangan_aduan','tarikh_konsultasi','paid_pilihan','kounselor_pilihan'];
}
