@include('partials.projects')
@include('partials.favorites')
<div id="upload" class="col s12">
    <div class="tab-content">
        <h3 class="flow-text">Upload a Learning resource</h3>
        @include('partials.validation')
        <form class="col s12" method="POST" action="{{ url('projects') }}">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12">
                    <input name="title" type="text" class="validate" value="{{ old('title') }}">
                    <label for="title">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select name="category">
                        <option value="" disabled {{ old('category') == '' ? 'selected' : '' }}>Choose your option</option>
                        <option value="programming" {{ old('category') == 'programming' ? 'selected' : '' }}>Programming</option>
                        <option value="design" {{ old('category') == 'design' ? 'selected' : '' }}>Design</option>
                        <option value="devops" {{ old('category') == 'devops' ? 'selected' : '' }}>DevOps</option>
                        <option value="testing" {{ old('category') == 'testing' ? 'selected' : '' }}>Testing</option>
                        <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <label>Category</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="url" type="text" class="validate" value="{{ old('url') }}">
                    <label for="url">Youtube URL</label>
                </div>
            </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="description" class="materialize-textarea">{{ old('description') }}</textarea>
                        <label for="description">Brief description of Learning resource</label>
                    </div>
               </div>
            <div class="row">
                <button type="submit" name="Upload" class="waves-effect waves-light btn col s2 offset-s10">Upload</a>
            </div>
        </form>
    </div>
</div>
@include('partials.profile')
