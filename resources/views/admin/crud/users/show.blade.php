@extends('admin.layout')

@section('title','Detail User')

@section('content')
<h4>Detail User</h4>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="card-text"><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
        <p class="card-text"><strong>Dibuat:</strong> {{ $user->created_at ? $user->created_at->format('d M Y H:i') : '-' }}</p>
        <p class="card-text"><strong>Diupdate:</strong> {{ $user->updated_at ? $user->updated_at->format('d M Y H:i') : '-' }}</p>
    </div>
</div>

<a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
