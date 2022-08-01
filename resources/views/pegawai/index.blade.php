@extends('layouts.app')
@section('content')
    <a href="{{route('pegawai.create_pdf')}}" class="btn btn-outline-danger">PDF</a>
    <a href="{{route('pegawai.export_excel')}}" class="btn btn-outline-success">Excel</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Departemen</th>
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$pegawai->id}}</td>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->departemen->nama}}</td>
                    <td>
                        <a href="{{route('pegawai.edit', $pegawai->id)}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post">
                            @csrf
                            <button class="btn btn-warning btn-sm" 
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection