<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="https://storage.googleapis.com/kotakode-prod-public/images/95f322e8-3fba-4227-a3cf-441442376a03-bootstrap.png"
                width="30" height="30" class="d-inline-block align-top rounded" alt="">
            Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/extracurricular">Extracurricular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/kelas/all">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Selamat Datang, {{ auth()->user()->name }} </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="/dashboard"><span data-feather="grid"
                                        style="margin-right: 10px;"></span>Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/home"><span data-feather="home"
                                        style="margin-right: 10px;"></span>Home</a></li>
                            <li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><span data-feather="log-out"
                                            style="margin-right: 10px;"></span>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a class="btn btn-outline-primary" href="/login" aria-current="page" role="button">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
