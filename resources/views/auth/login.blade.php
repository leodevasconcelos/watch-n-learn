@extends('layouts.master')

@section('content')
        <div class="center">
        <div class="row forms z-depth-1">
         <h2>Login</h2>
        @include('partials.validation')
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
                    <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="row">Or login with</div>
                @include('partials.oauth')
            </form>
        </div>
    </div>

@endsection
