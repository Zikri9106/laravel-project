@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="mt-5">
        <h2 class="mb-5">Info Siswa</h2>
        <div class="form">
            <div class="form-group mb-3">
                <label for="">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" value="{{ $student->nis }}" disabled>
            </div>
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->nama }}"
                    disabled>
            </div>
            <div class="form-group mb-3">
                <label for="">Kelas</label>
                <input type="text" class="form-control" name="class" id="class" value="{{ $student->kelas->nama }}"
                    disabled>
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $student->tgl_lahir }}"
                    disabled>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $student->alamat }}"
                    disabled>
            </div>
        </div>
    </div>
@endsection
