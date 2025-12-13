@extends('admin.layout')

@section('title','Edit User')

@section('content')
<h4>Edit User</h4>

@if($errors->any())
<div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div>
@endif

<form action="{{ route('admin.users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
    </div>

    <div class="mb-3">
        <label>Ubah Password (kosongkan jika tidak ingin mengubah)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-select" required>
            <option value="user" {{ old('role', $user->role)=='user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ old('role', $user->role)=='admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>

    <button class="btn btn-success">Update</button>
</form>
@endsection
