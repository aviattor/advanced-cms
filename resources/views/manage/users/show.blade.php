@extends('layouts.manage')

@section('content')
    <div class="flex-container">

        <div class="card m-t-50">
            <header class="card-header">
                <p class="card-header-title">
                    User Details
                </p>

            </header>
            <div class="card-content">
                <div class="columns m-t-10">
                    <div class="column">

                        <h1 class="title">{{ $user->name }}</h1>


                        <small><strong>Email Address:</strong></small>
                        <h2>{{ $user->email }}</h2>

                        <small><strong>Created:</strong></small>
                        <h2>{{ $user->created_at->toFormattedDateString() }}</h2>

                    </div>

                    <div class="column">
                        <a href="{{ route('users.edit', $user->id) }}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus"></i>Edit User</a>
                    </div>
                </div>



            </div>

        </div>

    </div>
@endsection