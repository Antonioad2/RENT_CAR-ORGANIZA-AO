<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('reserves')->delete();

        DB::table('reserves')->insert(array(
            0 =>
            array (
                'id' => 1,
                'client_id' => 1,
                'car_id' => 2,
                'pickup_location' => 'Luanda',
                'start_date' => '2025-09-11',
                'end_date' => '2025-09-13',
                'total_amount' => '110000.00',
                'resources' => '[]',
                'status' => 'completed',
                'driver_id' => 1,
                'created_at' => '2025-09-08 13:01:01',
                'updated_at' => '2025-09-19 09:14:46',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'client_id' => 3,
                'car_id' => 4,
                'pickup_location' => 'Cacuaco',
                'start_date' => '2025-09-16',
                'end_date' => '2025-09-23',
                'total_amount' => '420000.00',
                'resources' => '[]',
                'status' => 'completed',
                'driver_id' => 1,
                'created_at' => '2025-09-09 21:15:29',
                'updated_at' => '2025-09-19 09:14:34',
                'deleted_at' => NULL,
            ),
        ));
    }
}
