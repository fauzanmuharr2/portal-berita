@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Lihat Data Siswa</center></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                            <div class="row ">
                                <div class="col-md-5">
                                    <label for=""><b>Nama Siswa</b></label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$tabungan->siswa->nama}}" name="nama" readonly>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Kelas Siswa</b></label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$tabungan->siswa->kelas}}" name="kelas" readonly>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b> Jumlah Uang</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" value="{{$tabungan->jumlah_uang}}" name="jumlah_uang" readonly  >
                                <div class="form-group">
                                    <a href="{{route('tabungan.index')}}"class="btn btn-outline-danger float-right"><b>Kembali(-)</b></a>
                                </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
