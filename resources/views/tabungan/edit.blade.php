@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><center>Edit Data</center></b></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('tabungan.update', $tabungan->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Masukan Nama/Kelas Siswa</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="siswa_id" class="form-control">
                                        @foreach ($siswa as $item)
                                            <option value=" {{$item->id}} "
                                                {{ $item->id == $tabungan->siswa_id ? 'selected' : '' }} >
                                                {{$item->nama}} - {{$item->kelas}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Masukan Jumlah Uang</b> </label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number"  class="form-control" name="jumlah_uang" value="{{$tabungan->jumlah_uang }}" required>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary float-right" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
