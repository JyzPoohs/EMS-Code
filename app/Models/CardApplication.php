<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardApplication extends Model
{
    use HasFactory;

    protected $table = 'mm_card_applications';

    public function user()
    {
        return $this->belongsTo(User::class, 'U_IC_No', 'ic');
    }
}
