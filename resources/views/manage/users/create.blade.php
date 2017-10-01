@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Create New User</h1>

            </div>

        </div>

        <hr>

        <div class="columns">
            <div class="column">
                <form action="{{ route('users.store') }}" method="post" role="form" class="form">
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


                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                            <input
                                    :disabled="auto_password"
                                    required
                                    class="input {{$errors->has('password') ? 'is-danger': ''}}"
                                    type="password"
                                    id="password"
                                    placeholder="Manually give password to user"
                                    name="password">

                            <b-checkbox
                                    name="auto_generate"
                                    class="m-t-10"
                                    v-model="auto_password">Auto Generate Password</b-checkbox>
                        </div>

                        @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif

                    </div>

                    <button class="button is-primary is-fullwidth m-t-30">Create User</button>

                </form>


            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                auto_password: true,
            }
        });

    </script>

@endsection