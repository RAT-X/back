<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    // ここから追加
    private const SEEDERS = [
        UserSeeder::class,
    ];
    // ここまで

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ここから追加
        foreach(self::SEEDERS as $seeder) {
            $this->call($seeder);
        }
        // ここまで
        
        $this->call([
            UsersTableSeeder::class,
            ChartsTableSeeder::class,
            ContentsTableSeeder::class,
            ProjectsTableSeeder::class,
        ]);
    }
}
