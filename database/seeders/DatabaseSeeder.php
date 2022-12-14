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
        \App\Models\User::create(
            [
                'name'=> 'Yoander Robles',
                'email' => 'dev@admin.com',
                'password'=> bcrypt('123456')
            ]
        );

        \App\Models\Post::factory()->count(24)->create();

    }
}
