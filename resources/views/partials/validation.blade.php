@if (count($errors) > 0)
    <ul class="card-panel red lighten-2">
        @foreach($errors->all() as $error)
            <li class="white-text text-darken-2">{{ $error }}</li>
        @endforeach
    </ul>
@endif