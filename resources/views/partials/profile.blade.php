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
            <div class="row">
              <button type="submit" class="waves-effect waves-light btn col s2 offset-s10">Save</button>
            </div>
        </form>
    </div>
</div>
