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

        if (!User::where('email', 'john@example.com')->exists()) {
            User::create([
                'name' => 'John',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
            ]);
        }

        User::factory(10)->create();
    }
}
