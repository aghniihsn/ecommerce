<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('banners')->count() == 0) {

            DB::table('banners')->insert([[
                'image' => 'banner-1.jpg',
            ], [
                'image' => 'banner-2.jpg',
            ]]);
        }
    }
}
