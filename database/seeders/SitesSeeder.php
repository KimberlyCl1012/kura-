<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create ([
            'address_id'  => 1,
            'siteName' =>  'Chiyoda City, Tokyo 100-0001',
            'description' => 'Hampden-Sydney en Virginia',
            'type' => 'local',
            'phone'  =>  '554545432'
        ]);

        Site::create ([
            'address_id'  => 2,
            'siteName' =>  '678 Maple Ave',
            'description' => 'Hampden-Sydney en Virginia',
            'type' => 'local',
            'phone'  =>  '554545432'
        ]);

        Site::create ([
            'address_id'  => 2,
            'siteName' =>  '123 Avenida Brasil',
            'description' => 'Hampden-Sydney en Virginia',
            'type' => 'local',
            'phone'  =>  '554545432'
        ]);

        Site::create ([
            'address_id'  => 3,
            'siteName' =>  '56 Nelson Mandela Ave',
            'description' => 'Hampden-Sydney en Virginia',
            'type' => 'local',
            'phone'  =>  '554545432'
        ]);
    }
}
