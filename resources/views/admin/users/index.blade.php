@extends('layouts.app')
@section('content')
@include('partials.admin-menu')
<style type="text/css">
	.settings-menu ul li:nth-child(5) {
		border-right: 5px solid #0288D1;
	}
</style>
<div style="height: 800pt; width: 100%;">
	<div class="fixed-width" style="margin-top: 20pt;">
		<div style="width: calc(100% - 200pt); float: right;">
		<div style="width: 100%; float: left; display: inline-block;">
			<p style="font-size: 15pt; font-weight: bold; color: #424242;">Users</p>
			<div style="border-radius: 2pt; width: 100%; height: 500pt; background: #BDBDBD;">
				<div class="table-responsive" style="width: 95%; margin: 0 auto; color: #37474F;">
					<table class="table" style="margin-top: 10pt;">
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
									<td><a href="{{route('users/show', $user->slug)}}">{{ $user->first_name . ' ' . $user->last_name }}</a></td>
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
@endsection