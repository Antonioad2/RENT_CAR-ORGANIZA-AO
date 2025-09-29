<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('models')->delete();

        DB::table('models')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Corolla',
                'description' => 'corolla',
                'date' => '2025-09-08',
                'brand_id' => 3,
                'created_at' => '2025-09-08 12:09:55',
                'updated_at' => '2025-09-08 12:09:55',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'i10',
                'description' => 'i10',
                'date' => '2025-09-08',
                'brand_id' => 2,
                'created_at' => '2025-09-08 12:10:20',
                'updated_at' => '2025-09-08 12:10:20',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Alto',
                'description' => 'alto',
                'date' => '2025-09-08',
                'brand_id' => 4,
                'created_at' => '2025-09-08 12:10:40',
                'updated_at' => '2025-09-08 12:10:40',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Spresso',
                'description' => 'spresso',
                'date' => '2025-09-08',
                'brand_id' => 4,
                'created_at' => '2025-09-08 12:11:08',
                'updated_at' => '2025-09-08 12:11:08',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Santa Fé',
                'description' => 'santa fé',
                'date' => '2025-09-08',
                'brand_id' => 2,
                'created_at' => '2025-09-08 12:12:22',
                'updated_at' => '2025-09-08 12:12:22',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Starlet',
                'description' => 'starlet',
                'date' => '2025-09-08',
                'brand_id' => 3,
                'created_at' => '2025-09-08 12:12:44',
                'updated_at' => '2025-09-08 12:12:44',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'T2',
                'description' => 't2',
                'date' => '2025-09-08',
                'brand_id' => 5,
                'created_at' => '2025-09-08 12:13:04',
                'updated_at' => '2025-09-08 12:13:04',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Picanto',
                'description' => 'picanto',
                'date' => '2025-09-08',
                'brand_id' => 1,
                'created_at' => '2025-09-08 12:13:29',
                'updated_at' => '2025-09-08 12:13:29',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Duster',
                'description' => 'duster',
                'date' => '2025-09-09',
                'brand_id' => 7,
                'created_at' => '2025-09-09 12:44:25',
                'updated_at' => '2025-09-09 12:44:25',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Land Cruiser',
                'description' => 'land cruiser',
                'date' => '2025-09-09',
                'brand_id' => 3,
                'created_at' => '2025-09-09 12:45:07',
                'updated_at' => '2025-09-09 12:45:07',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Grand i10',
                'description' => 'grand i10',
                'date' => '2025-09-16',
                'brand_id' => 2,
                'created_at' => '2025-09-16 09:22:00',
                'updated_at' => '2025-09-16 09:22:00',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Jimny',
                'description' => 'jimny',
                'date' => '2025-09-16',
                'brand_id' => 4,
                'created_at' => '2025-09-16 09:22:45',
                'updated_at' => '2025-09-16 09:22:45',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Range Rover',
                'description' => 'range rover',
                'date' => '2025-09-16',
                'brand_id' => 17,
                'created_at' => '2025-09-16 09:23:16',
                'updated_at' => '2025-09-16 09:23:16',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Kicks',
                'description' => 'kicks',
                'date' => '2025-09-16',
                'brand_id' => 14,
                'created_at' => '2025-09-16 09:24:52',
                'updated_at' => '2025-09-16 09:24:52',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'C-Class',
                'description' => 'c-class',
                'date' => '2025-09-16',
                'brand_id' => 8,
                'created_at' => '2025-09-16 09:26:10',
                'updated_at' => '2025-09-16 09:26:10',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Revo',
                'description' => 'revo',
                'date' => '2025-09-16',
                'brand_id' => 3,
                'created_at' => '2025-09-16 09:26:45',
                'updated_at' => '2025-09-16 09:26:45',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Sportage',
                'description' => 'sportage',
                'date' => '2025-09-16',
                'brand_id' => 1,
                'created_at' => '2025-09-16 09:27:18',
                'updated_at' => '2025-09-16 09:27:18',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Elantra',
                'description' => 'elantra trim',
                'date' => '2025-09-16',
                'brand_id' => 2,
                'created_at' => '2025-09-16 09:28:19',
                'updated_at' => '2025-09-16 09:28:19',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'LX570',
                'description' => 'lx570',
                'date' => '2025-09-16',
                'brand_id' => 16,
                'created_at' => '2025-09-16 09:29:11',
                'updated_at' => '2025-09-16 09:29:11',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Gle Coupe',
                'description' => 'gle coupe',
                'date' => '2025-09-16',
                'brand_id' => 8,
                'created_at' => '2025-09-16 09:30:32',
                'updated_at' => '2025-09-16 09:30:32',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'AVA 28',
                'description' => 'AVA 28',
                'date' => '2025-09-16',
                'brand_id' => 4,
                'created_at' => '2025-09-16 09:31:09',
                'updated_at' => '2025-09-16 09:31:09',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Picanto Sport',
                'description' => 'picanto sport',
                'date' => '2025-09-16',
                'brand_id' => 1,
                'created_at' => '2025-09-16 09:34:13',
                'updated_at' => '2025-09-16 09:34:13',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Cayene',
                'description' => 'cayene',
                'date' => '2025-09-16',
                'brand_id' => 15,
                'created_at' => '2025-09-16 09:35:47',
                'updated_at' => '2025-09-16 09:35:47',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Camaro Ls Coupe',
                'description' => 'camaro ls coupe',
                'date' => '2025-09-16',
                'brand_id' => 15,
                'created_at' => '2025-09-16 09:37:36',
                'updated_at' => '2025-09-16 09:37:36',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Hiace',
                'description' => 'hiace',
                'date' => '2025-09-16',
                'brand_id' => 3,
                'created_at' => '2025-09-16 09:39:43',
                'updated_at' => '2025-09-16 09:39:43',
                'deleted_at' => NULL,
            ),
        ));


    }
}
