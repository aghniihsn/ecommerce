<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (DB::table('categories')->count() == 0) {

            DB::table('categories')->insert([[
                'name' => 'ROG FLOW',
                'description' => 'Convertible Laptop',
                'image' => 'category-1.jpg',
            ], [
                'name' => 'ROG ZEPHYRUS',
                'description' => 'Best Performance Gaming',
                'image' => 'category-2.jpg',

            ], [
                'name' => 'ROG STRIX',
                'description' => 'Intelligent Cooling',
                'image' => 'category-3.jpg',
            ]]);
        }
    }
}
