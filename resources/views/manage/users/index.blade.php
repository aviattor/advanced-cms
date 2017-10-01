@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Users</h1>

            </div>

            <div class="column">
                <a href="{{ route('users.create') }}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus"></i>Create New User</a>
            </div>
        </div>

        <hr>

        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="button is-outlilned">Edit</a>
                                <a href="{{ route('users.show', $user->id) }}" class="button is-outlilned">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
        <div class="container m-t-10" style="width: 200px">
            {{ $users->links() }}
        </div>


    </div>
@endsection