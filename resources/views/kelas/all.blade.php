@extends('layouts.main')
@section('content')
    <div class="mt-5">
        <h1 class="title">Halaman Kelas</h1>

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
                        <a href="/kelas/detail/{{ $class['id'] }}" class="badge bg-info border-0"><span
                                data-feather="eye"></span></a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-between">
            @if ($page > 1)
                <a type="button" class="btn btn-dark mt-5 mb-5" href="/kelas/all?page={{ $page - 1 }}">
                    << Previous Page</a>
            @endif
            @if ($kelas->hasMorePages())
                <a type="button" class="btn btn-dark mt-5 mb-5" href="/kelas/all?page={{ $page + 1 }}">Next
                    Page >></a>
            @endif
        </div>
    </div>
@endsection
