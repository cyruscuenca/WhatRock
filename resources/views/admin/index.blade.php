@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Admin Dashboard<p>
			</div>
			<div style="width: 100%; height: auto; display: block; margin-top: 38px; padding-left: 50px;">
				<a href="{{ url('/entries/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; border-radius: 0 0 0 0; margin-left: 1.3%; margin-top: 10px;">Create an Entry</button></a>
				<a href="{{ url('/entries/trash') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Trashed Entries</button></a>
				<a href="{{ url('/categories/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Create a Category</button></a>
				<a href="{{ url('/categories/') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit a Category</button></a>
				<a href="{{ url('/questions/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Add a Question</button></a>
				<a href="{{ url('/questions/edit') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit a Question</button></a>
				<a href="{{ url('/questions/edit') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit Sequence</button></a>
			</div>
			<div class="numbers-container">
				<p>Total Entries: 3,026</p> <p>Total Users: 248</p> <p>Total Views: 143,334</p>
			</div>

			<div style="margin-left: calc(50px + 1%); margin-right: calc(50px + 1%); margin-top: 70px;">
				<h3 style="padding-bottom: 10px; margin-left: 2px; font-family: 'ubuntu-l';">Submitted Entries</h3>
				<div class="table-responsive" style="font-family: 'ubuntu-l'; font-weight: lighter;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Entry Title</th>
								<th>Entry Content</th>
								<th>Status</th>
								<th>Settings</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							@foreach($entry as $entry)
							<tr>
								<th>{{ $entry->title }}</th>
								<th>{{ str_limit($entry->body, 110) }}</th>
								<th>{{ $entry->status == 0 ? "Draft" : "Published"}}</th>
								<th>
									{{ Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@publish', $entry->id]]) }}
										{{ Form::submit("Publish", ['class' => 'btn btn-primary']) }}
									{{ Form::close() }}
								</th>
							</tr>
							@endforeach
						</tr>
					</tbody>
					</table>
				</div>
			</div>

		</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>
					Users
					</p>
				</div>
			</div>
	</div>
@endsection