<div id="favorites" class="col s12">
    <div class="tab-content">
        <h3 class="flow-text">Your Favorites</h3>
        <div class="row section">
        @foreach($favorites as $favorite)
            <div class="col s4">
                <div class="project">
                <iframe width="225" height="127" src="https://www.youtube.com/embed/{{ $favorite->url }}" frameborder="0" allowfullscreen></iframe>
                <h6 class="flow-text"><a href="{{ url('projects/'.$favorite->id) }}"> {{$favorite->title}} </a></h6>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>