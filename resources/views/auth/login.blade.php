@extends('layouts.app')
@section('content')
<style>
.path4{
	fill: #546E7A;
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
  color: #fff;
  font-weight: bold;
  font-size: 11pt;
}
</style>
<a href="{{ url('/') }}" style="width: 75pt; height: 75pt; display: block; margin: 0 auto; margin-top: 8vh;">
  <svg
  height="75pt" width="75pt"
  sodipodi:docname="favicon.svg"
  id="svg10"
  preserveAspectRatio="xMidYMid meet"
  viewBox="0 0 250.000000 250.000000"
  height="250.000000pt"
  width="250.000000pt">
</metadata>
<g transform="translate(0.000000,250.000000) scale(0.100000,-0.100000)" stroke="none" id="g8">
<path d="M1010 2445 c-41 -12 -140 -41 -220 -64 -80 -22 -171 -49 -202 -58 -32 -9 -58 -19 -58 -23 0 -4 -21 -13 -47 -20 -82 -21 -208 -61 -220 -68 -7 -4 -21 -44 -31 -87 -11 -44 -38 -154 -61 -245 -59 -233 -60 -239 -50 -245 5 -3 21 1 37 9 16 8 65 29 108 46 43 18 81 35 84 39 3 3 17 11 31 18 l26 11 18 -89 c10 -49 21 -89 25 -89 3 0 12 -28 18 -62 7 -35 15 -74 18 -87 6 -22 4 -21 -42 12 -27 20 -67 55 -89 78 -35 38 -40 41 -49 25 -6 -10 -41 -50 -78 -89 -38 -39 -68 -74 -68 -79 0 -9 11 -20 290 -288 100 -96 241 -233 313 -304 147 -145 143 -144 166 -35 7 35 24 106 36 158 l22 93 13 -46 c7 -25 17 -46 21 -46 5 0 9 -6 9 -13 0 -21 161 -521 170 -527 4 -3 18 -39 30 -80 45 -147 70 -225 79 -239 8 -12 74 -4 421 50 226 35 416 67 421 70 6 3 21 55 34 115 13 60 40 183 60 274 66 298 85 392 85 415 0 13 4 25 9 27 6 2 20 54 33 115 l23 113 -20 37 c-11 20 -25 41 -30 47 -6 6 -20 29 -31 51 -56 112 -157 290 -169 299 -8 6 -21 27 -29 46 -8 20 -37 75 -64 122 -28 48 -53 96 -57 107 -11 37 -47 66 -140 116 -49 27 -92 52 -95 55 -3 4 -63 37 -135 75 -136 70 -197 105 -205 115 -3 4 -48 28 -100 55 -52 26 -124 63 -160 82 -36 18 -67 32 -70 32 -3 -1 -39 -11 -80 -24z"
class="path4"
style="fill-opacity:1" />
<path
d="M320 877 c0 -7 16 -28 35 -47 19 -19 35 -38 35 -43 0 -6 38 -47 85 -93 47 -45 85 -86 85 -90 0 -9 71 -88 86 -94 6 -3 38 -36 70 -75 33 -38 88 -99 124 -136 36 -37 90 -96 120 -132 54 -64 88 -93 97 -84 6 6 -19 334 -26 345 -8 12 -176 123 -223 147 -21 11 -38 22 -38 26 0 7 -84 62 -183 120 -32 19 -75 49 -95 66 -21 18 -42 33 -47 33 -6 0 -34 16 -62 35 -58 39 -63 41 -63 22z"
class="path4"
style="fill-opacity:1" />
</g>
</svg>
</a>
<div class="med-shadow panel panel-default" style="background-color: #455A64; border-radius: 3pt; height: 315pt; width: 285pt; border: none; display: block; margin: 0 auto; margin-top: 4.2vh;">
  <div style="padding: 15pt; padding-top: 20pt;">
    <div style="background-color: #455A64; font-family: 'ubuntu-l'; color: #fff; font-size: 16pt; border-radius: 3pt; font-weight: bold; text-align: center; margin-bottom: 2pt;">Login</div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input placeholder="E-mail Address" style="height: 34pt; background: #546E7A; color: #fff; border: none; border-radius: 2pt;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input placeholder="Password" style="height: 34pt; color: #fff; background: #546E7A; border: none; border-radius: 2pt;" id="password" type="password" class="form-control" name="password" required>

          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
          <a style="float: right; color: #fff; font-weight: bold; font-size: 11pt;" class="btn btn-link" href="{{ route('password.request') }}">
            Forgot your password?
          </a>
        </div>

        <div class="form-group">
          <div style="margin-top: 84pt;">
            <button type="submit" style="width: 60pt; height: 30pt; margin-left: 0pt; margin-right: 10pt; background: #0288D1; color: #fff; border: none; font-weight: bold; background: #0288D1; border-radius: 2pt;" class="btn btn-primary">
              Login
            </button>
            <a style="font-weight: bold; color: #fff;" class="btn btn-link" href="{{ route('register') }}">
              Register
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="med-shadow" style="background: #455A64; height: 62pt; width: 285pt; display: block; margin: 0 auto; margin-top: 2vh; border-radius: 3pt;">
  <ul class="login-list">
    <li><p>Terms</p></li>
    <li><p>Privacy</p></li>
    <li><p>About</p></li>
  </ul>
</div>
@endsection
