@extends('layouts.master')

@section('content')
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="/images/desk.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white-text">Watch n Learn Anything!</h3>
         <a class="btn btn-large blue-grey darken-4" href="{{ url('/auth/register') }}">Get Started</a>
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
                <div class="col l3 m4 s6">
                    <div class="project section">
                        <a href="{{ url('projects/'.$project->id) }}"><img width="225" height="127" src="http://img.youtube.com/vi/{{ $project->url }}/0.jpg"></a>
                        <h6 class="flow-text"><a href="{{ url('projects/'.$project->id) }}"> {{$project->title}} </a></h6>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="center">{!! $projects->links() !!}</div>
            <div class="divider"></div>
        </div>
  </div>
@endsection
