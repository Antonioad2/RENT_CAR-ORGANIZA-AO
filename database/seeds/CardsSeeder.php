<?php

use Illuminate\Database\Seeder;
use App\Model\Card;
use App\Model\CompanyAccount;


class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
{
    Card::create([
        'client_id' => '4',
        'card_number' => '000620012002200320041',
        'card_name' => 'Bráulio Cândido',
        'bank' => 'BAI',
        'balance' => 450000000
    ]);

    Card::create([
        'client_id' => '5',
        'card_number' => '000620012002200320042',
        'card_name' => 'António Adão',
        'bank' => 'BFA',
        'balance' => 1000000000
    ]);

    Card::create([
        'client_id' => '2',
        'card_number' => '000620012002200320433',
        'card_name' => 'Paulo Alexandre',
        'bank' => 'BFA',
        'balance' => 7000000000
    ]);

    CompanyAccount::create([
        'company_name' => 'RentCar Angola',
        'balance' => 0
    ]);
}
}
