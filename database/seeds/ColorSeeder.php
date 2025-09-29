<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('colors')->delete();

        DB::table('colors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Preto',
                'description' => 'preto',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:15:33',
                'updated_at' => '2025-09-08 12:15:33',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Branco',
                'description' => 'branco',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:15:44',
                'updated_at' => '2025-09-08 12:15:44',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Vermelho',
                'description' => 'vermelho',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:16:00',
                'updated_at' => '2025-09-08 12:16:00',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Azul',
                'description' => 'azul',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:16:14',
                'updated_at' => '2025-09-08 12:16:14',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Verde',
                'description' => 'verde',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:16:27',
                'updated_at' => '2025-09-08 12:16:27',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Castanho',
                'description' => 'castanho',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:16:42',
                'updated_at' => '2025-09-08 12:16:42',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Cinza',
                'description' => 'cinza',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:16:56',
                'updated_at' => '2025-09-08 12:16:56',
                'deleted_at' => NULL,
            ),
        ));


    }
}