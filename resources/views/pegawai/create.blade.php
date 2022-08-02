@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container text-center mb-5">
                <h3>Tambah Data Pegawai</h3>
            </div>
            <form action="{{route('pegawai.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control form-select" id="jenis_kelamin" aria-label="Jenis kelamin" name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="departemen" class="form-label">Departemen</label>
                    <select class="form-control form-select" id="departemen" aria-label="Departemen" name="departemen_id">
                        @foreach ($departemens as $departemen)
                            <option value="{{$departemen->id}}">{{$departemen->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
                </div>
                <button class="btn btn-danger" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection