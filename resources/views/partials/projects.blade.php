<div id="projects" class="col s12">
    <div class="tab-content">
        @if($projects->count() > 0)
        <h3 class="flow-text">Your Projects</h3>
        @else
        <h3 class="flow-text">No projects uploaded yet.</h3>
        @endif
        <div class="row section">
        @foreach($projects as $p)
            <div class="col l4 m6 s12">
                <div class="card small" data-id="{{ $p->id }}">
                        <div class="card-image">
                          <img src="http://img.youtube.com/vi/{{ $p->url }}/0.jpg">                        </div>
                        <div class="card-content">
                          <p class="flow-text">{{ $p->title}}</p>
                        </div>
                        <div class="card-action right">
                          {{ $p->favorites()->count() }} <i class="fa fa-heart"></i>
                          {{ $p->comments()->count() }} <i class="fa fa-comment"></i>
                        </div>
                      </div>
            </div>
        @endforeach
        </div>
        <div class="center">{!! $projects->links() !!}</div>
  </div>
</div>