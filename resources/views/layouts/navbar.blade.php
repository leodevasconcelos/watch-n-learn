<ul id="authdropdown" class="dropdown-content">
    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/settings') }}">Settings</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>

<nav class="white learn-nav" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">watch n learn</a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @include('partials.nav')
        </ul>

        <ul id="nav-mobile" class="side-nav">
            @include('partials.nav')
        </ul>
    </div>
</nav>