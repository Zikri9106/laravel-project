<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow navbar-expand-lg">
    <a class="navbar-brand col-md-5 col-lg-2 me-0 px-3" href="/dashboard">
        <img src="https://storage.googleapis.com/kotakode-prod-public/images/95f322e8-3fba-4227-a3cf-441442376a03-bootstrap.png"
            width="30" height="30" class="d-inline-block align-top rounded" alt="">
        Bootstrap
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Selamat Datang, {{ auth()->user()->name }} </button>
                <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="/dashboard"><span data-feather="grid"
                                style="margin-right: 10px;"></span>Dashboard</a></li>
                    <li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/home"><span data-feather="home"
                                style="margin-right: 10px;"></span>Home</a></li>
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
        </ul>
    </div>
</header>
