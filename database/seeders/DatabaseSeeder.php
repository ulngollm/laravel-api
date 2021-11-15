<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\OrderSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ListSeeder::class,
            StatusSeeder::class
        ]);
    }
}
