<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'project_number' => 1,
                'name' => 'FirstProject',
            ],
            [
                'project_number' => 2,
                'name' => 'SecondProject',
            ],
            [
                'project_number' => 3,
                'name' => 'ThirdProject',
            ],
        ]);
    }
}
