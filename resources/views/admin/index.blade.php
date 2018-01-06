@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Admin Dashboard<p>
			</div>
			<div style="width: 100%; height: auto; display: block; margin-top: 38px; padding-left: 50px;">
				<a href="{{ url('/entry/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; border-radius: 0 0 0 0; margin-left: 1.3%; margin-top: 10px;">Create an Entry</button></a>
				<a href="{{ url('/entry/trash') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Trashed Entries</button></a>
				<a href="{{ url('/category/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Create a Category</button></a>
				<a href="{{ url('/category/edit') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit a Category</button></a>
				<a href="{{ url('/questions/create') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Add a Question</button></a>
				<a href="{{ url('/questions/edit') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit a Question</button></a>
				<a href="{{ url('/questions/edit') }}"><button class="btn btn-primary" style="color: grey; background: #fff; border: 1px solid #ccc; margin-left: 1.3%; border-radius: 0 0 0 0; margin-top: 10px;">Edit Sequence</button></a>
			</div>
			<div class="numbers-container">
				<p>Total Entries: 3,026</p> <p>Total Users: 248</p> <p>Total Views: 143,334</p>
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