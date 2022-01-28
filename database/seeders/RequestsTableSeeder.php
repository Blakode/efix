<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Request::factory(10)->create();
    }
}
