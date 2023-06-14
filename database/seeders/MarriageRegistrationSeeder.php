<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marriage_Registration;

class MarriageRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                // 'MR_noDaftarSijil' => '(PN)MS/0077/2022-D1-SN06220021',
                // 'MR_suami_ic' => '111111111111',
                // 'MR_suami_nama' => 'UMAH BIN ABDULLAH',
                // 'MR_isteri_ic' => '640510065551',
                // 'MR_isteri_nama' => 'ROSE BINTI LUQMAN',
                // 'MR_noAkaunTerima' => 'KTN1M4/2022-00012',
                'MR_Approval_Status' => 'LULUS',
                'U_IC_No' => '111111111111',
                'request_id' => 1,

            ],
         
        ];

        foreach ($datas as $key => $value) {
            Marriage_Registration::create($value);
        }
    }
}
