@extends('layouts.master')

@section('content')
    <h1>Hello {{ Auth::user()->username }}</h1>
@endsection
