@extends('layouts.master')
@section('content')
  <div class="container row content">
    <div class="col s3">
      <div class="prof-image-div">
        <img class="z-depth-1 profile-image" src="{{ $user->avatar }}" alt="">
      </div>
      <div class="details">
          <div>
            <span class="username flow-text">{{ $user->username }}</span>
          </div>
          <div>
            <span class="name flow-text">{{ $user->name }}</span>
          </div>
          <div>
            <p class="bio flow-text">{{ $user->bio }}</p>
          </div>
      </div>
    </div>
    <div class="col s9 row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#projects">Projects</a></li>
          <li class="tab col s3"><a href="#upload">Upload New Project</a></li>
          <li class="tab col s3"><a href="#settings" class="active">Profile Settings</a></li>
        </ul>
      </div>
      <div id="projects" class="col s12">Projects</div>
      <div id="upload" class="col s12">Upload a project</div>
      <div id="settings" class="col s12">
        <div class="tab-content">
          <h3 class="flow-text">Update Your Profile</h3>
          @include('partials.validation')
          <form class="col s12" method="POST" action="{{ url('profile/update') }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="row">
              <div class="input-field col s12">
                <input name="name" type="text" class="validate" value = "{{ $user->name }}" required>
                <label for="first_name">Full Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="username" type="text" class="validate" value="{{ $user->username }}">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="email" type="email" class="validate" value="{{ $user->email }}" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="bio" class="materialize-textarea">{{$user->bio}}</textarea>
                <label for="bio">Bio</label>
              </div>
            </div>
            <div class="row"><!--
              <button class="waves-effect waves-light btn col s2 offset-s8"><i class="material-icons left">cancel</i>Cancel</a> -->
              <button type="submit" class="waves-effect waves-light btn col s2 offset-s10"><i class="material-icons left">save</i>Save</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop