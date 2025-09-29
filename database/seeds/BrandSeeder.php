<?php 


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('brands')->delete();

        DB::table('brands')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kia',
                'image' => '1757333237_image.png',
                'description' => 'kia',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:07:17',
                'updated_at' => '2025-09-08 12:07:17',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Hyundai',
                'image' => '1757333263_image.png',
                'description' => 'hyundai',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:07:43',
                'updated_at' => '2025-09-08 12:07:43',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Toyota',
                'image' => '1757333287_image.png',
                'description' => 'toyota',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:08:07',
                'updated_at' => '2025-09-08 12:08:07',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Suzuki',
                'image' => '1757333313_image.png',
                'description' => 'suzuki',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:08:33',
                'updated_at' => '2025-09-08 12:08:33',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Jetour',
                'image' => '1757333348_image.png',
                'description' => 'jetour',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:09:08',
                'updated_at' => '2025-09-08 12:09:08',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'BMW',
                'image' => '1757333370_image.png',
                'description' => 'bmw',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:09:30',
                'updated_at' => '2025-09-08 12:09:30',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Renault',
                'image' => '1757421835_image.png',
                'description' => 'renault',
                'date' => '2025-09-09',
                'created_at' => '2025-09-09 12:43:55',
                'updated_at' => '2025-09-09 12:43:55',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Mercedes Benz',
                'image' => '1758012584_image.png',
                'description' => 'mercedes benz',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 08:49:44',
                'updated_at' => '2025-09-16 08:49:44',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Mitsubishi',
                'image' => '1758012615_image.png',
                'description' => 'mitsubishi',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 08:50:15',
                'updated_at' => '2025-09-16 08:50:15',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Porsche',
                'image' => '1758012672_image.png',
                'description' => 'porsche',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 08:51:12',
                'updated_at' => '2025-09-16 09:04:23',
                'deleted_at' => '2025-09-16 09:04:23',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Nissan',
                'image' => '1758012708_image.png',
                'description' => 'nissan',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 08:51:48',
                'updated_at' => '2025-09-16 09:04:36',
                'deleted_at' => '2025-09-16 09:04:36',
            ),
            11 =>
            array (
                'id' => 14,
                'name' => 'Nissan',
                'image' => '1758013594_image.png',
                'description' => 'nissa modernizado.',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 09:06:34',
                'updated_at' => '2025-09-16 09:06:34',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 15,
                'name' => 'Porsche',
                'image' => '1758013623_image.png',
                'description' => 'Porsche modernizado',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 09:07:03',
                'updated_at' => '2025-09-16 09:07:03',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 16,
                'name' => 'Lexus',
                'image' => '1758013665_image.png',
                'description' => 'lexus',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 09:07:45',
                'updated_at' => '2025-09-16 09:07:45',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 17,
                'name' => 'Land Rover',
                'image' => '1758013705_image.png',
                'description' => 'land rover',
                'date' => '2025-09-16',
                'created_at' => '2025-09-16 09:08:25',
                'updated_at' => '2025-09-16 09:08:25',
                'deleted_at' => NULL,
            ),
        ));


    }
}
