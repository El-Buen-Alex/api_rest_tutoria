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
            'email'=>'alexispincay005@gmail.com',
            'password'=>bcrypt('515t3m45')
        ]);
         \App\Models\User::factory(10)->create();
    }
}
