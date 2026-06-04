@extends('layouts.app')

@section('title', 'Home - Saung Rasa Sunda')

@section('content')

@if (session('success'))
    <div class="alert-success public-alert">
        {{ session('success') }}
    </div>
@endif

<section class="hero" id="home">
    <div class="hero-content">
        <span class="badge-hero">Fresh • Delicious • Cozy</span>
        <h1>Nikmati Hidangan Terbaik Bersama Kami</h1>
        <p>
            Saung Rasa Sunda menghadirkan makanan lezat, suasana nyaman, dan pelayanan terbaik
            untuk keluarga, teman, maupun acara spesial Anda.
        </p>

        <div class="hero-buttons">
            <a href="#menu" class="btn-primary">Lihat Menu</a>
            <a href="#reservasi" class="btn-secondary">Reservasi Meja</a>
        </div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/restoran.jpg') }}" alt="Saung Rasa Sunda" class="about-img">
    </div>
</section>


<section class="section about-section" id="tentang">
    <div class="about-image">
        <img src="{{ asset('images/foto1.jpg') }}" alt="Saung Rasa Sunda" class="about-img">
    </div>

    <div class="about-content">
        <span class="section-label">Tentang Kami</span>
        <h2>Cita Rasa Terbaik dengan Suasana Hangat</h2>
        <p>
            Kami menyajikan berbagai pilihan makanan dan minuman dengan bahan segar,
            resep pilihan, dan pelayanan yang ramah. Saung Rasa Sunda cocok untuk makan bersama
            keluarga, meeting santai, hingga makan malam spesial.
        </p>

        <div class="about-list">
            <div>✅ Bahan segar setiap hari</div>
            <div>✅ Tempat nyaman dan bersih</div>
            <div>✅ Cocok untuk keluarga</div>
        </div>
    </div>
</section>


<section class="section gallery-section" id="galeri">
    <span class="section-label">Galeri</span>
    <h2>Suasana Restoran Kami</h2>

<div class="gallery-grid">

    @foreach($galleries as $gallery)

        <div class="gallery-item">

            <img src="{{ asset('storage/' . $gallery->gambar) }}"
                 alt="{{ $gallery->judul }}">

        </div>

    @endforeach

</div>
</section>


<section class="section" id="menu">
    <span class="section-label">Menu Favorit</span>
    <h2>Menu Pilihan Kami</h2>

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
            <small>{{ Str::limit($menu->deskripsi, 60) }}</small>
        </div>
    @empty
        <p>Belum ada menu.</p>
    @endforelse
</div>

<div class="center-button">
    <a href="{{ route('menu.index') }}" class="btn-primary">
        Lihat Semua Menu
    </a>
</div>
</section>


<section class="section reservation-section" id="reservasi">
    <div class="reservation-content">
        <span class="section-label">Reservasi</span>
        <h2>Booking Meja Sekarang</h2>
        <p>
            Ingin makan tanpa antre? Silakan reservasi meja terlebih dahulu.
        </p>
    </div>

<form action="{{ route('reservasi.store') }}" method="POST" class="form-card">
    @csrf

    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

    <label>No HP</label>
    <input type="text" name="no_hp" placeholder="Masukkan nomor HP" required>

    <label>Tanggal</label>
    <input type="date" name="tanggal" required>

    <label>Jam</label>
    <input type="time" name="jam" required>

    <label>Jumlah Orang</label>
    <input type="number" name="jumlah_orang" placeholder="Contoh: 4" required>

    <label>Catatan</label>
    <textarea name="catatan" placeholder="Catatan tambahan"></textarea>

    <button type="submit">Kirim Reservasi</button>
</form>
</section>


<section class="section contact-section" id="kontak">
    <span class="section-label">Kontak</span>
    <h2>Hubungi Kami</h2>

    <div class="contact-grid">
        <div class="contact-card">
            <h3>Alamat</h3>
            <p>Jl. Raya Bogor No. 10, Indonesia</p>
        </div>

        <div class="contact-card">
            <h3>Telepon</h3>
            <p>0812-3456-7890</p>
        </div>

        <div class="contact-card">
            <h3>Jam Buka</h3>
            <p>Senin - Minggu<br>10.00 - 22.00</p>
        </div>
    </div>
</section>

@endsection