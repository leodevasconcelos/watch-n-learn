@extends('layouts.master')
@section('content')
  <div class="container row content">
    @include('profile.details')
    <div class="col s9 row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#projects" class="active">Projects</a></li>
          <li class="tab col s3"><a href="#favorites">Favorites</a></li>
        </ul>
      </div>
      @include('partials.projects')
      @include('partials.favorites')
    </div>
  </div>
@stop