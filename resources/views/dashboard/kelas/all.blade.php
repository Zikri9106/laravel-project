@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h1 class="title">Halaman Kelas</h1>
        <div class="d-flex justify-content-between align-items-center mt-5 mb-5">
            <a type="button" class="btn btn-dark" href="/dashboard/kelas/create">+ Add New Data</a>
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
                    <th>Nama Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($kelas as $key => $class)
                <tr>
                    <td>{{ ($page - 1) * 10 + ($key + 1) }}</td>
                    <td>{{ $class['nama'] }}</td>
                    <td>
                        <a href="/dashboard/kelas/detail/{{ $class['id'] }}" class="badge bg-info border-0"><span
                                data-feather="eye"></span></a>
                        <a href="/dashboard/kelas/edit/{{ $class['id'] }}" class="badge bg-warning border-0"><span
                                data-feather="edit"></span></a>
                        <form method="POST" action="/dashboard/kelas/delete/{{ $class['id'] }}" class="d-inline">
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
                <a type="button" class="btn btn-dark" href="/dashboard/kelas/all?page={{ $page - 1 }}">
                    << Previous Page</a>
            @endif
            @if ($kelas->hasMorePages())
                <a type="button" class="btn btn-dark" href="/dashboard/kelas/all?page={{ $page + 1 }}">Next
                    Page >></a>
            @endif
        </div>
    </div>
@endsection
