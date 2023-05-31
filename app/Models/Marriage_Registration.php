<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage_Registration extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'MR_Status',
    ];


    public function staff()
    {
    }


}