<?php

namespace Database\Seeders;

use App\Models\Bid;
use Carbon\Factory;
use Illuminate\Database\Eloquent\Factories\Factory as FactoriesFactory;
use Illuminate\Database\Seeder;



class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        Bid::factory(10)->create();
     
    }
}
