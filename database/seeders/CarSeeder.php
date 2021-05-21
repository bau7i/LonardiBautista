<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    private $CarData = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for ($i= 0; $i < 100; $i++){
            $CarData[] = [
                'marca' => Str::random(10),
                'modelo' => 1990
            ];
        }
         
        foreach($CarData as $Car){
            Car::create($Car);  
        }  
        */
        
        Car::create([
            'marca' => 'Ford',
            'modelo' => 1990,
        ]);
    }
}
