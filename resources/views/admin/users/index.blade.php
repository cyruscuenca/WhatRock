@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Users<p>
			</div>
				<div style="margin-left: calc(50px + 1%); margin-right: calc(50px + 1%); margin-top: 50px;">
				<div class="table-responsive" style="font-family: 'ubuntu-l';">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Joined</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
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
			@include('partials.category-sidebar')
	</div>
@endsection