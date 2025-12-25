@extends('admin.layout')

@section('title','Tambah User')

@section('content')
<h4>Tambah User</h4>

@if($errors->any())
<div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div>
@endif

<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Role</label>
      <select name="role" class="form-select">
    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
</select>
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>
@endsection

