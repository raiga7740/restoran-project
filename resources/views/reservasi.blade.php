@extends('layouts.app')

@section('title', 'Reservasi - RestoranKu')

@section('content')
<section class="section">
    <h2>Reservasi Meja</h2>

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

        <label>Catatan</label>
        <textarea placeholder="Catatan tambahan"></textarea>

        <button type="submit">Kirim Reservasi</button>
    </form>
</section>
@endsection