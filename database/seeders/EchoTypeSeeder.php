<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EchoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some stuff
        DB::table('echo_types')->insert([
            [
                'name_en' => 'ការពិនិត្យផ្ទៃពោះ',
                'name_kh' => 'ការពិនិត្យផ្ទៃពោះ',
                'index' => 1,
                'status' => 1,
                'id' => 1,
            ],
            [
                'name_en' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ១',
                'name_kh' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ១',
                'index' => 2,
                'status' => 1,
                'id' => 2,
            ],
            [
                'name_en' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ២',
                'name_kh' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ២',
                'index' => 3,
                'status' => 1,
                'id' => 3,
            ],
            [
                'name_en' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ៣',
                'name_kh' => 'ការពិនិត្យផ្ទៃពោះនៅត្រីមាសទី ៣',
                'index' => 4,
                'status' => 1,
                'id' => 4,
            ],
            [
                'name_en' => 'abdominal ultrasound',
                'name_kh' => 'abdominal ultrasound',
                'index' => 5,
                'status' => 1,
                'id' => 5,
            ],
            [
                'name_en' => 'ABDOMINO - ADENOPATHY',
                'name_kh' => 'ABDOMINO - ADENOPATHY',
                'index' => 6,
                'status' => 1,
                'id' => 6,
            ],
            [
                'name_en' => 'ACUTE APPENDICITIS',
                'name_kh' => 'ACUTE APPENDICITIS',
                'index' => 7,
                'status' => 1,
                'id' => 7,
            ],
            [
                'name_en' => 'APPENDICITIS',
                'name_kh' => 'APPENDICITIS',
                'index' => 8,
                'status' => 1,
                'id' => 8,
            ],
            [
                'name_en' => 'BREAST',
                'name_kh' => 'BREAST',
                'index' => 9,
                'status' => 1,
                'id' => 9,
            ],
            [
                'name_en' => 'cevic',
                'name_kh' => 'cevic',
                'index' => 10,
                'status' => 1,
                'id' => 10,
            ],
            [
                'name_en' => 'CHC',
                'name_kh' => 'CHC',
                'index' => 11,
                'status' => 1,
                'id' => 11,
            ],
            [
                'name_en' => 'CHRONIC CYSTITIS',
                'name_kh' => 'CHRONIC CYSTITIS',
                'index' => 12,
                'status' => 1,
                'id' => 12,
            ],
            [
                'name_en' => 'Echo abdomino pelvice normal ',
                'name_kh' => 'Echo abdomino pelvice normal ',
                'index' => 13,
                'status' => 1,
                'id' => 13,
            ],
            [
                'name_en' => 'ECHOGRAPHY',
                'name_kh' => 'ECHOGRAPHY',
                'index' => 14,
                'status' => 1,
                'id' => 14,
            ],
            [
                'name_en' => 'ECOCARDIOGRAPHIE ',
                'name_kh' => 'ECOCARDIOGRAPHIE ',
                'index' => 15,
                'status' => 1,
                'id' => 15,
            ],
            [
                'name_en' => 'ECOGRAPHIE',
                'name_kh' => 'ECOGRAPHIE',
                'index' => 16,
                'status' => 1,
                'id' => 16,
            ],
            [
                'name_en' => 'Examen du sein ',
                'name_kh' => 'Examen du sein ',
                'index' => 17,
                'status' => 1,
                'id' => 17,
            ],
            [
                'name_en' => 'GALLBLADDER STONE ',
                'name_kh' => 'GALLBLADDER STONE ',
                'index' => 18,
                'status' => 1,
                'id' => 18,
            ],
            [
                'name_en' => 'Goiter',
                'name_kh' => 'Goiter',
                'index' => 19,
                'status' => 1,
                'id' => 19,
            ],
            [
                'name_en' => 'HEART FAILURE ',
                'name_kh' => 'HEART FAILURE ',
                'index' => 20,
                'status' => 1,
                'id' => 20,
            ],
            [
                'name_en' => 'KNEE',
                'name_kh' => 'KNEE',
                'index' => 21,
                'status' => 1,
                'id' => 21,
            ],
            [
                'name_en' => 'Left breast cyst',
                'name_kh' => 'Left breast cyst',
                'index' => 22,
                'status' => 1,
                'id' => 22,
            ],
            [
                'name_en' => 'MILD HYDRONEPHROSIS',
                'name_kh' => 'MILD HYDRONEPHROSIS',
                'index' => 23,
                'status' => 1,
                'id' => 23,
            ],
            [
                'name_en' => 'Multi lobar liver abscess',
                'name_kh' => 'Multi lobar liver abscess',
                'index' => 24,
                'status' => 1,
                'id' => 24,
            ],
            [
                'name_en' => 'NECK ',
                'name_kh' => 'NECK ',
                'index' => 25,
                'status' => 1,
                'id' => 25,
            ],
            [
                'name_en' => 'NECK copy',
                'name_kh' => 'NECK copy',
                'index' => 26,
                'status' => 1,
                'id' => 26,
            ],
            [
                'name_en' => 'NECK ECHOGRAPHY ',
                'name_kh' => 'NECK ECHOGRAPHY ',
                'index' => 27,
                'status' => 1,
                'id' => 27,
            ],
            [
                'name_en' => 'PERITONITIS BY GASTRIC PERFORATION',
                'name_kh' => 'PERITONITIS BY GASTRIC PERFORATION',
                'index' => 28,
                'status' => 1,
                'id' => 28,
            ],
            [
                'name_en' => 'RIGHT PSOAS abscess ',
                'name_kh' => 'RIGHT PSOAS abscess ',
                'index' => 29,
                'status' => 1,
                'id' => 29,
            ],
            [
                'name_en' => 'RIGHT RENAL CYST',
                'name_kh' => 'RIGHT RENAL CYST',
                'index' => 30,
                'status' => 1,
                'id' => 30,
            ],
            [
                'name_en' => 'RIGHT RENAL STONES + HYDRONEPHROSIS ',
                'name_kh' => 'RIGHT RENAL STONES + HYDRONEPHROSIS ',
                'index' => 31,
                'status' => 1,
                'id' => 31,
            ],
            [
                'name_en' => 'THYROID GLAND',
                'name_kh' => 'THYROID GLAND',
                'index' => 32,
                'status' => 1,
                'id' => 32,
            ],
            [
                'name_en' => 'Tumefaction',
                'name_kh' => 'Tumefaction',
                'index' => 33,
                'status' => 1,
                'id' => 33,
            ],
        ]);
    }
}
