<div class="col l3 m6 s12">
  <div class="prof-image-div">
    <img class="z-depth-1 profile-image" src="{{ $user->getAvatar() }}" alt="">
    @if(! Auth::guest())
        @if(Auth::user()->id == $user->id)
        <form id="profileImageForm" name="profileImageForm" method="POST" action="{{ url('/dashboard/updatePic') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="file" name="image" id="image" style="display:none;">
        </form>
    <a href="#" id="changeProfPic">Change your profile pic</a>
    @endif
    @endif
  </div>
  <div class="details">
      <div>
        <span class="username flow-text">{{ $user->username }}</span>
      </div>
      <div>
        <span class="name flow-text">{{ $user->name }}</span>
      </div>
      <div>
        <p class="bio flow-text">{{ $user->bio }}</p>
      </div>
  </div>
</div>