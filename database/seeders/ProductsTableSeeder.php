<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 20; $i++){
            DB::table('products')->insert([
                'title' => 'Product '.$i,
                'price' => rand(200,1500),
                'status' => 1,
                'description' => 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.',
            ]);
        }
    }
}
