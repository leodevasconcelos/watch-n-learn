<div class="col s3">
  <div class="prof-image-div">
    <img class="z-depth-1 profile-image" src="{{ $user->getAvatar() }}" alt="">
    @if(Auth::user()->id == $user->id)
    <form id="profileImageForm" name="profileImageForm" method="POST" action="{{ url('/dashboard/updatePic') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="file" name="image" id="image" style="display:none;">
    </form>
    <a href="#" id="changeProfPic">Change you profile pic</a>
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