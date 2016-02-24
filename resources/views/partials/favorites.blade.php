<div id="favorites" class="col s12">
    <div class="tab-content">
        @if($favorites->count() > 0)
        <h3 class="flow-text">Your Favorites</h3>
        @else
        <h3 class="flow-text">No favorites made yet.</h3>
        @endif
        <div class="row section">
        @foreach($favorites as $favorite)
            <div class="col s4">
                <div class="project section">
                <a href="{{ url('projects/'.$favorite->id) }}"><img width="225" height="127" src="http://img.youtube.com/vi/{{ $favorite->url }}/0.jpg"></a>
                <h6 class="flow-text"><a href="{{ url('projects/'.$favorite->id) }}"> {{$favorite->title}} </a></h6>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>