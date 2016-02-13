@extends('layouts.master')

@section('content')
    <div class="center">
        <h2>Register</h2>
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="input-field col s12">
                      <input type="text" name="name" class="validate" value="{{ old('name') }}">
                      <label for="name">Full Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input type="text" name="username" class="validate" value="{{ old('username') }}">
                      <label for="name">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input type="email" name="email" class="validate" value="{{ old('email') }}">
                      <label for="email">Email Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input type="password" name="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input type="password" name="password_confirmation" class="validate">
                      <label for="password">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Register
                        <i class="material-icons right">send</i>
                    </button>
                    <a href="{{ url('/login') }}">&nbsp;&nbsp;Already have an account? Login</a>
                </div>
                <div class="row">Or register with</div>
                @include('partials.oauth')
            </form>
        </div>
    </div>
@endsection