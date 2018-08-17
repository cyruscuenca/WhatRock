@extends('layouts.app')

@section('content')
<div class="fixed-width" style="margin-top: calc(60pt + 5%); background: linear-gradient(rgba(69, 90, 100, 0.25), rgba(69, 90, 100, 0.25)), url({{asset('images/register-image.jpg')}}); background-size: cover; background-position: center; height: 400pt; border-radius: 2pt;">
            <div class="med-shadow panel panel-default" style="display: inline-block; float: left; background-color: #455A64; border-radius: 3pt 0 0 3pt; height: 100%; width: 280pt; border: none;">
                <div style="padding: 15pt; padding-top: 20pt;">
                <div class="" style="background-color: #455A64; font-family: 'ubuntu-l'; color: #fff; font-size: 16pt; border-radius: 3pt; font-weight: bold; text-align: center; margin-bottom: 2pt;">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input style="height: 34pt; background: #546E7A; color: #fff; border: none; border-radius: 2pt;" id="name" type="text" class="form-control" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input style="height: 34pt; background: #546E7A; color: #fff; border: none; border-radius: 2pt;" id="email" placeholder="E-mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input style="height: 34pt; color: #fff; background: #546E7A; border: none; border-radius: 2pt;" placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">

                                <input placeholder="Confirm Password" style="height: 34pt; background: #546E7A; color: #fff; border: none; border-radius: 2pt;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div style="margin-top: 115pt;">
                                <button type="submit" style="width: 75pt; height: 30pt; margin-left: 0pt; margin-right: 10pt; background: #0288D1; color: #fff; border: none; font-weight: bold; background: #0288D1; border-radius: 2pt;" class="btn btn-primary">
                                    Register
                                </button>

                                <a style="font-weight: bold; color: #fff;" class="btn btn-link" href="{{ route('login') }}">
                                    Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="fixed-width">
    <p style="float: right; margin-top: 6pt; margin-right: 1pt; color: #455A64;">Photo of the week from r/earthporn</p>
</div>
@endsection
