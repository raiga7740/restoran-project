@extends('layouts.app')

@section('title', 'Detail Menu - Saung Rasa Sunda')

@section('content')
<section class="section">
    <div class="detail-card">
        <div class="detail-img">Gambar Menu</div>

        <div>
            <h2>Nama Menu {{ $id }}</h2>
            <p class="price">Rp 25.000</p>
            <p>
                menu
            </p>

            <a href="{{ route('menu.index') }}" class="btn-secondary">Kembali</a>
        </div>
    </div>
</section>
@endsection