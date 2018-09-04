@extends('layouts.app')

@section('content')
<style>
html, body {
background-color: #616161;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cpolygon fill='%23898989' points='957 450 539 900 1396 900'/%3E%3Cpolygon fill='%23d6d6d6' points='957 450 872.9 900 1396 900'/%3E%3Cpolygon fill='%23a6a6a6' points='-60 900 398 662 816 900'/%3E%3Cpolygon fill='%23a4a4a4' points='337 900 398 662 816 900'/%3E%3Cpolygon fill='%23646464' points='1203 546 1552 900 876 900'/%3E%3Cpolygon fill='%23bababa' points='1203 546 1552 900 1162 900'/%3E%3Cpolygon fill='%23b8b8b8' points='641 695 886 900 367 900'/%3E%3Cpolygon fill='%23c5c5c5' points='587 900 641 695 886 900'/%3E%3Cpolygon fill='%23b6b6b6' points='1710 900 1401 632 1096 900'/%3E%3Cpolygon fill='%23868686' points='1710 900 1401 632 1365 900'/%3E%3Cpolygon fill='%23b5b5b5' points='1210 900 971 687 725 900'/%3E%3Cpolygon fill='%23989898' points='943 900 1210 900 971 687'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
/* background by SVGBackgrounds.com */
}
.path4{
  fill: #424242;
}
.login-list{
  text-align: center;
  width: 93%;
  padding-top: 20pt;
}
.login-list li{
  display: inline-block;
  margin: 0 10pt;
}
.login-list li p{
  color: #424242;
  font-weight: bold;
  font-size: 11pt;
}
.input {
  height: 38pt;
  background: #E0E0E0;
  color: #424242;
  border: none;
  border-radius: 3px;
  width: 100%;
}
.input::placeholder {
  font-size: 12pt;
}
.form-group {
  margin: 0;
  padding: 0;
}
</style>
<p style="text-align: center; margin-top: 12vh; color: #E0E0E0; font-size: 25pt; margin-bottom: 10px; font-weight: bold;">Register</p>
<div class="panel panel-default" style="background-color: rgba(0,0,0,0); height: 400px; width: 285pt; border: none; display: block; margin: 0 auto;">
  <div style="padding: 15pt; padding-top: 0pt;">
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="input" style="border-radius: 3px 3px 0 0; border: 1px solid #9E9E9E;" id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>
          @if ($errors->has('first_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="input" style="border-radius: 0; border: 1px solid #9E9E9E; border-top: none;" id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="input" style="border-radius: 0; border: 1px solid #9E9E9E; border-top: none;" id="email" placeholder="E-mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input class="input"  style="border-radius: 0; border: 1px solid #9E9E9E; border-top: none;" placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
                <input placeholder="Confirm Password" class="input" style="border: 1px solid #9E9E9E; border-top: none; border-radius: 0 0 3px 3px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <p style="margin: 0; padding: 0; text-align: center; color: #E0E0E0; margin-top: 20px; font-size: 10pt;">By clicking Register, you are indicating that you have read and agree to the Terms and Conditions, and Privacy Policy.</p>
        <div class="form-group">
          <div style="margin-top: 24px;">
            <button type="submit" style="width: 75pt; height: 30pt; margin-left: 0pt; margin-right: 10pt; background: #0288D1; color: #fff; border: none; font-weight: bold; background: #0288D1; border-radius: 3px;" class="btn btn-primary">
              Register
            </button>
            <a style="font-weight: bold; color: #E0E0E0;" class="btn btn-link" href="{{ route('login') }}">
              Login
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
