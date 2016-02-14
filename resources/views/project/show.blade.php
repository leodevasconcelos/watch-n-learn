@extends('layouts.master')

@section('content')
    <div class="theatre">
        <div class="container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $project->url }}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
@endsection
