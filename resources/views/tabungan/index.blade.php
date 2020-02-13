@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header">
                        <center><b>Tabungan Siswa</b></center>
                    </div>
                    <div class="card-body">
                       <a href="{{route('tabungan.create')}}"class="btn btn-outline-light float-right"><b>Tambah Tabungan Siswa(+)</b></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Uang Tabungan</th>
                                        <th>Aksi</th>
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
                                            <form action="{{route('tabungan.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <td>
                                            <a class="btn btn-primary" href="{{route('tabungan.show', $data->id)}}">Lihat</a>|
                                            <a class="btn btn-warning" href="{{route('tabungan.edit', $data->id)}}">Edit</a>|
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                            </form>
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
