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
        // Factory
        // \App\Models\User::factory(10)->create();


        // Seeder
        $this->call(
            ProductTableSeeder::class,
        );
    }
}
