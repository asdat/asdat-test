<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker\Generator;
        factory(App\Product::class, 50)->create()->each(function ($product) use ($faker) {
            $reviews = factory(App\ProductReview::class, rand(5, 8))->make();
            foreach ($reviews AS $review){
                $product->reviews()->save($review);
            }
        });
    }
}
