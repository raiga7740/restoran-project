@extends('layouts.admin')

@section('title', 'Data Galeri')

@section('content')
<div class="page-header">
    <h1>Data Galeri</h1>
    <a href="{{ route('admin.galeri.create') }}" class="btn-primary">+ Tambah Galeri</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($galleries as $gallery)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/' . $gallery->gambar) }}" class="table-img">
                </td>
                <td>{{ $gallery->judul }}</td>
                <td>
                    <a href="{{ route('admin.galeri.edit', $gallery->id) }}" class="btn-edit">Edit</a>

                    <form action="{{ route('admin.galeri.destroy', $gallery->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete" onclick="return confirm('Hapus galeri ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada galeri.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection