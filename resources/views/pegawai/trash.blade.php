@extends('layouts.app')
@section('content')
    <div class="container text-center mb-5">
        <h3>Tong Sampah Data Pegawai</h3>
    </div>
    @if (count($pegawais) > 0)
    @include('pesan.message')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Restore</th>
                <th scope="col">Hapus Permanen</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->jenis_kelamin}}</td>
                    <td>
                        <form action="{{ route('pegawai.restore', $pegawai->id) }}" method="post">
                            @csrf
                            <button class="btn btn-warning" 
                            onclick="return confirm('Anda yakin ingin merestore data ini?')">Restore</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('pegawai.permanentDelete', $pegawai->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger" 
                            onclick="return confirm('Anda yakin ingin menghapus data ini secara permanen?')">Hapus Permanen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="text-center text-secondary">
        <h2>- Kosong -</h2>
    </div>
    @endif
@endsection