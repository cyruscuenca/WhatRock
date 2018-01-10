@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Deleted Entries<p>
			</div>
			<div style="width: 96%; height: 100%; display: inline-block; margin: 0 2% 0 2%; ">
			@foreach ($deletedEntries as $entry)
				<article style=" display: block; width: 32%; height: auto; border-radius: 3px 3px 3px 3px; border: 1px solid #E253A3; margin-left: 1%; margin-right: 1.5%; margin-top: 50px;">
					<div style=" display: flex; background-image: linear-gradient( -160deg, #ED5AA2 10%, #bb39a7 100%); width: 100%; font-size: 18pt; border-bottom: 1px solid #E253A3; padding: 15px;">{{ $entry->title }}</div>
					<p style="margin: 15px;">{{ $entry->body }}</p>
					{!! Form::open(['method'=> 'GET', 'action' => ['EntryController@restore', $entry->id]]) !!}
							<div class="form-group">
								{!! Form::submit('Restore Entry', ['class' => 'btn btn-primary']) !!}
							</div>
					{!! Form::close() !!}

					{!! Form::open(['method'=> 'DELETE', 'action' => ['EntryController@destroy', $entry->id]]) !!}
							<div class="form-group">
								{!! Form::submit('Delete Entry', ['class' => 'btn btn-danger']) !!}
							</div>
					{!! Form::close() !!}

				</article>
			@endforeach
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