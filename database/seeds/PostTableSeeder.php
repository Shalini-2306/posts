<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = Category::where('name', 'Education')->first();
        $adminpost = new Post();
		$adminpost->category_id = $category->id;
		$adminpost->user_id = 1;
		$adminpost->title = 'Board Examination Scam';
		$adminpost->description = 'This post based on high school board examiniation scam.';
		$adminpost->save();
    }
}
