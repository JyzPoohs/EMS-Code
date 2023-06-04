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
                'MR_noDaftarSijil' => '(PN)MS/0077/2022-D1-SN06220001',
                'MR_suami_ic' => '870930065551',
                'MR_suami_nama' => 'ALI BIN IDRIS',
                'MR_isteri_ic' => '890930065551',
                'MR_isteri_nama' => 'SITI BINTI ABU BAKAR',
                'MR_noAkaunTerima' => 'KTN1M4/2022-00011',
                'MR_Status' => 'LULUS'
            ],
            [
                'MR_noDaftarSijil' => '(PN)MS/0077/2022-D1-SN06220002',
                'MR_suami_ic' => '990930063751',
                'MR_suami_nama' => 'ABU BIN AHMAD',
                'MR_isteri_ic' => '00091006681',
                'MR_isteri_nama' => 'MISA BINTI ALI',
                'MR_noAkaunTerima' => 'KTN1M4/2022-00012',
                'MR_Status' => 'LULUS'
            ],
            [
                'MR_noDaftarSijil' => '(PN)MS/0077/2022-D2-SN06220011',
                'MR_suami_ic' => '870930065551',
                'MR_suami_nama' => 'ALI BIN IDRIS',
                'MR_isteri_ic' => '010930065551',
                'MR_isteri_nama' => 'SITI BINTI ABU BAKAR',
                'MR_noAkaunTerima' => 'KTN1M4/2022-00013',
                'MR_Status' => 'LULUS'
            ],
            [
                'MR_noDaftarSijil' => '(PN)MS/0077/2022-D1-SN06220021',
                'MR_suami_ic' => '630712065551',
                'MR_suami_nama' => 'UMAH BIN ABDULLAH',
                'MR_isteri_ic' => '640510065551',
                'MR_isteri_nama' => 'ROSE BINTI LUQMAN',
                'MR_noAkaunTerima' => 'KTN1M4/2022-00012',
                'MR_Status' => 'LULUS'
            ],
            [
                'MR_noDaftarSijil' => '(PN)MS/0077/2022-D1-SN06220031',
                'MR_suami_ic' => '891221071011',
                'MR_suami_nama' => 'MUHAMMAD BIN MUIN',
                'MR_isteri_ic' => '841015141645',
                'MR_isteri_nama' => 'KAISAH BINTI HAFIZ',
                'MR_noAkaunTerima' => 'KTN1M4/2022-00021',
                'MR_Status' => 'LULUS'
            ],
        ];

        foreach ($datas as $key => $value) {
            Marriage_Registration::create($value);
        }
    }
}
