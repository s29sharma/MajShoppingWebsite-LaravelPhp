@extends('layouts.master')

@section('content')

    <div class="row" style="justify-content: center">
        <p style="color: darkred">Please submit your Delivery details:</p>
    </div>
    <br/>
    <br/>

<div class="row" style="justify-content: center">
    <div class="col-sm-4">
        @foreach($errors->all() as $error)
            <p style="color: #ef1a1a; font-size: 12px;">{{ $error }}</p>
        @endforeach
    </div>
</div>
    <div class="row" style="justify-content: center">
        <form method="post" action="{{ route('checkout.getpayment') }}" autocomplete="off">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address Line 1</label>
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address Line 2</label>
                    <input type="text" class="form-control" name="inputAddress2" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="inputCity"  id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="inputState">
                            <option selected>Choose...</option>
                            <option>Alberta</option>
                            <option>British Columbia</option>
                            <option>New Brunswick</option>
                            <option>New Foundland</option>
                            <option>Nova Scotia</option>
                            <option>Ontario</option>
                            <option>Prince Edward Island</option>
                            <option>Quebec</option>
                            <option>Saskatchewan</option>
                            <option>Manitoba</option>
                            <option>Northwest Territories</option>
                            <option>Nunavut</option>
                            <option>Yukon</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="inputZip">
                    </div>
                </div>
            {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="Submit"></input>
        </form>
    </div>
    @endsection