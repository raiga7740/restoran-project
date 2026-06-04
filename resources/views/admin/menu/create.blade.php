@extends('layouts.admin')

@section('title', 'Tambah Menu')

@section('content')
<div class="page-header">
    <h1>Tambah Menu</h1>
</div>

@if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data" class="form-card">
    @csrf

    <label>Nama Menu</label>
    <input type="text" name="nama" value="{{ old('nama') }}" required>

    <label>Kategori</label>
    <select name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Paket">Paket</option>
    </select>

    <label>Harga</label>
    <input type="number" name="harga" value="{{ old('harga') }}" required>

    <label>Deskripsi Menu</label>
    <textarea name="deskripsi" rows="5">{{ old('deskripsi') }}</textarea>

    <label>Gambar Menu</label>
    <input type="file" name="gambar">

    <button type="submit" class="btn-primary">
        Simpan Menu
    </button>
</form>
@endsection