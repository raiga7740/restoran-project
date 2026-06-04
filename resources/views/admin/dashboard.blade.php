@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<h1>Dashboard Admin</h1>

<div class="stats-grid">
    <div class="stat-card">
        <h3>Total Menu</h3>
        <p>{{ $totalMenu }}</p>
    </div>

    <div class="stat-card">
        <h3>Total Reservasi</h3>
        <p>{{ $totalReservasi }}</p>
    </div>

    <div class="stat-card">
        <h3>Total Galeri</h3>
        <p>{{ $totalGaleri }}</p>
    </div>
</div>
@endsection