<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review=new \App\Review([
           'Review_Username'=>'Sachin',
           'Review_heading'=>'Good product',
           'Review_verification'=>'Verified purchase',
           'Review_content'=>'Very nice product. Works well. The display is crisp.',
            'Product_id'=>1,
            'Product_rating'=>4
        ]);
        $review->save();

        $review=new \App\Review([
            'Review_Username'=>'Simratpal',
            'Review_heading'=>'Nice laptop',
            'Review_verification'=>'Verified purchase',
            'Review_content'=>'Very nice product. Works well. The display is crisp.',
            'Product_id'=>1,
            'Product_rating'=>3
        ]);
        $review->save();

        $review=new \App\Review([
            'Review_Username'=>'Harsh',
            'Review_heading'=>'Bad product',
            'Review_verification'=>'Verified purchase',
            'Review_content'=>' Not a Very nice product. Doesnt Work well.',
            'Product_id'=>1,
            'Product_rating'=>4
        ]);
        $review->save();

        $review=new \App\Review([
            'Review_Username'=>'Jaskaran',
            'Review_heading'=>'Worst product',
            'Review_verification'=>'Verified purchase',
            'Review_content'=>'Broke down in a few days',
            'Product_id'=>1,
            'Product_rating'=>3
        ]);
        $review->save();




    }
}
