<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate1 = new Category();
        $cate1->name = "Mì Tôm";
        $cate1->save();

        $cate2 = new Category();
        $cate2->name = "Gạo";
        $cate2->save();

        $cate3 = new Category();
        $cate3->name = "Thuốc Lá";
        $cate3->save();
    }
}
