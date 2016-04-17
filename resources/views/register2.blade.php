@extends('layouts.reglog')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}

        <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="text" class="form-control" name="username"  placeholder="Username" value="{{ old('username') }}">
                @if ($errors->has('username'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
        </div>

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
        </div>

        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="password" class="form-control" placeholder="Password" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
        </div>

        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input  type="password" class="form-control" placeholder="Retype password" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
        <a href="{{url('/login2')}}" class="text-center">I already have a membership</a>
@endsection