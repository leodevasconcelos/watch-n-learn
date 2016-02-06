@extends('layouts.master')

<!-- Main Content -->
@section('content')
    <div class="center">
        <h2>Forgot Password</h2>
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Send Password Reset Link
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
