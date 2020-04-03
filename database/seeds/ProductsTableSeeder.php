<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product();
        $product1->name = 'Hảo Hảo';
        $product1->description = 'Hảo Hảo chua cay';
        $product1->price = 100000;
        // $product1->cover_image = 'Hảo Hảo';
        $product1->category_id = 1;
        $product1->save();

        $product2 = new Product();
        $product2->name = 'Gạo An An';
        $product2->description = 'Chất lượng dẻo thơm';
        $product2->price = 250000;
        // $product1->cover_image = 'Hảo Hảo';
        $product2->category_id = 2;
        $product2->save();

        $product3 = new Product();
        $product3->name = 'Thuốc Ngựa';
        $product3->description = 'Hút nhiều bổ phổi ngừa lao';
        $product3->price = 240000;
        // $product1->cover_image = 'Hảo Hảo';
        $product3->category_id = 3;
        $product3->save();
    }
}
