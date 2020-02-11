@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('siswa.store')}}" method="POST">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Masukan <b>Nama</b> Siswa</label>
                                </div>
                                <div class="col=md-8">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Masukan <b>Kelas</b> Siswa</label>
                                </div>
                                <div class="col=md-8">
                                    <input type="text" class="form-control" name="kelas" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
