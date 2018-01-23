@extends('layouts.master')

@section('content')

    <div class="container-fluid">
    <div class="row">
        <h1>Your Recent Orders: {{ Auth::user()->name }}</h1>
    </div>

    <div class="row">


        <table class="table">
            <thead>
            <tr>
                <th class="table-image"></th>
                <th>Product</th>

                <th class="column-spacer"></th>
            </tr>
            </thead>

            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="table-image"><img src="{{ URL::asset($product['item']->productimages->first()->image_url) }}" height="100px" width="100px" alt="product" class="img-responsive cart-image"></td>
                    <td> <a href="{{ route('ProductDetails.index',['id'=>$product['item']->id]) }}" id="shoppingcartproduct">{{ $product['item']->Product_name }}</a> <span id="shoppingcartbrand">- by {{ $product['item']->Product_brand }}</span></td>
                    <td>${{ $product['price']}}</td>
                </tr>
            @endforeach


            </tbody>

        </table>
    </div>
    </div>

@endsection