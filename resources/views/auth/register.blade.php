@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Register</h1>

                    <form action="{{ route('register') }}" method="post" role="form">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="name" class="label">Name</label>
                            <div class="control">
                                <input
                                        required
                                        class="input {{$errors->has('name') ? 'is-danger': ''}}"
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}">
                            </div>
                            @if($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>


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

                        <div class="columns">

                            <div class="column">
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input
                                                required
                                                class="input {{$errors->has('password') ? 'is-danger': ''}}"
                                                type="password"
                                                id="password"
                                                name="password">
                                    </div>
                                    @if($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif

                                </div>

                            </div>

                            <div class="column">
                                <div class="field">
                                    <label for="password_confirmation" class="label">Confirm Password</label>
                                    <div class="control">
                                        <input
                                                required
                                                class="input {{$errors->has('password_confirmation') ? 'is-danger': ''}}"
                                                type="password"
                                                id="password_confirmation"
                                                name="password_confirmation">
                                    </div>

                                </div>

                            </div>
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>

                    </form>
                </div>
            </div>

            <h5 class="has-text-centered m-t-20">
                <a href="{{ route('login') }}" class="is-muted">Already have an account?</a>
            </h5>

        </div>
    </div>

@endsection
