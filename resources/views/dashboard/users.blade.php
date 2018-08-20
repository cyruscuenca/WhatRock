@extends('layouts.app')
@section('content')
<style type="text/css">
div {}
.bg-dark { background: black }
.bg-light { background: pink }

.light {  color: #000;}
.dark {  color: #fff;}

</style>
<div style="background:linear-gradient(rgba(207, 216, 220, 1),rgba(207, 216, 220, 0.15)),url({{asset('images/slider/blue-sky.jpg')}}); background-size: cover; background-position: top; width: 100%;">
	<div class="fixed-width" style="height: 240pt;">
		<div style="width: 100%; padding-top: 22pt;">
			<p style="margin-top: -5pt; display: inline-block; font-weight: bold; font-size: 28pt; color: #455A64;">Welcome back,
				@php {{
				$name = auth()->user()->name;
				$splitName = explode(' ', $name, 2);

				$first_name = $splitName[0];
				$last_name = !empty($splitName[1]) ? $splitName[1] : '';

				echo $first_name;
			}}
		@endphp!</p>
		<button class="med-shadow" style="display: inline-block; background: #0288D1; float: right; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">SETTINGS</button>
	</div>
	<div style="width: 100%; padding-top: 110pt; font-size: 11pt;">
		<a href="{{route('entries/create')}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">CREATE AN ENTRY</button>
		</a>
		<a href="{{route('userlist')}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">YOUR ENTRIES</button>
		</a>
		<a href="{{route('userlist')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">MANAGE USERS</button>
		</a>
		<a href="{{route('dashboard')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">DASHBOARD</button>
		</a>
	</div>
</div>
</div>
<div style="height: 800pt; width: 100%;">
	<div class="fixed-width" style="margin-top: 20pt;">
		<div style="width: 100%; float: left; display: inline-block;">
			<p style="font-size: 15pt; font-weight: bold; color: #455A64;">Users</p>
			<div style="border-radius: 2pt; width: 100%; height: 500pt; background: rgba(207,216,220,1);">
				<div class="table-responsive" style="width: 95%; margin: 0 auto; color: #37474F;">
					<table class="table table-striped" style="margin-top: 10pt;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Joined</th>
								<th style="padding-left: 6%;">Role</th>
								<th style="padding-left: 6%;">Perform Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								@foreach($users as $user)
								<tr>
									<td><a href="{{route('users/show', $user->slug)}}">{{ $user->name }}</a></td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->created_at->diffForHumans() }}</td>
									<td>
										{{ Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) }}
										{!! Form::select("role_id", ['1' => 'Administrator', '2' => 'Moderator', '3' => 'Contributer'], null, ['class' => 'btn btn-primary']) !!}
									</td>
									<td>
										{{ Form::submit("Update", ['class' => 'btn btn-primary']) }}

										{{ Form::close() }}
									</td>
								</tr>
								@endforeach
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>

<script type="text/javascript"
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
</script>
@include('partials.footer')
@endsection
