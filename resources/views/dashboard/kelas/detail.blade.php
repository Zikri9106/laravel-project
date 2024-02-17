@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h2 class="mb-5">Info kelas</h2>
        <div class="form">
            <div class="form-group mb-3">
                <label for="">Nama Kelas</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $class->nama }}" disabled>
            </div>
        </div>
    </div>
@endsection
