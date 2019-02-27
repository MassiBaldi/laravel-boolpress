<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
  public function run()
  {
    $categories = ['Sport', 'Informatica', 'Tempo Libero'];
      foreach ($categories as $categoryName)
      {
        $newCategory = new Category;
        $newCategory->title = $categoryName;
        $newCategory->slug = Str::slug($categoryName);
        $newCategory->save();
      }
  }
}
