@extends('layouts.app')
@section('content')
    <div class="container text-center mb-5">
        <h3>Tong Sampah Data User</h3>
    </div>
    @if (count($users) > 0)
    @include('pesan.message')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Restore</th>
                <th scope="col">Hapus Permanen</th>
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
                    <td>
                        <form action="{{ route('user.restore', $user->id) }}" method="post">
                            @csrf
                            <button class="btn btn-warning" 
                            onclick="return confirm('Anda yakin ingin merestore data ini?')">Restore</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('user.permanentDelete', $user->id) }}" method="post">
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