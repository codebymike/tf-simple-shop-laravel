<?php

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
        $now = \Carbon\Carbon::now();

        DB::table('products')->insert([
            ['name' => "Apple", 'price' => 0.23, "created_at" => $now, "updated_at" => $now],
            ['name' => "Banana", 'price' => 0.54, "created_at" => $now, "updated_at" => $now],
            ['name' => "Carrot", 'price' => 0.17, "created_at" => $now, "updated_at" => $now],
            ['name' => "Dates", 'price' => 1.99, "created_at" => $now, "updated_at" => $now],
            ['name' => "Egg", 'price' => 0.33, "created_at" => $now, "updated_at" => $now],
        ]);
    }
}
