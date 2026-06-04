@extends('layouts.app')

@section('title', 'Menu - Saung Rasa Sunda')

@section('content')
<section class="section">
    <h2>Daftar Menu</h2>

    <div class="filter-box">
        <input type="text" placeholder="Cari menu...">
        <select>
            <option>Semua Kategori</option>
            <option>Makanan</option>
            <option>Minuman</option>
            <option>Dessert</option>
        </select>
    </div>

    <div class="menu-grid">
        @for ($i = 1; $i <= 6; $i++)
            <div class="menu-card">
                <div class="menu-img">Gambar</div>
                <h3>Nama Menu {{ $i }}</h3>
                <p>Rp {{ number_format(15000 + ($i * 3000), 0, ',', '.') }}</p>
                <a href="{{ route('menu.detail', $i) }}">Lihat Detail</a>
            </div>
        @endfor
    </div>
</section>
@endsection