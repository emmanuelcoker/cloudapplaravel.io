<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExportSQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents('public/sql_tables/Country.sql'));
        DB::unprepared(file_get_contents('public/sql_tables/States.sql'));
        DB::unprepared(file_get_contents('public/sql_tables/Cities.sql'));
    }
}
