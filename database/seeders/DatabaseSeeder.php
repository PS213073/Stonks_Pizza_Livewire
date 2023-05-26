<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       
        $this->call(ProductSeeder::class);
        // \App\Models\User::factory(10)->create();
        // \App\Models\Product::factory(7)->create();

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
        ]);
    }
}