<div id="projects" class="col s12">
          <div class="tab-content">
            <h3 class="flow-text">Your Projects</h3>
            <div class="row">
                @foreach($projects as $p)
                <div class="col s4">
                    <div class="project">
                        <iframe width="250" height="141" src="https://www.youtube.com/embed/{{ $p->url }}" frameborder="0" allowfullscreen></iframe>
                        <h6 class="flow-text"><a href="{{ url('ps/'.$p->id) }}"> {{$p->title}} </a></h6>
                    </div>
                </div>
            @endforeach
            </div>
          </div>
      </div>
      <div id="upload" class="col s12">
        <div class="tab-content">
            <h3 class="flow-text">Edit:  {{ $project->title }}</h3>
            <form class="col s12" method="POST" action="{{ url('/projects/'.$project->id.'/update/') }}">
              {!! csrf_field() !!}
              @include('partials.validation')
              <div class="row">
                <div class="input-field col s12">
                  <input name="title" type="text" class="validate" value="{{ $project->title }}">
                  <label for="title">Title</label>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <select name="category">
                      <option value="" disabled {{ $project->category == '' ? 'selected' : '' }}>Choose your option</option>
                      <option value="programming" {{ $project->category == 'programming' ? 'selected' : '' }}>Programming</option>
                      <option value="design" {{ $project->category == 'design' ? 'selected' : '' }}>Design</option>
                      <option value="other" {{ $project->category == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <label>Category</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input name="url" type="text" class="validate" value="https://www.youtube.com/watch?v={{ $project->url }}">
                  <label for="url">Youtube URL</label>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <textarea name="description" class="materialize-textarea">{{ $project->description }}</textarea>
                    <label for="description">Brief description of Learning resource</label>
                  </div>
               </div>
               <div class="row">
              <button style="margin-right:10px;" type="submit" name="Upload" class="waves-effect waves-light btn col s2 offset-s7">Save</a>
              <button class="waves-effect waves-light btn col s2">Delete</a>
                </div>
            </form>
        </div>
      </div>

      <div id="settings" class="col s12">
        <div class="tab-content">
          <h3 class="flow-text">Update Your Profile</h3>
          @include('partials.validation')
          <form class="col s12" method="POST" action="{{ url('dashboard/update') }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="row">
              <div class="input-field col s12">
                <input name="name" type="text" class="validate" value = "{{ $user->name }}" required>
                <label for="first_name">Full Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="username" type="text" class="validate" value="{{ $user->username }}">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="email" type="email" class="validate" value="{{ $user->email }}" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="bio" class="materialize-textarea">{{$user->bio}}</textarea>
                <label for="bio">Bio</label>
              </div>
            </div>
            <div class="row"><!--
              <button class="waves-effect waves-light btn col s2 offset-s8"><i class="material-icons left">cancel</i>Cancel</a> -->
              <button type="submit" class="waves-effect waves-light btn col s2 offset-s10">Save</a>
            </div>
          </form>
        </div>
      </div>