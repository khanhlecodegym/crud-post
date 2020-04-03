<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = new Tag();
        $tag1->title = 'cr7';
        $tag1->save();

        $tag2 = new Tag();
        $tag2->title = 'messi';
        $tag2->save();
    }
}
