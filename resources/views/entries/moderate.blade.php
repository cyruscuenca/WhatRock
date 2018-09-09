@extends('layouts.app')
@section('content')
<style type="text/css">
	.settings-menu ul li:nth-child(4) {
		border-right: 5px solid #0288D1;
	}
</style>
@include('partials.admin-menu')
<div class="fixed-width">
	<div style="width: calc(100% - 200pt); float: right;">
	<table style="margin-top: 60px;" class="table table-striped fixed-width">
							<thead>
								<tr>
									<th>Title</th>
									<th>Body</th>
									<th>Status</th>
									<th>Settings</th>
								</tr>
							</thead>
						<tbody>
							<tr>
								@foreach($entry->where('status', 0) as $entry)
								<tr>
									<td>{{ $entry->title }}</td>
									<td>{{ str_limit($entry->body, 100) }}</td>
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
	</div>
</div>
@endsection
