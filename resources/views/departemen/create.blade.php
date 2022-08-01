@extends('layout.master')
@section('content')
    <h3>Tambah Data Departemen</h3>
    <form action="{{route('departemen.store')}}" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Departemen</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Departemen" name="nama">
        </div>
        <button class="btn btn-danger" type="submit">Simpan</button>
    </form>
@endsection