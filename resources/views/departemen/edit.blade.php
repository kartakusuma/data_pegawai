@extends('layout.master')
@section('content')
    <h3>Edit Data Departemen</h3>
    <form action="{{route('departemen.update', $departemen->id)}}" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Departemen</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Departemen" name="nama" value="{{$departemen->nama}}">
        </div>
        <button class="btn btn-danger" type="submit">Simpan</button>
    </form>
@endsection