<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user1 = new \App\Models\User(
            [
                'name' => 'alex',
                'email' => 'alex@alex.com',
                'role' => 'admin',
            ]
        );

        $user1->password = bcrypt('alex');
        $user1->save();

        $user2 = new \App\Models\User(
            [
                'name' => 'user',
                'email' => 'user@alex.com',
                'role' => 'user',
            ]
        );

        $user2->password = bcrypt('user');
        $user2->save();

    }
}
