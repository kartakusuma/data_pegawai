@extends('layouts.app')
@section('content')
    <div class="container text-center mb-5">
        <h3>Tong Sampah Data Departemen</h3>
    </div>
    @if (count($departemens) > 0)
    @include('pesan.message')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                @if (Auth::check() && Auth::user()->level=='Admin')
                <th scope="col">Restore</th>
                <th scope="col">Hapus Permanen</th>
                @endif
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
                        <form action="{{ route('departemen.restore', $departemen->id) }}" method="post">
                            @csrf
                            <button class="btn btn-warning" 
                            onclick="return confirm('Anda yakin ingin merestore data ini?')">Restore</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('departemen.permanentDelete', $departemen->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger" 
                            onclick="return confirm('Anda yakin ingin menghapus data ini secara permaenen?')">Hapus Permanen</button>
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