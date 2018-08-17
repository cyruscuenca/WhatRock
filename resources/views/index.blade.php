@extends('layouts.app')
@section('content')
<style type="text/css">
	.welcome-card{
		height: 76%;
		background: #ECEFF1;
		width: 200pt;
		display: inline-block;
		border-radius: 2.5pt;
		margin-top: 40pt;
	}
	.welcome-card-image{
		width: 100%;
		height: 64%;
		background: #455A64;
	}
</style>

<div style="background: #ECEFF1; width: 100%;">
	<div style="width: 100%; background-image: linear-gradient(80deg, #37474F 0%, #40535D 100%);">
		<div class="fixed-width" style="height: 360pt; background: none;">
			<img style="height: 78%; margin-top: 42pt;" src="{{asset('images/illustrations/high-five.svg')}}">
			<div style="height: 78%; margin-top: 24pt; float: right; width: 28%;">
				<p style="color: #fff; font-size: 23pt; font-weight: bold;">Learn, identify & gear up</p>
				    <div class="panel-body" style="margin-top: -2pt;">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input style="margin-bottom: 4pt; height: 36pt; background: #455A64; color: #fff; border: none; border-radius: 2pt;" id="name" type="text" class="form-control" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input style="margin-bottom: 4pt; height: 36pt; background: #455A64; color: #fff; border: none; border-radius: 2pt;" id="email" placeholder="E-mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input style="margin-bottom: 4pt; height: 36pt; color: #fff; background: #455A64; border: none; border-radius: 2pt;" placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">

                                <input placeholder="Confirm Password" style="margin-bottom: 4pt; height: 36pt; background: #455A64; color: #fff; border: none; border-radius: 2pt;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div style="margin-top: 5pt;">
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
	<div class="fixed-width" style="height: 110pt; text-align: center; margin-top: 30pt;">
		<a href="{{route('learn/index')}}" class="dynamic-shadow" style="border-left: 5pt solid #607D8B; height: 100%; width: 320pt; background: #ECEFF1; display: inline-block; float: left; border-radius: 2pt;">
			<div style="margin-left: 25pt; margin-top: 8pt; text-align: left; color: #607D8B;">
				<p style="font-weight: bold; font-size: 22pt;">Learn</p>
				<p style="font-size: 12pt; margin-top: -4pt;">Learn what you need. Browse dozens of articles, free for educational use.</p>
			</div>
		</a>
		<a href="{{route('identify/index')}}" class="dynamic-shadow" style="border-left: 5pt solid #607D8B; height: 100%; width: 320pt; background: #ECEFF1; display: inline-block; border-radius: 2pt;">
			<div style="margin-left: 25pt; margin-top: 8pt; text-align: left; color: #607D8B;">
				<p style="font-weight: bold; font-size: 22pt;">Identify</p>
				<p style="font-size: 12pt; margin-top: -4pt;">Use our top notch identification tool to id your sample and learn about them.</p>
			</div>
		</a>
		<a href="{{route('store/index')}}" class="dynamic-shadow" style="border-left: 5pt solid #607D8B; height: 100%; width: 320pt; background: #ECEFF1; display: inline-block; float: right; border-radius: 2pt;">
			<div style="margin-left: 25pt; margin-top: 8pt; text-align: left; color: #607D8B;">
				<p style="font-weight: bold; font-size: 22pt;">Store</p>
				<p style="font-size: 12pt; margin-top: -4pt;">Need anything related to geology? Buy it at our store!</p>
			</div>
		</a>
	</div>
	<div class="fixed-width" style="margin-top: 13.5%; margin-bottom: 15%; color: #607D8B;">
		<div style="width: 520pt; display: inline-block;">
			<p style="font-size: 30pt; font-weight: bold;">FAQ</p>
			<div style="line-height: 32pt; font-weight: bold; font-size: 16pt;">
				<p><img src="{{asset('images/right-arrow-dark.svg')}}" style="height: 24pt;"> Can I use photos and pages from learn.whatrock.org?</p>
				<p><img src="{{asset('images/right-arrow-dark.svg')}}" style="height: 24pt;"> How does identify.whatrock.org work?</p>
				<p><img src="{{asset('images/right-arrow-dark.svg')}}" style="height: 24pt;"> I couldn't identify my rock. What can I do?</p>
				<p><img src="{{asset('images/right-arrow-dark.svg')}}" style="height: 24pt;"> How is information validated?</p>
				<p><img src="{{asset('images/right-arrow-dark.svg')}}" style="height: 24pt;"> How is WhatRock different from Wikipedia?</p>
			</div>
		</div>
		<img style="height: 180pt; display: inline-block; float: right; transform: rotate(12deg);" src="{{asset('images/illustrations/faq.svg')}}">
	</div>
	<div class="fixed-width" style="height: 400pt; margin-bottom: 15%;">
		<img style="display: inline-block; float: left; height: 100%;" src="{{asset('images/illustrations/phone.svg')}}">
		<div style="display: inline-block; width: 60%; float: right; text-align: right;">
			<p style="font-weight: bold; font-size: 28pt; color: #607D8B;">Download the Mobile App!</p>
			<p style="font-size: 14pt; color: #607D8B; line-height: 28pt; font-weight: bold;">Our mobile app is currently in development. Soon, you should be able to identify rocks and minerals at lightning speed, and contribute to the rock and mineral database.</p>
			<img style="height: 54pt; margin-right: 6pt;" src="{{asset('images/google-play-badge.png')}}">
			<img style="margin-right: -9pt; height: 36.75pt;" src="{{asset('images/apple-badge.svg')}}">
		</div>
	</div>
</div>
<a href="{{route('about')}}">
	<button class="med-shadow" style="width: 23pt; height: 23pt; border: none; position: fixed; border-radius: 50%; background: rgba(84, 110, 122, .55); right: 24pt; bottom: 23pt; color: #fff; font-weight: bold; font-size: 14.25pt;">?</button>
</a>
@include('partials.footer')
@endsection
