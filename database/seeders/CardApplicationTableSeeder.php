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
                'MR_Card_ID' => 'M3/2023-00001',
                'Card_App_Address' => '123-A, TAMAN TAS, KUANTAN, PAHANG',
                'Card_App_Approval_Status' => 'LULUS',
                'Card_App_Delivery_Options' => 'PENGHANTARAN',
                'Card_App_Type' => 'KAD PERKHAWINAN',
                'Card_App_Submit_Status' => 'SUBMIT',
                'Card_App_Redeem_Location' => '',
                'Card_App_Payment_Receipt' => 'RB-00130-001 ',
                'Card_App_Approval_Date' => '2023-3-21',
                'Card_App_Comment' => '',
                'U_IC_No' => '870930065551',
                'created_at' => '2023-3-15',
            ],
            [
                'MR_Card_ID' => 'M3/2023-00002',
                'Card_App_Address' => '',
                'Card_App_Approval_Status' => 'LULUS',
                'Card_App_Delivery_Options' => 'PUNGUTAN',
                'Card_App_Type' => 'KAD & SIJIL PERKHAWINAN',
                'Card_App_Redeem_Date' => '2023-05-22',
                'Card_App_Submit_Status' => 'SUBMIT',
                'Card_App_Redeem_Location' => 'PAID KUANTAN ',
                'Card_App_Payment_Receipt' => 'RB-00130-002 ',
                'Card_App_Approval_Date' => '2023-05-17',
                'Card_App_Comment' => '',
                'U_IC_No' => '990909060331',
                'created_at' => '2023-5-15',
            ],
            [
                'MR_Card_ID' => 'M3/2023-00003',
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
            ],
        ];

        foreach ($datas as $key => $value) {
            DB::table($tableName)->insert($value);
        }
    }
}
