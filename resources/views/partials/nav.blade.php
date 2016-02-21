@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <li>
        <a class="dropdown-button" data-activates="authdropdown" href="#!">
            {{ Auth::user()->name }}
            <i class="material-icons right">arrow_drop_down</i>
        </a>
    </li>
@endif