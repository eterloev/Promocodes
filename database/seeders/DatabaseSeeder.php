<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Promocode;
use App\Models\Role;
use App\Models\User;
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
        Role::factory()->create([
            'name' => 'User'
        ]);
        Role::factory()->create([
            'name' => 'Admin'
        ]);
        Product::factory(5)->create();
        User::factory(10)->create();
        Promocode::factory(10)->create();
    }
}
