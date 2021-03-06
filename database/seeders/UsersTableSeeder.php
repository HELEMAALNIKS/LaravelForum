<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Jaron',
            'email'     => 'jaron@hoste.me',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory(5)->count(5)->create();
    }
}
