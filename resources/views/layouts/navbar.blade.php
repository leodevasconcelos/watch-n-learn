<ul id="authdropdown" class="dropdown-content">
    <li><a href="{{ url('/profile') }}">Dashboard</a></li>
    <li class="divider"></li>
    <li><a href="#">Settings</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>

<nav class="white learn-nav" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">watch n learn</a>
        <ul class="right hide-on-med-and-down">
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
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>