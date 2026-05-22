<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {

        // firstOrCreate voorkomt duplicates

        User::firstOrCreate(

            [
                'email' => 'admin@ehb.be'
            ],

            [
                'name' => 'admin',
                'password' => Hash::make('Password!321'),
                // deze user wordt admin
                'is_admin' => true,
            ]

        );
    }
}