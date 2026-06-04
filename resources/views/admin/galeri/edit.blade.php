@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
<h1>Edit Galeri</h1>

<form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="form-card">
    @csrf
    @method('PUT')

    <label>Judul Galeri</label>
    <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" required>

    <label>Gambar Saat Ini</label>
    <img src="{{ asset('storage/' . $galeri->gambar) }}" class="preview-img">

    <label>Ganti Gambar</label>
    <input type="file" name="gambar">

    <button type="submit">Update Galeri</button>
</form>
@endsection