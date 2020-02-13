@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>
                    <form action="{{route('tabungan.store')}}" method="POST">
                        @csrf

                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Pilih Nama Siswa</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="siswa_id" class="form-control">
                                        @foreach ($data as $item)
                                            <option value=" {{$item->id}} "> {{$item->nama}} - {{$item->kelas}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Masukan Tabungan Siswa</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="jumlah_uang" required>
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
