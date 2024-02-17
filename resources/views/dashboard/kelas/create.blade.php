@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h2 class="mb-5">Tambah Data Kelas</h2>
        <form method="post" action="/dashboard/kelas/add">
            @csrf
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
            </div>
            <button type="submit" class="btn btn-dark mt-2">Add Data</button>
        </form>
    </div>
@endsection
