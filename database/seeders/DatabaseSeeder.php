<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'fullname' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'Dummy',
            'phone_number' => '13123',
            'profile_picture' => '/uploads/gif',
            'gender' => 'male',
            'agreed_to_terms' => true,
            'password' => 'hash',
        ]);
    }
}
