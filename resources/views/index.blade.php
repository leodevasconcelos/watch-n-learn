@extends('layouts.master')

@section('content')
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="/images/desk.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white-text">Watch n Learn Anything!</h3>
         @if(Auth::guest())
            <a class="btn btn-large blue-grey darken-4" href="{{ url('/auth/register') }}">Get Started</a>
        @else
            <h5 class="light grey-text text-lighten-3">Go to your dashboard to add videos.</h5>
        @endif
        </div>
      </li>
      <li>
        <img src="/images/desk3.jpeg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Browse through technical resources</h3>
          <h5 class="light grey-text text-lighten-3">Find exaclty what you want to learn</h5>
        </div>
      </li>
      <li>
        <img src="/images/desk5.jpeg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Get organised as you learn</h3>
          @if (Auth::guest())
          <h5 class="light grey-text text-lighten-3">Create an account to add n favorite vidoes.</h5>
          @else
          <h5 class="light grey-text text-lighten-3">Favorite videos when you view them.</h5>
          @endif
        </div>
      </li>

    </ul>
  </div>
    <div class="section white">
        <div class="row container">
            <h3 class="flow-text blue-grey-text">Latest vidoes</h3>
            <div class="divider"></div>
            <div class="row">
            @foreach($projects as $project)
                <div class="col l3 m6 s12">
                    <div class="card small" data-id="{{ $project->id }}">
                        <div class="card-image">
                          <img src="http://img.youtube.com/vi/{{ $project->url }}/0.jpg">                        </div>
                        <div class="card-content">
                          <p class="flow-text">{{ $project->title}}</p>
                        </div>
                        <div class="card-action right">
                          {{ $project->favorites()->count() }} <i class="fa fa-heart"></i>
                          {{ $project->comments()->count() }} <i class="fa fa-comment"></i>
                        </div>
                      </div>
                                    </div>
            @endforeach
            </div>
            <div class="center">{!! $projects->links() !!}</div>
            <div class="divider"></div>
        </div>
  </div>
@endsection
