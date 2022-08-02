@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container text-center mb-5">
                <h3>Tambah Data Departemen</h3>
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Data Departemen telah tersedia</strong>
            </div>
            @endif
            <form action="{{route('departemen.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Departemen</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Departemen" name="nama" required>
                </div>
                <button class="btn btn-danger" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection