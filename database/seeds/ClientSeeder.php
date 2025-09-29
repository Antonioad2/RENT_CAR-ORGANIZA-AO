<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('clients')->delete();

        DB::table('clients')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Miguel Hamuyela',
                'email' => 'miguelhamu@gmail.com',
                'password' => Hash::make('senha123'),
                'phone' => '922262626',
                'address' => 'Talatona, Camama',
                'bi' => '008626222LA047',
                'bi_upload' => '1757334401_document.pdf',
                'driver_license' => '11111',
                'driver_license_upload' => '1757334401_document.pdf',
                'created_at' => '2025-09-08 12:26:41',
                'updated_at' => '2025-09-08 12:26:41',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Paulo Alexandre',
                'email' => 'paulalex@gmail.com',
                'password' => Hash::make('senha123'),
                'phone' => '9222727272',
                'address' => 'Viana, Zango 3',
                'bi' => '008627222LA047',
                'bi_upload' => '1757334481_document.pdf',
                'driver_license' => '22222',
                'driver_license_upload' => '1757334481_document.pdf',
                'created_at' => '2025-09-08 12:28:01',
                'updated_at' => '2025-09-08 12:28:01',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'João Silva',
                'email' => 'joaosilva@gmail.com',
                'password' => Hash::make('senha123'),
                'phone' => '922282828',
                'address' => 'Viana, Ponte Amarela',
                'bi' => NULL,
                'bi_upload' => NULL,
                'driver_license' => NULL,
                'driver_license_upload' => NULL,
                'created_at' => '2025-09-09 21:15:29',
                'updated_at' => '2025-09-09 21:15:29',
                'deleted_at' => NULL,
            ),
             3 =>
            array (
                'id' => 4,
                'name' => 'Bráulio Cândido',
                'email' => 'brauliosn57@gmail.com',
                'password' => Hash::make('senha123'),
                'phone' => '945498429',
                'address' => 'Camama',
                'bi' => '008622222LA047',
                'bi_upload' => '1757598392_document.pdf',
                'driver_license' => '008622222LA047',
                'driver_license_upload' => '1757598392_document.pdf',
                'created_at' => '2025-09-11 13:46:32',
                'updated_at' => '2025-09-11 13:46:32',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'António Adão',
                'email' => 'antonioadao527@gmail.com',
                'password' => Hash::make('senha123'),
                'phone' => '922292929',
                'address' => 'Talatona, Camama',
                'bi' => '008626222LA047',
                'bi_upload' => '1757598465_document.pdf',
                'driver_license' => '444444',
                'driver_license_upload' => '1757598465_document.pdf',
                'created_at' => '2025-09-11 13:47:45',
                'updated_at' => '2025-09-11 13:47:45',
                'deleted_at' => NULL,
            ),
        ));


    }
}
