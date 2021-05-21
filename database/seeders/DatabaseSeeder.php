<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Moto;
use App\Models\Car;
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
        \App\Models\User::factory(99)->create();
        \App\Models\Moto::factory(99)->create();
        $this->call(CarSeeder::class);
        
    }
}
