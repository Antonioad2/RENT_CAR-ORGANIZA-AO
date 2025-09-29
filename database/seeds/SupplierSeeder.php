<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('suppliers')->delete();

        DB::table('suppliers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'name' => 'Augusto Reis',
                'email' => 'augustoreis@gmail.com',
                'phone' => '922212121',
                'nif' => '008622222LA047',
                'vehicle_logbook_upload' => '1757333938_document.pdf',
                'photo' => '1757333938_image.jpg',
                'bi' => '008622222LA047',
                'bi_upload' => '1757333938_document.pdf',
                'address' => 'Camama',
                'registration_date' => '2025-09-08',
                'created_at' => '2025-09-08 12:18:58',
                'updated_at' => '2025-09-08 12:18:58',
            ),
            1 =>
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'name' => 'Cristiano Fandula',
                'email' => 'cristifandula@gmail.com',
                'phone' => '922232323',
                'nif' => '008623222LA047',
                'vehicle_logbook_upload' => '1757334084_document.pdf',
                'photo' => '1757334084_image.jpg',
                'bi' => '008623222LA047',
                'bi_upload' => '1757334084_document.pdf',
                'address' => 'Talatona, Camama',
                'registration_date' => '2025-09-08',
                'created_at' => '2025-09-08 12:21:24',
                'updated_at' => '2025-09-08 12:21:24',
            ),
        ));


    }
}
