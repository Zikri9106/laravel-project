@extends('layouts.main')
@section('content')
    <div class="mt-5">
        <h1>Tentang Saya</h1>
        <img src="images/{{ $foto }}" class="profile-picture">
        <h3>Nama : {{ $nama }}</h3>
        <h3>Kelas : {{ $kelas }}</h3>
    </div>
@endsection
