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
            'fullname' => 'Pradeep Manandhar',
            'email' => 'sayamipradeep5@gmail.com',
            'introduction'=>'',
            'description'=>'',
            'linkedin'=>'',
            'github'=>'',
            'username' => 'man_and_her',
            'phone_number' => '9808699837',
            'profile_picture' => 'uploads/profile/profile_pic.jpg',
            'gender' => 'male',
            'agreed_to_terms' => true,
            'password' => 'hash',
        ]);
    }
}
