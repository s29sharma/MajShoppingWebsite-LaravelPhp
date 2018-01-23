@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row" style="justify-content: center">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div class="row" style="justify-content: center">
                    <a href="{{ route('layouts.index') }}"> <img width="auto" src="{{ URL::asset('images/MAJ.png') }} "></a>
                </div>
                </div>
                <div class="panel-body" style="border: 1px solid lightgray; padding: 30px; margin-bottom: 50px; min-width: 400px;">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-12 col-form-label">Name</label>

                            <div class="col-sm-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-12 control-label">E-Mail Address</label>

                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-12 control-label">Password</label>

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-sm-12 control-label">Confirm Password</label>

                            <div class="col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="row" style="justify-content: center">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: center; margin-left: 20px; margin-right: 20px;" >
                            <p>By creating an account, you agree to MAJ's <a style="color: #ef1a1a" href="#">Conditions of use </a> and <a style="color: #ef1a1a" href="#">Privacy Notice</a></p>
                        </div>
                        <br/>
                        <div class="row" style="justify-content: center; margin-left: 20px; margin-right: 20px;">
                            <p>Already have an account? <a style="color: #ef1a1a" href="{{ route('login') }}">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
