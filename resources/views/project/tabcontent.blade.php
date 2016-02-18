@include('partials.projects')
@include('partials.favorites')
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
@include('partials.profile')