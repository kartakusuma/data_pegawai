@extends('layout.master')
@section('content')
    <a href="{{route('departemen.create')}}" class="btn btn-warning">Tambah Data Departemen</a>
    <a href="{{route('departemen.create_pdf')}}" class="btn btn-outline-danger">PDF</a>
    <a href="{{route('departemen.export_excel')}}" class="btn btn-outline-success">Excel</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($departemens as $departemen)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$departemen->nama}}</td>
                    <td>
                        <a href="{{route('departemen.edit', $departemen->id)}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('departemen.destroy', $departemen->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger" 
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection