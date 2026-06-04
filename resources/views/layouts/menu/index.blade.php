@extends('layouts.admin')

@section('title', 'Data Menu')

@section('content')
<div class="page-header">
    <h1>Data Menu</h1>
    <a href="{{ route('admin.menu.create') }}" class="btn-primary">+ Tambah Menu</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @for ($i = 1; $i <= 5; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>Menu {{ $i }}</td>
            <td>Makanan</td>
            <td>Rp {{ number_format(20000, 0, ',', '.') }}</td>
            <td>
                <button>Edit</button>
                <button>Hapus</button>
            </td>
        </tr>
        @endfor
    </tbody>
</table>
@endsection