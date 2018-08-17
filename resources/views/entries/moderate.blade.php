@extends('layouts.app')
@section('content')
@include('partials.dashrow')
<table style="margin-top: 60px;" class="table table-striped fixed-width">
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
								<td>{{ $entry->title }}</td>
								<td>{{ str_limit($entry->body, 110) }}</td>
								<td>
									@if ($entry->status == 0)
										Draft
									@elseif ($entry->status == 1)
										Submitted
									@elseif ($entry->status == 2)
										Approved
									@elseif ($entry->status == 3)
										Denied
									@else
										ERR: Invalid $entry->status
									@endif
								</td>
								<td>
									{{ Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@publish', $entry->id]]) }}
									{!! Form::select("status", ['0' => 'Draft', '1' => 'Submitted', '2' => 'Approved', '3' => 'Denied'], null, ['class' => 'btn btn-primary']) !!}
								</td>
								<td>
									{{ Form::submit("Submit", ['class' => 'btn btn-primary']) }}
										
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
						</tr>
					</tbody>
</table>
@endsection