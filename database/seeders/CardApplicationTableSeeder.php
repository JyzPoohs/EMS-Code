<?php

namespace Database\Seeders;

use App\Models\CardApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = 'MM_Card_Applications';

        $datas = [

            [
                // 'MR_Card_ID' => 'M3/2023-00003',
                'Card_App_Address' => '',
                'Card_App_Approval_Status' => 'UNTUK DILULUSKAN',
                'Card_App_Delivery_Options' => 'PUNGUTAN',
                'Card_App_Type' => 'SIJIL PERKHAWINAN',
                'Card_App_Redeem_Date' => '2023-05-30',
                'Card_App_Submit_Status' => 'NOT SUBMIT',
                'Card_App_Redeem_Location' => 'PAID PEKAN ',
                'Card_App_Payment_Receipt' => 'RB-00130-003 ',
                'Card_App_Comment' => '',
                'U_IC_No' => '111111111111',
                'created_at' => '2023-5-15',
                'registration_id' => 1,
            ],
        ];

        foreach ($datas as $key => $value) {
            DB::table($tableName)->insert($value);
        }
    }
}
