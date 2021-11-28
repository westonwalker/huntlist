<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Weston Walker',
            'email' => 'walk8919@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\User::factory(10)->create();
        DB::table('subscribers')->insert([
            'email' => 'walk8919@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Subscriber::factory(10)->create();
        \App\Models\Place::factory(10)->create();
    }
}