@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h1 class="title">Halaman Students</h1>
        <div class="d-flex justify-content-between align-items-center mt-5 mb-5">
            <a href="/dashboard/student/create" class="btn btn-dark">+ Add New Data</a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-white table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($students as $key => $siswa)
                <tr>
                    <td>{{ ($page - 1) * 10 + ($key + 1) }}</td>
                    <td>{{ $siswa['nis'] }}</td>
                    <td>{{ $siswa['nama'] }}</td>
                    <td>{{ $siswa->kelas->nama }}</td>
                    <td>
                        <a href="/dashboard/student/detail/{{ $siswa['id'] }}" class="badge bg-info border-0"><span
                                data-feather="eye"></span></a>
                        <a href="/dashboard/student/edit/{{ $siswa['id'] }}" class="badge bg-warning border-0"><span
                                data-feather="edit"></span></a>
                        <form method="POST" action="/dashboard/student/delete/{{ $siswa['id'] }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <span data-feather="x-circle"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-between">
            @if ($page > 1)
                <a type="button" class="btn btn-dark" href="/dashboard/student/all?page={{ $page - 1 }}">
                    << Previous Page</a>
            @endif
            @if ($students->hasMorePages())
                <a type="button" class="btn btn-dark" href="/dashboard/student/all?page={{ $page + 1 }}">Next
                    Page
                    >></a>
            @endif
        </div>
    </div>
@endsection
