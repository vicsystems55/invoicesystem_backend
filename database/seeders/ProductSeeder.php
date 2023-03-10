<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insertOrIgnore([

            [

                'name' => 'Black Flats',
                'description' => 'Designer flats for women',
                'img_url' => asset('products').'/black_flats_male.jpeg',
                'price' => 22000
            ],

            [

                'name' => 'Brown Heels',
                'description' => 'The best of comfortable heels elegant ladies',
                'img_url' => asset('products').'/brown_heels.jpeg',
                'price' => 8000
            ],

            [

                'name' => 'Brown Two Piece Wear',
                'description' => 'Designer wears for outdoor',
                'img_url' => asset('products').'/brown_two_piece_wear.jpeg',
                'price' => 12000
            ],

            [

                'name' => 'Human Hair Blend',
                'description' => 'Good quality human hair blend',
                'img_url' => asset('products').'/human_hair_blend.jpeg',
                'price' => 30000
            ],

            [

                'name' => 'Liliana Shoes',
                'description' => 'Comfortable shoes for all outtings',
                'img_url' => asset('products').'/liliana_shoes.jpeg',
                'price' => 8000
            ],

            [

                'name' => 'Male Wrist Watch Respect',
                'description' => 'Best grade mens watch',
                'img_url' => asset('products').'/watch.jpeg',
                'price' => 42000
            ],

            [

                'name' => 'Wine Heels - Ladies Choice',
                'description' => 'Bright color quality heels',
                'img_url' => asset('products').'/wine_heels.jpeg',
                'price' => 6000
            ],

            [

                'name' => 'Zara Flats',
                'description' => 'Best flats for women',
                'img_url' => asset('products').'/zara_flats.jpeg',
                'price' => 8000
            ],


             ]);

    }
}
