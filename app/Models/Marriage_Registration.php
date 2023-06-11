<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage_Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'MR_noDaftarSijil',
        'MR_suami_ic',
        'MR_suami_nama',
        'MR_isteri_ic',
        'MR_isteri_nama',
        'MR_noAkaunTerima',
        'MR_Status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'MR_suami_ic', 'ic');
    }
   
}
