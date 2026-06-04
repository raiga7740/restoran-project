@extends('layouts.admin')

@section('title', 'Edit Menu')

@section('content')
<div class="page-header">
    <h1>Edit Menu</h1>
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

<form action="{{ route('admin.menu.update', $menu->id) }}"
      method="POST"
      enctype="multipart/form-data"
      class="form-card">

    @csrf
    @method('PUT')

    <label>Nama Menu</label>
    <input type="text"
           name="nama"
           value="{{ old('nama', $menu->nama) }}"
           required>

    <label>Kategori</label>
    <select name="kategori" required>
        <option value="Makanan"
            {{ $menu->kategori == 'Makanan' ? 'selected' : '' }}>
            Makanan
        </option>

        <option value="Minuman"
            {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>
            Minuman
        </option>

        <option value="Paket"
            {{ $menu->kategori == 'Paket' ? 'selected' : '' }}>
            Paket
        </option>
    </select>

    <label>Harga</label>
    <input type="number"
           name="harga"
           value="{{ old('harga', $menu->harga) }}"
           required>

    <label>Deskripsi Menu</label>
    <textarea name="deskripsi" rows="5">{{ old('deskripsi', $menu->deskripsi) }}</textarea>

    @if ($menu->gambar)
        <label>Gambar Saat Ini</label>

        <img src="{{ asset('storage/' . $menu->gambar) }}"
             class="preview-img">
    @endif

    <label>Ganti Gambar</label>
    <input type="file" name="gambar">

    <button type="submit" class="btn-primary">
        Update Menu
    </button>
</form>
@endsection