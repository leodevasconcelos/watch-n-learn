<div id="favorites" class="col s12">
    <div class="tab-content">
        @if($favorites->count() == 0)
        <h3 class="flow-text">No favorites made yet.</h3>
        @endif
        <div class="row section">
        @foreach($favorites as $favorite)
            <div class="col l4 m6 s12 ">
                <div class="card small" data-id="{{ $favorite->id }}">
                        <div class="card-image">
                          <img src="http://img.youtube.com/vi/{{ $favorite->url }}/0.jpg">                        </div>
                        <div class="card-content">
                          <p class="flow-text">{{ $favorite->title}}</p>
                        </div>
                        <div class="card-action right">
                          {{ $favorite->favorites()->count() }} <i class="fa fa-heart"></i>
                          {{ $favorite->comments()->count() }} <i class="fa fa-comment"></i>
                        </div>
                    </div>
            </div>
        @endforeach
        </div>
    </div>
</div>