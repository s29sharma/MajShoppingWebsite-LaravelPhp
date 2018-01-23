<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier=new \App\Supplier([
        'supplier_name' => 'Ajanta Electronics',
        'supplier_url' =>'www.ajantaelectronics.com',
        'supplier_info' => 'A company that is 60 years old and is still growing',
        'supplier_contact'=>6783465798
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'HABC Electronics',
            'supplier_url' =>'www.habcelectronics.com',
            'supplier_info' => 'A company that is 20 years old and is still growing',
            'supplier_contact'=>6783465797
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'CEC Electronics',
            'supplier_url' =>'www.ajantaelectronics.com',
            'supplier_info' => 'A company that is 30 years old and is still growing',
            'supplier_contact'=>6783465723
        ]);
        $supplier->save();


        $supplier=new \App\Supplier([
            'supplier_name' => 'Acer',
            'supplier_url' =>'www.acer.com',
            'supplier_info' => 'Leaders in computer world',
            'supplier_contact'=>6783465723
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'Apple',
            'supplier_url' =>'www.apple.com',
            'supplier_info' => 'Apple Inc',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'Samsung Electronics',
            'supplier_url' =>'www.samsung.com',
            'supplier_info' => 'Samsung electronics limited',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'George',
            'supplier_url' =>'www.george.com',
            'supplier_info' => 'george clothing limited',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();
        $supplier=new \App\Supplier([
            'supplier_name' => 'H&M',
            'supplier_url' =>'www.h&m.com',
            'supplier_info' => 'H&M clothing limited',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'Abercrombie and fitch',
            'supplier_url' =>'www.fitch.com',
            'supplier_info' => 'Abercrombie and fitch limited',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();

        $supplier=new \App\Supplier([
            'supplier_name' => 'Levis',
            'supplier_url' =>'www.levis.com',
            'supplier_info' => 'Levis clothing limited',
            'supplier_contact'=>6783465798
        ]);
        $supplier->save();



    }
}
