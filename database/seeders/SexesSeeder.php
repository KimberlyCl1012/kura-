<?php

namespace Database\Seeders;

use App\Models\Sex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Sex::create ([
            'name' => 'Hombre',
            'description' => 'Lorem Ipsum es simplemente'
        ]);

        Sex::create ([
            'name' => 'Mujer',
            'description' => 'Lorem Ipsum es simplemente'
        ]);

        Sex::create ([
            'name' => 'Sin genero',
            'description' => 'Lorem Ipsum es simplemente'
        ]);
    }
    
}
