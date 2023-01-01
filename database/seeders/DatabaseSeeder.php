<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            'name' => 'first user',
            'email' => 'first@gmail.com',
            'password' => bcrypt('first123'),
            'phone' => '81234536',
            'address' => 'jl mak lu'
        ]);
    }
}
