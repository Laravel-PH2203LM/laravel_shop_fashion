<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('brands')->insert([
            [
                'name' => 'Calvin Klein',
                'status'=> 1
            ],
            [
                'name' => 'Diesel',
                'status' => 0
            ],
            [
                'name' => 'Polo',
                'status' => 1
            ],
            [
                'name' => 'Tommy Hilfiger',
                'status' => 1
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'men',
                'status' => 1
            ],
            [
                'name' => 'Women',
                'status' => 1
            ],
            [
                'name' => 'Kids',
                'status' => 1
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 12,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
            [
                'id' => 13,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
            [
                'id' => 14,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
            [
                'id' => 15,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Microfiber Wool Scarf',
                'description' => null,
                'content' => null,
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
            [
                'id' => 16,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Men's Painted Hat",
                'description' => null,
                'content' => null,
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
            [
                'id' => 17,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Converse Shoes',
                'description' => null,
                'content' => null,
                'price' => 200000,
                'qty' => 20,
                'discount' => 0,
                'status' => 1
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 12,
                'path' => '1663480854.product-1-2.jpg',
                'status' => 1
            ],
            [
                'product_id' => 12,
                'path' => '1663482222.T2109.png',
                'status' => 1
            ],
            [
                'product_id' => 12,
                'path' => '1663482222.T2119.png',
                'status' => 1
            ],
            [
                'product_id' => 12,
                'path' => '1663482222.T2127.png',
                'status' => 1
            ],
            [
                'product_id' => 13,
                'path' => '1663482222.2106.png',
                'status' => 1
            ],
            [
                'product_id' => 14,
                'path' => '1663482222.2106.png',
                'status' => 1
            ],
            [
                'product_id' => 15,
                'path' => '1663482222.2106.png',
                'status' => 1
            ],
            [
                'product_id' => 16,
                'path' => '1663482222.2106.png',
                'status' => 1
            ],
            [
                'product_id' => 17,
                'path' => '1663482222.2106.png',
                'status' => 1
            ],
        ]);

        DB::table('product_attribute')->insert([
            [
                'product_id' => 12,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 12,
                'color_id' => 2,
                'size_id' => 3,
            ],
            [
                'product_id' => 12,
                'color_id' => 2,
                'size_id' => 3,
            ],
            [
                'product_id' => 13,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 13,
                'color_id' => 2,
                'size_id' => 3,
            ],
            [
                'product_id' => 14,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 14,
                'color_id' => 2,
                'size_id' => 4,
            ],
            [
                'product_id' => 15,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 16,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 16,
                'color_id' => 2,
                'size_id' => 3,
            ],
            [
                'product_id' => 17,
                'color_id' => 1,
                'size_id' => 3,
            ],
            [
                'product_id' => 12,
                'color_id' => 2,
                'size_id' => 3,
            ],
        ]);
    }
}

