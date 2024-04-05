<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('tasks.index') }}">Task List Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="text-end">
                @guest
                {{-- if you dont sign in or not have account in this web --}}
                <a href="{{ route('register') }}" class="btn btn-primary mx-2">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
                @else
                {{-- logout button :: if you have sign in --}}
                <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
