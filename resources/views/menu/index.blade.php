@extends('layouts.app')

@section('title', 'Daftar Menu')

@section('content')
<section class="section" id="menu">
    <span class="section-label">Semua Menu</span>
    <h2>Daftar Menu</h2>

    <div class="menu-grid">
        @forelse ($menus as $menu)
            <div class="menu-card">
                <div class="menu-img">
                    @if ($menu->gambar)
                        <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama }}">
                    @else
                        <span>Gambar</span>
                    @endif
                </div>

                <h3>{{ $menu->nama }}</h3>
                <p>Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                <p class="menu-desc">{{ Str::limit($menu->deskripsi, 80) }}</p>

                <a href="{{ route('menu.detail', $menu->id) }}">Lihat Detail</a>
            </div>
        @empty
            <p>Belum ada menu.</p>
        @endforelse
    </div>
</section>
@endsection