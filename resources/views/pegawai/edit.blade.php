@extends('layouts.app')
@section('content')
    <h3>Edit Data Pegawai</h3>
    <form action="{{route('pegawai.update', $pegawai->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" name="nama" value="{{$pegawai->nama}}">
        </div>
        <select class="form-select" aria-label="Jenis kelamin" name="jenis_kelamin">
            <option value="Laki-laki" @if ($pegawai->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
            <option value="Perempuan" @if ($pegawai->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
        </select>
        <select class="form-select" aria-label="Departemen" name="departemen">
            @foreach ($departemens as $departemen)
                <option value="{{$departemen->id}}"
                    @if ($pegawai->departemen_id == $departemen->id) selected @endif
                >{{$departemen->nama}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$pegawai->alamat}}</textarea>
        </div>
        <button class="btn btn-danger" type="submit">Simpan</button>
    </form>
@endsection