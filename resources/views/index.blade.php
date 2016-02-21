@extends('layouts.master')

@section('content')
    <div class="parallax-container">
        <div class="parallax">
            <img src="/images/desk.jpeg">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="flow-text">Go from Zero to One, by watching n learning</h2>
            <div class="divider"></div>
            <div class="row">
            @foreach($projects as $project)
                <div class="col l3 m4 s6">
                    <div class="project section">
                        <iframe width="225" height="127" src="https://www.youtube.com/embed/{{ $project->url }}" frameborder="0" allowfullscreen></iframe>
                        <h6 class="flow-text"><a href="{{ url('projects/'.$project->id) }}"> {{$project->title}} </a></h6>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="divider"></div>
        </div>
  </div>
@endsection
