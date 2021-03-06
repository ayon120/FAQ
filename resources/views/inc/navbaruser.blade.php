<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top ">

    <ul class="navbar-nav pl-3 active">
      <li class="nav-item ">
        <a class="nav-link pr-4" href="/userhome"><h5><strong>@lang('Userhome.nav_home')</strong></h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4" href="/userask"><h5><strong>@lang('Userhome.nav_ask')</strong></h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4" href="/usernotice"><h5><strong>@lang('Userhome.nav_notice')</strong></h5></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        @lang('Userhome.logout')
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </nav>
