<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        User::factory()
        ->count(10)
        ->state(new Sequence(
            ['type' => 'client'],
            ['type' => 'artisan'],
            ))
        ->create();
        
    }
}
