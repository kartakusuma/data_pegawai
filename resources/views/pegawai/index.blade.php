@extends('layouts.app')
@section('content')
    @include('pesan.message')
    <div class="py-2">
        @if (Auth::check())
        @if (Auth::user()->level=='Admin')
        <a href="{{route('pegawai.create')}}" class="btn btn-outline-warning">Tambah Data Pegawai</a>
        @endif
        <a href="{{route('pegawai.create_pdf')}}" class="btn btn-outline-danger">PDF</a>
        <a href="{{route('pegawai.export_excel')}}" class="btn btn-outline-success">Excel</a>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Departemen</th>
                @if (Auth::check() && Auth::user()->level=='Admin')
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
                @endif
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
                    <td>{{$pegawai->departemen->nama}}</td>
                    @if (Auth::check() && Auth::user()->level=='Admin')
                    <td>
                        <a href="{{route('pegawai.edit', $pegawai->id)}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger" 
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection