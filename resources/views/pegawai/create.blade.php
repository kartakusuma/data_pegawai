@extends('layout.master')
@section('content')
    <h3>Tambah Data Pegawai</h3>
    <form action="{{route('pegawai.store')}}" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" name="nama">
        </div>
        <select class="form-select" aria-label="Jenis kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <select class="form-select" aria-label="Departemen" name="departemen_id">
            @foreach ($departemens as $departemen)
                <option value="{{$departemen->id}}">{{$departemen->nama}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
        </div>
        <input type="text" hidden name="user_id" value="{{$user_id}}">
        <button class="btn btn-danger" type="submit">Simpan</button>
    </form>
@endsection