@extends('admin.layout')

@section('title','Manajemen User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Manajemen User</h4>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Tambah User</a>
</div>

<form method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control" placeholder="Cari nama atau email...">
        <button class="btn btn-outline-secondary">Cari</button>
    </div>
</form>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{ $users->firstItem() + $loop->index }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
           <td>{{ ucfirst($u->role) }}</td>
            <td>{{ $u->created_at ? $u->created_at->format('d M Y') : '-' }}</td>
            <td>
                <a href="{{ route('admin.users.show', $u->id) }}" class="btn btn-sm btn-info">Lihat</a>
                <a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('admin.users.destroy', $u->id) }}" 
                      method="POST" style="display:inline"
                      onsubmit="return confirm('Hapus user ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Pagination --}}
<div class="mt-3">
    {{ $users->links() }}
</div>

@endsection
