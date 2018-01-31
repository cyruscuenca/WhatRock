@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Admin Dashboard<p>
			</div>
			<div style="width: 100%; height: auto; display: inline-block; margin-top: 39px">
				<button class="btn btn-primary" href="{{ url('/entry/create') }}">Create an Entry</button>
				<button class="btn btn-primary" href="{{ url('/entry/trash') }}">Trashed Entries</button>
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