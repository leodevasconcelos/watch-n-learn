@extends('layouts.master')

@section('content')
    <div class="parallax-container">
    <div class="parallax">
        <img src="/images/desk.jpeg">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eos eaque atque voluptatum voluptatem cumque beatae, facilis doloremque mollitia reiciendis nulla harum ipsa officia temporibus odio cum tempora quos modi!</h1>
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="flow-text">Go from Zero to One, by watching n learning</h2>
       <div class="row">
            @foreach($projects as $project)
            <div class="col s3">
                <div class="project">
                    <iframe width="250" height="141" src="https://www.youtube.com/embed/{{ $project->url }}" frameborder="0" allowfullscreen></iframe>
                    <h6 class="flow-text"><a href="#"> {{$project->title}} </a></h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
@endsection
