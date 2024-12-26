<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4" href="{{url('dashboard')}}">Dashboard</span>
        </a>

        <ul class="nav nav-pills red">
            {{-- For Un-Authenticated Users --}}
            @guest
            <li class="nav-item"><a href="{{url('dashboard')}}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }} " >Home</a></li>
            {{-- <li class="nav-item"><a href="{{url('service')}}" class="nav-link {{ (request()->is('service')) ? 'active' : '' }}">Services</a></li> --}}
            {{-- <li class="nav-item"><a href="#" class="nav-link ">Pricing</a></li> --}}
            <li class="nav-item"><a href="{{url('register')}}" class="nav-link {{ (request()->is('register')) ? 'active' : '' }}">Register</a></li>
            <li class="nav-item"><a href="{{url('login')}}" class="nav-link {{ (request()->is('login')) ? 'active' : '' }}">Login</a></li>

            {{-- For Authenticated User --}}
            @else
            <li class="nav-item"><a href="{{url('dashboard')}}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }} " >Home</a></li>
            <li class="nav-item"><a href="{{url('weather')}}" class="nav-link {{ request()->is('weather')  ? 'active' : ''}}">Weather</a></li>
            <li class="nav-item"><a href="{{url('todo')}}" class="nav-link {{ (request()->is('todo')) ? 'active' : '' }} " >Todo</a></li>
            <li class="nav-item"><a href="{{url('writeups')}}" class="nav-link {{ (request()->is('writeups')) ? 'active' : '' }}">writeups</a></li>
            <li class="nav-item"><a href="{{url('service')}}" class="nav-link {{ (request()->is('service')) ? 'active' : '' }}">Services</a></li>
            <li class="nav-item">
                <span class="nav-link fw-semibold text-reset">{{ (Auth::user()->username) }}</span></li>
            <li class="nav-item dropdown">
                {{-- <a class="nav-link dropdown-toggle" role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{ (Auth::user()->username) }}</a> --}}
                <a href="#" class="mt-1 d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a class="dropdown-item" href="{{route('login')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
        </ul>


    </header>
</div>


