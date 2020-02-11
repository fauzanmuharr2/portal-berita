@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Data Siswa/i SMK ASSALAAM</b></center></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <a href="{{route('siswa.create')}}"class="btn btn-light"><b>Tambah Siswa(+)</b></a>
                    <table class="table">
                        <thead>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->kelas}}</td>
                            <form action="{{route('siswa.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary" href="{{route('siswa.show', $item->id)}}">Lihat</a>|
                                <a class="btn btn-warning" href="{{route('siswa.edit', $item->id)}}">Edit</a>|
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </tr>
                                </td>
                            </form>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
