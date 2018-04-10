@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbothon">
            <h1>{{ $user->count() }} Registered Users</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">Recently Registered Users</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Role</th>
                                <th>Action</th>
                                <th>Destroy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ route('users.show', $user->username) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    {{ Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) }}
                                            {!! Form::select("role_id", ['1' => 'Administrator', '2' => 'Moderator', '3' => 'Contributer'], null, ['class' => 'btn btn-primary']) !!} </td>
                                        <td>{{ Form::submit("Update", ['class' => 'btn btn-success btn-xs']) }}
                                    {{ Form::close() }}
                                </td>
                                <td>
                                {{ Form::model($user, ['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) }}
                                        {{ Form::submit("Delete", ['class' => 'btn btn-danger btn-xs']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection
