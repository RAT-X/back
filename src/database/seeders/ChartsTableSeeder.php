<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期test用Chart
        DB::table('charts')->insert([
            'user_id' => 1,
            'project_id' => 1,
            'comment' => '最初のプロジェクト',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('charts')->insert([
            'user_id' => 1,
            'project_id' => 2,
            'comment' => '2つ目のプロジェクト',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('charts')->insert([
            'user_id' => 1,
            'project_id' => 3,
            'comment' => '3つ目のプロジェクト',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
