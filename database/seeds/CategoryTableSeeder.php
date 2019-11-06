<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_social = new Category();
		$category_social->name = 'Social';
		$category_social->save();
		
		$category_political = new Category();
		$category_political->name = 'Political';
		$category_political->save();
		
		$category_educational = new Category();
		$category_educational->name = 'Education';
		$category_educational->save();
		
		$category_technology = new Category();
		$category_technology->name = 'Technology';
		$category_technology->save();
    }
}
