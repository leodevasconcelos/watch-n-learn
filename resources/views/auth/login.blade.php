@extends('layouts.master')

@section('content')
    <div class="center">
        <h2>Login</h2>
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                    <a href="{{ url('/password/reset') }}">&nbsp;&nbsp;Forgot Your Password?</a>
                </div>
            </form>
        </div>
    </div>

@endsection
