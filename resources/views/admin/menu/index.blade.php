@extends('layouts.admin')

@section('title', 'Data Menu')

@section('content')
<h1>Data Menu</h1>

<a href="{{ route('admin.menu.create') }}" class="btn-primary">+ Tambah Menu</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Menu</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($menus as $menu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($menu->gambar)
                        <img src="{{ asset('storage/' . $menu->gambar) }}" class="table-img">
                    @else
                        Tidak ada
                    @endif
                </td>
                <td>{{ $menu->nama }}</td>
                <td>{{ $menu->kategori }}</td>
                <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                <td>{{ Str::limit($menu->deskripsi, 50) }}</td>
                <td>
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn-edit">Edit</a>

                    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete" onclick="return confirm('Hapus menu ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Belum ada menu.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection