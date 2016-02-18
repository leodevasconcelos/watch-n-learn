<div id="projects" class="col s12">
    <div class="tab-content">
        <h3 class="flow-text">Your Projects</h3>
        <div class="row">
        @foreach($projects as $p)
            <div class="col s4">
                <div class="project">
                    <iframe width="250" height="141" src="https://www.youtube.com/embed/{{ $p->url }}" frameborder="0" allowfullscreen></iframe>
                    <h6 class="flow-text"><a href="{{ url('projects/'.$p->id) }}"> {{$p->title}} </a></h6>
                </div>
            </div>
        @endforeach
        </div>
  </div>
</div>