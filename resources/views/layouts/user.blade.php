@extends('layouts.master')

@section('content')

    <style>
        a{
            color: #0b0b0b;
        }
    </style>

    <div class="row">
        <div class="col-sm-3">
    <nav class="nav nav-tabs flex-column"  style="padding:20px; align-content: center">

        <a class="nav-link" href="{{ route('User.getprofile') }}">Profile</a>
        <a class="nav-link" href="{{ route('Orders.orders') }}">Your Orders</a>
        <a class="nav-link" href="{{ route('User.giftcards') }}">Gift Cards</a>

    </nav>
        </div>
        <div class="col-sm-6">
            @yield('usercontent')
        </div>
    </div>
    @endsection

