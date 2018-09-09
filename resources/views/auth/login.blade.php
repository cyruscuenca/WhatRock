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
  padding-top: 22pt;
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
</style>
<div class="panel panel-default" style="background-color: #BDBDBD; border-radius: 3px; height: 315pt; width: 285pt; border: none; display: block; margin: 0 auto; margin-top: 14vh;">
  <div style="padding: 15pt; padding-top: 20pt;">
    <div style="background-color: #BDBDBD; font-family: 'Open Sans'; color: #424242; font-size: 16pt; border-radius: 3pt; font-weight: bold; text-align: center; margin-bottom: 2pt;">Login</div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input placeholder="E-mail Address" style="height: 34pt; background: #E0E0E0; color: #757575; border-radius: 2pt;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input placeholder="Password" style="height: 34pt; color: #757575; background: #E0E0E0; border-radius: 2pt;" id="password" type="password" class="form-control" name="password" required>

          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
          <a style="float: right; color: #424242; font-weight: bold; font-size: 11pt;" class="btn btn-link" href="{{ route('password.request') }}">
            Forgot your password?
          </a>
        </div>
        <div class="form-group">
          <div style="margin-top: 84pt;">
            <button type="submit" style="width: 60pt; height: 30pt; margin-left: 0pt; margin-right: 10pt; background: #0288D1; color: #fff; border: none; font-weight: bold; background: #0288D1; border-radius: 2pt;" class="btn btn-primary">
              Login
            </button>
            <a style="font-weight: bold; color: #424242;" class="btn btn-link" href="{{ route('register') }}">
              Register
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div style="background: #BDBDBD; height: 62pt; width: 285pt; display: block; margin: 0 auto; margin-top: 1.5vh; border-radius: 3px;">
  <ul class="login-list">
    <li><p>Terms</p></li>
    <li><p>Privacy</p></li>
    <li><p>About</p></li>
  </ul>
</div>
@endsection
