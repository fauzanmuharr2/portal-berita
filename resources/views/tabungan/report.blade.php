@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header">
                        <center><b>Tabungan Siswa</b></center>
                    </div>
                    <div class="card-body">
                       <a href="{{route('tabungan.index')}}"class="btn btn-outline-light float-right"><b>Kembali(-)</b></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Uang Tabungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php    $no = 1;    @endphp
                                    @foreach ($tabungan as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->siswa->nama}}</td>
                                            <td>{{$data->siswa->kelas}}</td>
                                            <td>{{$data->jumlah_uang}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
