<!-- Nav section  -->
<div class="container mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1><a class="navbar-brand p-5 fs-3 text-success" href="{{ route('home') }}">TASK APP</a></h1>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active d-flex">
                @if (auth()->check())
                    <a class="nav-link" href="{{ route('task.list') }}">Task list</a>
                    <a class="nav-link" href="{{ route('task.edit') }}">Task edit</a>
                    <a class="nav-link" href="{{ route('task.details') }}">Task details</a>
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('sign.up') }}">Sign-up</a>
                @endif
            </li>
        </ul>
    </div>
    </nav>
</div>