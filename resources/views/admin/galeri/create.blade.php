@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')
<h1>Tambah Galeri</h1>

<form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="form-card">
    @csrf

    <label>Judul Galeri</label>
    <input type="text" name="judul" required>

    <label>Gambar</label>
    <input type="file" name="gambar" required>

    <button type="submit">Simpan Galeri</button>
</form>
@endsection