@extends('layouts.app')
@section('content')
    <div class="py-2">
        @if (Auth::check() && Auth::user()->level=='Admin')
        <a href="{{route('user.create_pdf')}}" class="btn btn-outline-danger">PDF</a>
        <a href="{{route('user.export_excel')}}" class="btn btn-outline-success">Excel</a>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
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
            @foreach ($users as $user)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->level}}</td>
                    @if (Auth::check() && Auth::user()->level=='Admin')
                    <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
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