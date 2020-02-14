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
                    <form action="{{route('hobi.store')}}" method="POST">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Masukan <b>Jenis</b> Hobi</label>
                                </div>
                                <div class="col=md-8">
                                    <input type="text" class="form-control" name="hobi" required>
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
