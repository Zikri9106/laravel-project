@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h1 class="h2 mb-4">Halaman Dashboard</h1>
        <h2 class="h5 mb-4">Selamat Datang, {{ auth()->user()->name }}</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Biodata
                    </div>
                    <div class="card-body">
                        <p class="card-text">My name is Muhammad Zikrinayah. Armed with knowledge from my education and
                            experience during school. In Team or individualized work both, i will be able to develop my
                            abilities in the field of Information Technology & Communication.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        Link Media Sosial
                    </div>
                    <div class="card-body">
                        <a href="https://github.com/Zikri9106" class="btn btn-outline-primary btn-sm mb-2 mr-2"
                            target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                        <a href="https://open.spotify.com/user/31jr7lejqe4uhxati53uusxhluli?si=226408a4c0b94c40"
                            class="btn btn-outline-primary btn-sm mb-2 mr-2" target="_blank">
                            <i class="fab fa-spotify"></i> Spotify
                        </a>
                        <a href="https://www.linkedin.com/in/muhammad-zikrinayah-54b99528b/"
                            class="btn btn-outline-primary btn-sm mb-2 mr-2" target="_blank">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                        <a href="https://www.instagram.com/itszykx_/" class="btn btn-outline-primary btn-sm mb-2 mr-2"
                            target="_blank">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
