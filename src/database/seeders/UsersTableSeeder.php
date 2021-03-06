<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //test user　初期テスト用
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('testtesttest'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
