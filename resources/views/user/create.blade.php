@extends('layout.master')
@section('content')
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Nama User</label>
            <input type="text" class="form-control" id="username" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" id="level">
                <option value="Admin">Admin</option>
                <option value="Pegawai">Pegawai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection