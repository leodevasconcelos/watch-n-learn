@extends('layouts.master')
@section('content')
  <div class="container row content">
    <div class="col s3">
      <div class="prof-image-div">
        <img class="z-depth-1" src="http://placehold.it/250x250" alt="">
      </div>
      <div class="details">
          <div>
            <span class="username flow-text">gangachris</span>
          </div>
          <div>
            <span class="name flow-text">Ganga Christopher</span>
          </div>
          <div>
            <p class="bio flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, quas, quae! Quis sapiente quia ipsum error beatae culpa fuga minima qui, aut nisi. Inventore dolorum saepe amet vero dicta veniam.</p>
          </div>
      </div>
    </div>
    <div class="col s9 row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#projects" class="active">Projects</a></li>
          <li class="tab col s3"><a href="#upload">Upload New Project</a></li>
          <li class="tab col s3"><a href="#settings">Profile Settings</a></li>
        </ul>
      </div>
      <div id="projects" class="col s12">Projects</div>
      <div id="upload" class="col s12">Upload a project</div>
      <div id="settings" class="col s12">Profile Settings</div>
    </div>
  </div>
@stop