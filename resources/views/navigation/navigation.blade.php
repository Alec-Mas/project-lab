<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background: none;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{url('/images/Purple-logo@3x.png')}}" width="75" height="30" class="d-inline-block align-top" alt="">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Landing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a style="border-style:solid;" class="nav-link pt-1 pb-1"  href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Landing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a style="border-style:solid;" class="nav-link pt-1 pb-1" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>