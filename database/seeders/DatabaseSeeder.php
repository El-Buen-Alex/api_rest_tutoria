<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Daniel Pincay',
            'email'=>'alexispincay15@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
         \App\Models\User::factory(10)->create();
    }
}
