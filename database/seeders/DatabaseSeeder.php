<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin123'),
            'email_verified_at' => Carbon::now()
        ]);

        Category::create([
            'name' => 'T-shirt',
            'slug' => 't-shirt',
            'user_id' => 1,
        ]);

        Category::create([
            'name' => 'Jacket',
            'slug' => 'jacket',
            'user_id' => 1,
        ]);

        Product::factory(10)->create();
    }
}
