<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([

            AdminSeeder::class,
            UserSeeder::class,
            BrandsTableSeeder::class,
            ModelsTableSeeder::class,
            FuelsTableSeeder::class,
            ColorsTableSeeder::class,
            SuppliersTableSeeder::class,
            CarsTableSeeder::class,
            DriversTableSeeder::class,
            ClientsTableSeeder::class,
            ReservesTableSeeder::class,
            CardsSeeder::class
        ]);
    }
}
