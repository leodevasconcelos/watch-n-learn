@extends('layouts.master')
@section('content')
  <div class="container row content">
    @include('profile.details')
    <div class="col s9 row">
      <div class="col s12">
        <ul class="tabs blue-grey darken-4">
          <li class="tab col s3"><a href="#projects" class="white-text">Projects</a></li>
          <li class="tab col s3"><a href="#favorites" class="white-text">Favorites</a></li>
          <li class="tab col s3"><a href="#upload" class="white-text">Upload</a></li>
          <li class="tab col s3"><a href="#settings" class="active white-text">Profile</a></li>
        </ul>
      </div>
      @include('profile.tabcontent')
    </div>
  </div>
@stop