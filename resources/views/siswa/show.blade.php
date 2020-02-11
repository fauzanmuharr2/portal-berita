@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lihat Data Siswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Masukan Nama Siswa</label>
                                </div>
                                <div class="col=md-8">
                                <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Masukan Kelas Siswa</label>
                                </div>
                                <div class="col=md-8">
                                    <input type="text" class="form-control" value="{{$siswa->kelas}}" name="kelas" readonly  >
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
