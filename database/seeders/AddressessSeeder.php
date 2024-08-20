<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create ([
            'type'  => 'local',
            'streetAddress'  => '123 Elm Street',
            'addressLine2'  => '123 Elm Street',
            'city'  => 'NY',
            'state'  => 'USA',
            'postalCode'  => '2154',
            'country'  => 'MEX',
            'latitude'  => '21.542121', 
            'longitude'  => '5.54412'
        ]);

        Address::create ([
            'type'  => 'local',
            'streetAddress'  => '123 Elm Street',
            'addressLine2'  => '123 Elm Street',
            'city'  => 'NY',
            'state'  => 'USA',
            'postalCode'  => '2154',
            'country'  => 'REP',
            'latitude'  => '21.542121', 
            'longitude'  => '5.54412'
        ]);

        Address::create ([
            'type'  => 'local',
            'streetAddress'  => '123 Elm Street',
            'addressLine2'  => '123 Elm Street',
            'city'  => 'NY',
            'state'  => 'USA',
            'postalCode'  => '2154',
            'country'  => 'ARG',
            'latitude'  => '21.542121', 
            'longitude'  => '5.54412'
        ]);
    
    }
}
