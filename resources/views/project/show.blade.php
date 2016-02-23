@extends('layouts.master')

@section('content')
    <div class="theatre">
        <div class="container">
            <div class="player">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $project->url }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col s9">
                    <h1 class="flow-text"><blockquote>{{ $project->title }} <small>by <a href="{{ url('/profile/'.$project->user->id) }}">{{ $project->user->name }}</a></small></blockquote> </h1>
                    <p>{{ $project->description }}</p>
                    <blockquote>{{ $project->category}}</blockquote></h1>
                </div>
                 <h1 class="flow-text col s1"><span id="favoriteCount">{{ $favorites }}</span>  <a href="#" id="favorite" class="{{ $project->checkFavorite() ? 'fav' : 'unfav' }}" ><i class="small material-icons">grade</i></a></h1>
                <h1 class="flow-text col s1"><span id="commentCount">{{ count($comments) }} </span><i class="small material-icons">comment</i></h1>
                @if(!Auth::guest())
                    @if ($project->user->id == Auth::user()->id)
                    <h1 class="flow-text col s1"><a class="btn blue-grey darken-4" href="{{ url('/projects/'.$project->id.'/edit') }}">EDIT</a></h1>
                    @endif
                @endif
            </div>
            <div class="comments">
                <h2 class="flow-text">Comments</h2>
                <div class="comments-list">
                    @foreach($comments as $comment)
                    <div class="comment-view z-depth-1">
                    <div class="row">
                        <span class="col s10">
                            <h5><a href="{{ url('/profile/'.$comment->user->id) }}">{{ $comment->user->name }}</a></h5>
                        </span>
                        <span class="col s2">
                            {{ $comment->created_at->diffForHumans()}}
                        </span>
                    </div>
                        <p>{{ $comment->comment }}</p>
                    </div>
                    @endforeach
                </div>
                @if(!Auth::guest())
                <div class="input-field col s12 comment">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <textarea id="comment" name="comment" data-id="{{ $project->id }}" class="materialize-textarea"></textarea>
                    <label for="description">Add your comment</label>
                </div>
                @else
                <p class="flow-text"><a href="{{ url('/login') }}">Login</a> to comment</p>
                @endif
            </div>
    </div>
@endsection
