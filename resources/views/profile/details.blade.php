<div class="col s3">
      <div class="prof-image-div">
        <img class="z-depth-1 profile-image" src="{{ $user->avatar }}" alt="">
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