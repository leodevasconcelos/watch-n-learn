@extends('layouts.master')

@section('content')
    <div class="theatre">
        <div class="container">
            <div class="player">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $project->url }}" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="row">
                <div class="col s10">
                    <h1 class="flow-text">{{ $project->title }}</h1>
                </div>
                <h1 class="flow-text col s1"><span id="favoritesCount">{{ $favorites }}</span>  <a href="#" id="favorite"><i class="small material-icons">grade</i></a></h1>
                <h1 class="flow-text col s1"><span id="commentCount">{{ count($comments) }} </span><i class="small material-icons">chat_bubble_outline</i></h1>
            </div>
            <div class="comments">
                <h2 class="flow-text">Comment below</h2>
                <div class="comments-list">
                    @foreach($comments as $comment)
                    <div class="comment-view z-depth-1">
                    <h5>{{ $comment->user->name }}</h5>
                    <p>{{ $comment->comment }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="input-field col s12 comment">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <textarea id="comment" data-id="{{ $project->id }}" class="materialize-textarea">{{ old('description') }}</textarea>
                    <label for="description">Add your comment</label>
                </div>
            </div>
        </div>
    </div>
@endsection
