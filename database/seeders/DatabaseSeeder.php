<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::firstOrCreate([
            'name' => 'Munni',
            'email' => 'munni@gmail.com',
            'password' => Hash::make('duttatexbd@munni'),
        ]);
        User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('duttatexbd@admin'),
        ]);
    }
}
