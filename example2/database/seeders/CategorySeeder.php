<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->title = "Ao";
        $category->description	="product";
        $category->save();
        $category = new Category();
        $category->title = "Quan";
        $category->description	="product";
        $category->save();
        $category = new Category();
        $category->title = "Mu";
        $category->description	="product";
        $category->save();

    }
}
