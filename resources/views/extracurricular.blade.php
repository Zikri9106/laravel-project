@extends('layouts.main')
@section('content')
    <div class="mt-5">
        <h1 class="title">Data Ekstrakurikuler</h1>
        <table class="table table-white table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pembina</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            @foreach ($extracurricular as $ekskul)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ekskul['nama'] }}</td>
                    <td>{{ $ekskul['pembina'] }}</td>
                    <td>{{ $ekskul['deskripsi'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
