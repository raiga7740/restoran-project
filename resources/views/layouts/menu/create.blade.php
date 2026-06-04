@extends('layouts.admin')

@section('title', 'Tambah Menu')

@section('content')
<h1>Tambah Menu</h1>

<form class="form-card">
    <label>Nama Menu</label>
    <input type="text" placeholder="Nama menu">

    <label>Kategori</label>
    <select>
        <option>Makanan</option>
        <option>Minuman</option>
        <option>Dessert</option>
    </select>

    <label>Harga</label>
    <input type="number" placeholder="Harga">

    <label>Deskripsi</label>
    <textarea placeholder="Deskripsi menu"></textarea>

    <label>Gambar</label>
    <input type="file">

    <button type="submit">Simpan</button>
</form>
@endsection