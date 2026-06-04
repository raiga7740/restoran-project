@extends('layouts.app')

@section('title', 'Home - RestoranKu')

@section('content')

<section class="hero" id="home">
    <div class="hero-content">
        <span class="badge-hero">Fresh • Delicious • Cozy</span>
        <h1>Nikmati Hidangan Terbaik Bersama Kami</h1>
        <p>
            RestoranKu menghadirkan makanan lezat, suasana nyaman, dan pelayanan terbaik
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
            resep pilihan, dan pelayanan yang ramah. RestoranKu cocok untuk makan bersama
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
        <div class="gallery-item"><img src="{{ asset('images/galeri1.jpg') }}" alt="Galeri 1" class="about-img"></div>
        <div class="gallery-item"><img src="{{ asset('images/galeri2.jpg') }}" alt="Galeri 2" class="about-img"></div>
        <div class="gallery-item"><img src="{{ asset('images/galeri3.jpg') }}" alt="Galeri 3" class="about-img"></div>
        <div class="gallery-item"><img src="{{ asset('images/galeri4.jpg') }}" alt="Galeri 4" class="about-img"></div>
    </div>
</section>


<section class="section" id="menu">
    <span class="section-label">Menu Favorit</span>
    <h2>Menu Pilihan Kami</h2>

    <div class="menu-grid">
        <div class="menu-card">
            <div class="menu-img"><img src="{{ asset('images/gambar1.jpg') }}" alt="makanan sunda 1"></div>
            <h3>Nasi Goreng Spesial</h3>
            <p>Rp 25.000</p>
            <a href="{{ route('menu.detail', 1) }}">Lihat Detail</a>
        </div>

        <div class="menu-card">
            <div class="menu-img"><img src="{{ asset('images/gambar2.jpg') }}" alt="makanan sunda 2"></div>
            <h3>Ayam Bakar Madu</h3>
            <p>Rp 32.000</p>
            <a href="{{ route('menu.detail', 2) }}">Lihat Detail</a>
        </div>

        <div class="menu-card">
            <div class="menu-img"><img src="{{ asset('images/gambar3.jpg') }}" alt="makanan sunda 3"></div>
            <h3>Sate Kambing</h3>
            <p>Rp 18.000</p>
            <a href="{{ route('menu.detail', 3) }}">Lihat Detail</a>
        </div>
    </div>

    <div class="center-button">
        <a href="{{ route('menu.index') }}" class="btn-primary">Lihat Semua Menu</a>
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

    <form class="form-card">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Masukkan nama">

        <label>No HP</label>
        <input type="text" placeholder="Masukkan nomor HP">

        <label>Tanggal</label>
        <input type="date">

        <label>Jam</label>
        <input type="time">

        <label>Jumlah Orang</label>
        <input type="number" placeholder="Contoh: 4">

        <button type="submit">Kirim Reservasi</button>
    </form>
</section>


<section class="section contact-section" id="kontak">
    <span class="section-label">Kontak</span>
    <h2>Hubungi Kami</h2>

    <div class="contact-grid">
        <div class="contact-card">
            <h3>Alamat</h3>
            <p>Jl. Contoh Restoran No. 10, Indonesia</p>
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