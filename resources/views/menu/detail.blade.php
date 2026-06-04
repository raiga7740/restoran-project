@extends('layouts.app')

@section('title', $menu->nama)

@section('content')
<section class="section">
    <div class="detail-card">
        <div class="detail-img">
            @if ($menu->gambar)
                <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama }}">
            @else
                <span>Gambar Menu</span>
            @endif
        </div>

        <div>
            <span class="section-label">{{ $menu->kategori }}</span>
            <h2>{{ $menu->nama }}</h2>

            <p class="price">
                Rp {{ number_format($menu->harga, 0, ',', '.') }}
            </p>

            <p>{{ $menu->deskripsi }}</p>

            <a href="{{ route('menu.index') }}" class="btn-secondary">Kembali</a>
        </div>
    </div>
</section>
@endsection