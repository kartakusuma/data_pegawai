@extends('layout.pdf_layout')
@section('content')
<table class="table table-hover">
    <div class="text-center">
        <h3>Data User</h3>
    </div>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection