<div id="projects" class="col s12">
    <div class="tab-content">
        @if($projects->count() > 0)
        <h3 class="flow-text">Your Projects</h3>
        @else
        <h3 class="flow-text">No projects uploaded yet.</h3>
        @endif
        <div class="row section">
        @foreach($projects as $p)
            <div class="col l4 m6 s6">
                <div class="project section">
                    <a href="{{ url('projects/'.$p->id) }}"><img width="225" height="127" src="http://img.youtube.com/vi/{{ $p->url }}/0.jpg"></a>
                    <h6 class="flow-text"><a href="{{ url('projects/'.$p->id) }}"> {{$p->title}} </a></h6>
                </div>
            </div>
        @endforeach
        </div>
        <div class="center">{!! $projects->links() !!}</div>
  </div>
</div>