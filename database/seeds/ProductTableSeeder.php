<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\Product([
        'Product_name'=>'Acer Predator 17 laptop',
            'Product_category'=>'Electronics',

            'Product_brand'=>'Acer',

            'Product_description'=>'Acer Predator 17 G5-793-73NZ Gaming Notebook',

            'Product_specification'=>'Acer Predator 17 G5-793-73NZ Gaming Notebook',

            'Product_warranty' =>'one year extended warranty',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 4,

             'Product_price'=>2000,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black and Red'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Acer Aspire 1 14" laptop',

            'Product_category'=>'Electronics',

            'Product_brand'=>'Acer',

            'Product_description'=>'Acer Aspire R 11',

            'Product_specification'=>'Acer Aspire R 11',

            'Product_warranty' =>'one year extended warranty',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 4,

             'Product_price'=>2000,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black and Red'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Acer R11 laptop',

            'Product_category'=>'Electronics',

            'Product_brand'=>'Acer',

            'Product_description'=>'Acer R11 LAPTOP',

            'Product_specification'=>'Acer R11 LAPTOP',

            'Product_warranty' =>'one year extended warranty',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 4,
            'Product_price'=>2000,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black and Red'
        ]);
        $product->save();
        $product =new \App\Product([
            'Product_name'=>'Acer Aspire R laptop',

            'Product_category'=>'Electronics',

            'Product_brand'=>'Acer',

            'Product_description'=>'Acer Aspire R Notebook',

            'Product_specification'=>'Acer Aspire R Notebook',

            'Product_warranty' =>'one year extended warranty',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 4
            ,'Product_price'=>2000,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black and Red'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'samsung laptop',

            'Product_category'=>'Electronics',

            'Product_brand'=>'Samsung',

            'Product_description'=>'Samsung Notebook',

            'Product_specification'=>'Samsung Notebook',

            'Product_warranty' =>'one year extended warranty',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 4
            ,'Product_price'=>2000,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black and Red'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'shirt blue',

            'Product_category'=>'clothing',

            'Product_brand'=>'George',

            'Product_description'=>'blue shirt',

            'Product_specification'=>'blue cotton shirt',

            'Product_warranty' =>'None',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 7
            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Blue'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Black Top',

            'Product_category'=>'clothing',

            'Product_brand'=>'H&M',

            'Product_description'=>'Black top',

            'Product_specification'=>'Black top',

            'Product_warranty' =>'None',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 8

            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Blue jacket',

            'Product_category'=>'clothing',

            'Product_brand'=>'Abercrombie',

            'Product_description'=>'Blue jacket',

            'Product_specification'=>'blue jacket',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 9
            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Blue'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'black knit top',

            'Product_category'=>'clothing',

            'Product_brand'=>'Levis',


            'Product_description'=>'black knit top',

            'Product_specification'=>'black knit top',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 10
            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black '
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'crop top',

            'Product_category'=>'clothing',

            'Product_brand'=>'George',

            'Product_description'=>'This is a crop top. 
            It is black in color',

            'Product_specification'=>'crop top',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 7

            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'Black'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Womens white shirt',

            'Product_category'=>'clothing',

            'Product_brand'=>'H&M',

            'Product_description'=>'Womens white shirt',

            'Product_specification'=>'Womens white shirt',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 8

            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'White'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'tri coloured t-shirt',

            'Product_category'=>'clothing',

            'Product_brand'=>'Abercrombie',

            'Product_description'=>'tri coloured t-shirt',

            'Product_specification'=>'tri coloured t-shirt',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 9

            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'green'
        ]);
        $product->save();

        $product =new \App\Product([
            'Product_name'=>'Green men t-shirt',

            'Product_category'=>'clothing',

            'Product_brand'=>'Levis',

            'Product_description'=>'Green men t-shirt',

            'Product_specification'=>'Green men t-shirt',

            'Product_warranty' =>'none',

            'Product_shippingcost'=>'Free Shipping',

            'supplier_id' => 10

            ,'Product_price'=>200,

            'Product_discount'=>10,

            'Product_instock'=>5,

            'Product_color'=>'green'
        ]);
        $product->save();


    }
}
