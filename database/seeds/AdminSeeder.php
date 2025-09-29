<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\User; 

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@infosi.com'], // evita duplicado
            [
                'name' => 'Administrador Inicial',
                'password' => Hash::make('admin123'),
               
            ]
        );

        $this->command->info('Usuário administrador criado com sucesso.');
    }
}
