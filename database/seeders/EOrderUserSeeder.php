<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EOrderUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Admin E-Order', 'email' => 'admin@eorder.test', 'role' => 'admin'],
            ['name' => 'Petugas E-Order', 'email' => 'petugas@eorder.test', 'role' => 'petugas'],
            ['name' => 'Pelanggan Demo', 'email' => 'pelanggan@eorder.test', 'role' => 'pelanggan'],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'role' => $data['role'],
                    'password' => Hash::make('Password123!'),
                ]
            );
        }
    }
}
