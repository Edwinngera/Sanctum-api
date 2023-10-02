<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'slug' => 'product-1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'slug' => 'product-2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products as needed
        ]);
    }
}
