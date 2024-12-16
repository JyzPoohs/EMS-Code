<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardApplication extends Model
{
    use HasFactory;

    protected $table = 'mm_card_applications';
    protected $fillable = [
        'MR_Card_ID',
        'Card_App_Type',
        'Card_App_Payment_Receipt',
        'Card_App_Delivery_Options',
        'Card_App_Address',
        'Card_App_Redeem_Date',
        'Card_App_Redeem_Location',
        'U_IC_No',
        'registration_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'U_IC_No', 'ic');
    }

    public function registration()
    {
        return $this->belongsTo(Marriage_Registration::class, 'registration_id', 'MR_ID');
    }
}
