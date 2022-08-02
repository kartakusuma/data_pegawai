@extends('layout.pdf_layout')
@section('content')
    <div class="text-center">
        <h3>Data Departemen</h3>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection