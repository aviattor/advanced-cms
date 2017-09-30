@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Forgot Password</h1>

                    <form action="{{ route('password.email') }}" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <div class="control">
                                <input
                                        required
                                        class="input {{$errors->has('email') ? 'is-danger': ''}}"
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}">
                            </div>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-fullwidth m-t-30">Send Password Reset Link</button>

                    </form>
                </div>
            </div>

            <h5 class="has-text-centered m-t-20">
                <a href="{{ route('login') }}" class="is-muted"><i class="fa fa-caret-left"></i> Back to Login</a>
            </h5>

        </div>
    </div>

@endsection
