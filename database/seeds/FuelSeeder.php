<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('fuels')->delete();

        DB::table('fuels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Gasolina',
                'description' => 'gasolina',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:13:57',
                'updated_at' => '2025-09-08 12:13:57',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Elétrico',
                'description' => 'elétrico',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:14:20',
                'updated_at' => '2025-09-08 12:14:20',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Híbrido',
                'description' => 'híbrido',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:14:42',
                'updated_at' => '2025-09-08 12:14:42',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Gasóleo',
                'description' => 'gasóleo',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:15:05',
                'updated_at' => '2025-09-08 12:15:05',
                'deleted_at' => NULL,
            ),
        ));


    }
}
