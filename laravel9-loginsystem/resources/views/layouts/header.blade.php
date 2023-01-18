<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid d-flex flex-nowrap">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand"> <!--<a href="{{ route('pages.index') }}"></a> -->
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            {{-- <<a class="nav-link" href="{{ route('pages.login') }}">{{ __('Login') }}</a> --}}
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('pages.register') }}">{{ __('Register') }}</a> --}}
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->name }} --}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ URL('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{-- {{ __('Logout') }} --}}
                            </a>

                            <form id="logout-form" action="{{ URL('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
    </div>
</nav>