@extends('layouts.master')

@section('content')

    <div class="row">
        <h1>Your Recent Orders: {{ Auth::user()->name }}</h1>
    </div>

    <div class="row">


    <table class="table">
        <thead>
        <tr>
            <th class="table-image"></th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th class="column-spacer"></th>
            <th></th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td class="table-image"><img src="{{ URL::asset($product['item']->productimages->first()->image_url) }}" height="100px" width="100px" alt="product" class="img-responsive cart-image"></td>
                <td> <a href="{{ route('ProductDetails.index',['id'=>$product['item']->id]) }}" id="shoppingcartproduct">{{ $product['item']->Product_name }}</a> <span id="shoppingcartbrand">- by {{ $product['item']->Product_brand }}</span></td>
                <td>
                    <label id="quantity"> {{ $product['qty'] }}</label>
                </td>
                <td>${{ $product['price']}}</td>
                <td class=""></td>
            </tr>
        @endforeach
        <tr>
            <td class="table-image"></td>
            <td></td>
            <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
            <td>${{ $totalPrice }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="table-image"></td>
            <td></td>
            <td class="small-caps table-bg" style="text-align: right">Tax</td>
            <td>{{ $taxAmount }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr class="border-bottom">
            <td class="table-image"></td>
            <td style="padding: 40px;"></td>
            <td class="small-caps table-bg" style="text-align: right">Your Total</td>
            <td class="table-bg">{{ $totalAfterTax }}</td>
            <td class="column-spacer"></td>
            <td></td>
            <td></td>
        </tr>

        </tbody>

    </table>
</div>

    @endsection