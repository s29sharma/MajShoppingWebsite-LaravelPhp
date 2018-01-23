@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row" style="justify-content: center">
        <div class="col-sm-6">
            <p>Kindly confirm the billing address and click on Pay with card to Place the order. If details are not correct you can go back</p>
        </div>
    </div>

    <div class="row" style="border: 1px solid black; width: auto">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        <p>Billing address:</p>
        <p style="color: #ef1a1a;">{{ $firstname }}&nbsp;{{ $lastname }},</p>
        <p style="color: #ef1a1a;">{{ $address1 }},</p>
        <p style="color: #ef1a1a;">{{ $address2 }}, &nbsp;{{ $city }},</p>
        <p style="color: #ef1a1a;">{{ $state }}, {{$zip}}</p>
    </div>
    </div>
<div class="row">
    <div class="col-sm-3">

    </div>

    <div class="col-sm-3">
    <form action="{{ route('Orders.orders') }}" method="POST">
        {{ csrf_field() }}
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_CNCOqqjAmo0oQLHdxEq9DzNO"
                data-amount="999"
                data-name="sachin-maj"
                data-description="Widget"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="cad">
        </script>
    </form>
    </div>

    <div class="col-sm-3">
    <form name="submission" action="{{ route('checkout.address')}}" method="get">
        <input type="submit" class="btn btn-primary" value="Back" style=" color:black;background-color:goldenrod; border: 1px solid black; min-width: 200px">
        {{ csrf_field() }}
    </form>
    </div>

    <div class="col-sm-3">

    </div>

</div>
</div>

    @endsection