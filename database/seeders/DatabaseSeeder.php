<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('abilities')->insert([
            [
                'name' => 'create_role',
                'label' => 'Create Roles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'read_role',
                'label' => 'Read Roles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'update_role',
                'label' => 'Update Roles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'delete_role',
                'label' => 'Delete Roles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'create_ability',
                'label' => 'Create Abilities',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'read_ability',
                'label' => 'Read Abilities',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'update_ability',
                'label' => 'Update Abilities',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'delete_ability',
                'label' => 'Delete Abilities',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'read_backoffice',
                'label' => 'View Backoffice',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'create_pacients',
                'label' => 'Create Pacients',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'read_pacients',
                'label' => 'Read Pacients',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'update_pacients',
                'label' => 'Update Pacients',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'delete_pacients',
                'label' => 'Delete Pacients',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'create_kurators',
                'label' => 'Create Kurators',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'read_kurators',
                'label' => 'Read Kurators',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'update_kurators',
                'label' => 'Update Kurators',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'delete_kurators',
                'label' => 'Delete Kurators',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);

        DB::table('users')->insert([
            [
                'name' => 'gonzalo.granados',
                'email' => 'test@example.com',
                'password' => bcrypt('kura+123'),
                // 'image'         => '',
                // 'provider_id'   => 0,
                // 'provider'      => 'email',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'admin.kuratracker',
                'email' => 'sistemas@procomsa.com.mx',
                'password' => bcrypt('kura+123'),
                // 'image'         => '',
                // 'provider_id'   => 0,
                // 'provider'      => 'email',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('teams')->insert([
            [
                'name' => 'administrators',
                'user_id' => 1,
                'personal_team' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'kurador',
                'user_id' => 1,
                'personal_team' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'paciente',
                'user_id' => 1,
                'personal_team' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'empleado',
                'user_id' => 1,
                'personal_team' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('team_user')->insert([
            [
                'team_id' => 1,
                'user_id' => 1,
                'role' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'team_id' => 1,
                'user_id' => 2,
                'role' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        //Seeder Companies
        $this->call(CompanySeeder::class);
        $this->call(AddressessSeeder::class);
        $this->call(SitesSeeder::class);
        $this->call(SexesSeeder::class);


    }

}
