<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
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
        //
        User::create([
            'name' => 'Kenneth',
            'email' => 'kenneth@gmail.com',
            'password' => Hash::make(12345678),
        ])->assignRole('Administrator');
        User::create([
            'name' => 'Martin',
            'email' => 'martin@gmail.com',
            'password' => Hash::make(12345678),
        ])->assignRole('Author');
        User::factory(10)->create();
    }
}
