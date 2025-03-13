<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Aluno',
            'email' => 'aluno@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'aluno'
        ]);

        User::create([
            'name' => 'Teacher',
            'email' => 'teacher@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher'
        ]);
    }
}
