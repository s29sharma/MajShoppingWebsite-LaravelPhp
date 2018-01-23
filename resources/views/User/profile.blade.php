@extends('layouts.user')
@section('usercontent')
    <div class="container">

        <div class="row" style="justify-content: center">
            <form method="post" action="{{ route('User.profile') }}" autocomplete="off">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="firstname" value="{{ Auth::user()->name }}">
                    </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
                </div>

                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->password }}">
                </div>

                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

    @endsection
