<?php

namespace Database\Seeders;

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
        $this->call(BrandSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
