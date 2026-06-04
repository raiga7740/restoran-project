@extends('layouts.admin')

@section('title', 'Data Reservasi')

@section('content')
<h1>Data Reservasi</h1>

@if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Orang</th>
            <th>Catatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($reservations as $reservation)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $reservation->nama }}</td>
                <td>{{ $reservation->no_hp }}</td>
                <td>{{ $reservation->tanggal }}</td>
                <td>{{ $reservation->jam }}</td>
                <td>{{ $reservation->jumlah_orang }}</td>
                <td>{{ $reservation->catatan ?? '-' }}</td>
                <td>
                    <span class="status-badge">{{ $reservation->status }}</span>
                </td>
                <td>
                    <form action="{{ route('admin.reservasi.status', [$reservation->id, 'Diterima']) }}" method="POST" class="inline-form">
                        @csrf
                        @method('PATCH')
                        <button class="btn-edit">Terima</button>
                    </form>

                    <form action="{{ route('admin.reservasi.status', [$reservation->id, 'Ditolak']) }}" method="POST" class="inline-form">
                        @csrf
                        @method('PATCH')
                        <button class="btn-delete">Tolak</button>
                    </form>

                    <form action="{{ route('admin.reservasi.destroy', $reservation->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete" onclick="return confirm('Hapus reservasi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">Belum ada reservasi.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection