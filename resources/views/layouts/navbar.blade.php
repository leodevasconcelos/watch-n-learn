<ul id="authdropdown" class="dropdown-content">
    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/settings') }}">Settings</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>

<div class="navbar-fixed">
    <nav class="blue-grey darken-4 learn-nav" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">watch n learn</a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li>
                    <a class="dropdown-button" data-activates="authdropdown" href="#">
                        {{ Auth::user()->name }}
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            @endif
        </ul>

        <ul id="nav-mobile" class="side-nav">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/settings') }}">Settings</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            @endif
        </ul>
    </div>
</nav>
</div>