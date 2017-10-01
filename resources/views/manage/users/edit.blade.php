@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Edit User</h1>

            </div>

        </div>

        <hr>

        <div class="columns">
            <div class="column">
                <form action="{{ route('users.update', $user->id) }}" method="post" role="form" class="form">
                    {{ method_field('PUT') }}
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
                                    value="{{ $user->name }}">
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
                                    value="{{ $user->email }}">
                        </div>
                        @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>


                    <div class="field">
                        <label for="password" class="label">Password</label>

                            <div class="block">
                                <div class="field">
                                    <b-radio v-model="password_option" native-value="keep">Do Not Change Password</b-radio>
                                </div>

                                <div class="field">
                                    <b-radio v-model="password_option" native-value="auto">Auto-Generate New Password</b-radio>
                                </div>

                                <div class="field">
                                    <b-radio v-model="password_option" native-value="manual">Manually Set New Password</b-radio>
                                </div>

                                <input type="hidden" v-model="password_option" name="password_option">



                            </div>
                        <div class="control">
                            <input
                                    v-if="password_option == 'manual'"
                                    required
                                    class="input {{$errors->has('password') ? 'is-danger': ''}}"
                                    type="password"
                                    id="password"
                                    placeholder="Manually give password to user"
                                    name="password">
                        </div>

                        @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif

                    </div>

                    <button class="button is-primary is-fullwidth m-t-30">Update User</button>

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
                password_option: 'keep',

            }
        });

    </script>

@endsection