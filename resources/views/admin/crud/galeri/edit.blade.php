@extends('admin.layout')

@section('title','Edit Galeri')

@section('content')
<form action="{{ route('admin.galeri.update',$galeri->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="judul" value="{{ $galeri->judul }}">
    <img src="{{ asset('storage/'.$galeri->foto) }}" width="150">
    <input type="file" name="foto">

    <button type="submit">Update</button>
</form>
