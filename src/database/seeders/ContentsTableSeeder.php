<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期test用Contents
        DB::table('Contents')->insert([
            'chart_id' => 1,
            'project_title' => 'test_project',
            'column' => 1,
            'row' => 1,
            'branch_name' => 'test_branch',
            'contents' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga illum aliquid,
            ipsa maxime, eaque porro doloremque repudiandae at hic,
            dignissimos sunt nihil quas ab laudantium expedita! Odio explicabo consequatur qui.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
