@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row" style="justify-content: center" >
        <div class="col-sm-4">
            <div class="row">
            <div class="panel panel-default" style="border: 1px solid lightgray; padding: 30px; margin-bottom: 50px; min-width: 400px;">
                <div class="panel-heading">
                    <div class="row" style="justify-content: center">
                        <a href="{{ route('layouts.index') }}"><img width="auto" src="{{ URL::asset('images/MAJ.png') }} "></a>
                    </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-12 col-form-label">E-Mail Address</label>
                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: #ef1a1a">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="col-sm-5">
                            <label for="password" class="col-sm-12 col-form-label">Password</label>
                                </div>
                                <div class="col-sm-6">
                                    <a style="color: dimgrey" class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: #ef1a1a">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Keep me Signed in
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="row" style="justify-content: center">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                </div>
                                <div class="row" style="justify-content: center">
                                    <p style="font-size: 15px;">New to MAJ?</p>
                                </div>
                                <div class="row" style="justify-content: center">
                                    <a href="{{ route('register') }}" class="btn btn-primary" style="width:200px; margin-left: 15px; background-color:palegoldenrod; color: black; border: black" >
                                        Create Account
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>
@endsection
