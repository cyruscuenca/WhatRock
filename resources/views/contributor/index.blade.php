@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Admin Dashboard<p>
			</div>
			<div style="width: 100%; height: auto; display: inline-block; margin-top: 39px">
				<a class="btn btn-primary" href="{{ url('/entries/create') }}">Create an Entry</a>
				<a class="btn btn-primary" href="{{ url('/entries/trash') }}">Trashed Entries</a>
			</div>
		</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>
					Categories
					</p>
				</div>
			</div>
	</div>
@endsection