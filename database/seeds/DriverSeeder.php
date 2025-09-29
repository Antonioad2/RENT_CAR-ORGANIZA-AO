<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('drivers')->delete();

        DB::table('drivers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'full_name' => 'Mariana Tumba',
                'document_identification' => '008624222LA047',
                'id_image' => '1757334193_image.pdf',
                'license_image' => '1757334193_image.pdf',
                'license_expiry_date' => '2029-10-19',
                'phone_number' => '922242424',
                'gender' => 'female',
                'email' => 'maritumba@gmail.com',
                'experience_years' => 3,
                'address' => 'Rangel, bairro CTT',
                'status' => 'active',
                'daily_price' => '25000.00',
                'created_at' => '2025-09-08 12:23:13',
                'updated_at' => '2025-09-08 12:23:13',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'full_name' => 'Amadeu Francisco',
                'document_identification' => '008625222LA047',
                'id_image' => '1757334319_image.pdf',
                'license_image' => '1757334319_image.pdf',
                'license_expiry_date' => '2029-12-08',
                'phone_number' => '922252525',
                'gender' => 'male',
                'email' => 'amafrancisco@gmail.com',
                'experience_years' => 4,
                'address' => 'Cazenga, Hoji-Ya-Henda',
                'status' => 'active',
                'daily_price' => '35000.00',
                'created_at' => '2025-09-08 12:25:19',
                'updated_at' => '2025-09-08 12:25:19',
                'deleted_at' => NULL,
            ),
        ));


    }
}