<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('product_categories')->insertOrIgnore([

            [   'id' => 1,
                'category_name' => 'Women',
                'parent_id' => null,
                'category_banner' => asset('category_banners').'/women.jpg',
            ],

            [   'id' => 2,
                'parent_id' => null,

                'category_name' => 'Men',
                'category_banner' => asset('category_banners').'/men.jpg',
            ],

            [   'id' => 3,
                'parent_id' => 2,
                'category_name' => 'Men Clothings',
                'category_banner' => asset('category_banners').'/men_clothings.jpg',
            ],
            [   'id' => 4,
                'parent_id' => 1,
                'category_name' => 'Women Clothings',
                'category_banner' => asset('category_banners').'/women_clothings.jpg',
            ],
            [   'id' => 5,
                'parent_id' => null,

                'category_name' => 'Kids Clothings',
                'category_banner' => asset('category_banners').'/kids_clothings.jpg',
            ],
            [   'id' => 6,
                'parent_id' => null,

                'category_name' => 'Clothing Accessories',
                'category_banner' => asset('category_banners').'/clothing_accessories.jpg',
            ],
            [   'id' => 7,
                'parent_id' => 1,
                'category_name' => 'Women Hair',
                'category_banner' => asset('category_banners').'/women_hair.jpg',
            ]


        ]);
    }
}
