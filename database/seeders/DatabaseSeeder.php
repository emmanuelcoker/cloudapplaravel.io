<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Industry;
use App\Models\Role;
use App\Models\User;
use App\Models\Zone;
use App\Models\Path;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create role
        Role::firstOrCreate(['name' => 'Client']);
        Role::firstOrCreate(['name' => 'SuperAdmin']);

        //create default zones
        Industry::firstOrCreate(['name' => 'Default']);
        Industry::firstOrCreate(['name' => 'Bank']);
        Industry::firstOrCreate(['name' => 'Hotel']);
        Industry::firstOrCreate(['name' => 'Telcom']);


        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Default Zone']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Service Zone']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Meeting Room']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Board Room']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Customer Reception']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Tech Squad']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Customer Service']);
        Zone::firstOrCreate(['industry_id' => 1, 'name' => 'Receiption']);

        //add first country
        Country::firstOrCreate(['id' => 160, 'sortname' => 'NG', 'name' => 'Nigeria']);

        //register path configuration
        Path::firstOrCreate(['path' => 'Lcoation/App/index.html']);

        //create admin
        // User::firstOrCreate(['name' => 'Administrator', 'country_id' => 160, 'email' => 'admin@gmail.com', 'role_id' => 2, 'password' => '$2y$10$/bcJvAPtPPVNPZTz6noOKuYdEgWgwdjY4.DS7nB0c8q53zXt7ZppS']);
    }
}
