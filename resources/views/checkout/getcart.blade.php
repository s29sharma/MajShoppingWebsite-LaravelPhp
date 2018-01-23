@extends('layouts.master')

@section('content')
    <div class="container">
        @if(!empty($products))
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
                                {{--

<select name="quantity" id="quantity" class="quantity">
<option value="1" {{ $product['qty'] == 1 ? 'selected' : '' }}>1</option>
<option value="2" {{ $product['qty'] == 2 ? 'selected' : '' }}>2</option>
<option value="3" {{ $product['qty'] == 3 ? 'selected' : '' }}>3</option>
<option value="4" {{ $product['qty'] >= 4 ? 'selected' : '' }}>4</option>
</select>--}}
                            </td>
                            <td>${{ $product['price']}}</td>
                            <td class=""></td>
                            <td>
                                <a href="{{ route('checkout.update',['id'=>$product['item']->id,'quantity'=>$product['qty']]) }}"><i class="fa fa-trash fa-2x"></i> </a>
                            </td>
                            <td>
                                <a href="#"><i class="fa fa-heart fa-2x"></i> </a>
                            </td>
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

            <div class="row" style="justify-content: center">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">
                    <form name="submission" action="{{ route('checkout.address')}}" method="get">
                        <input type="submit" class="btn btn-primary" value="Checkout" style=" color:black;background-color:goldenrod; border: 1px solid black; min-width: 200px">
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="col-sm-3">
                    <form name="back" action="{{ route('layouts.index') }}" method="get">
                        <input type="submit" class="btn btn-danger" value="Continue Shopping" style="color: black;background-color:goldenrod; border: 1px solid black;min-width: 200px; ">
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="col-sm-3">

                </div>
            </div>

        @else
            <h4>Your Shopping cart is empty</h4>
            <br/>
            <br/>
        @endif
    </div>
    @endsection

