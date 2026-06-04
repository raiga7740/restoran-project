@extends('layouts.admin')

@section('title', 'Data Reservasi')

@section('content')
<h1>Data Reservasi</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Orang</th>
        </tr>
    </thead>

    <tbody>
        @for ($i = 1; $i <= 5; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>Pelanggan {{ $i }}</td>
            <td>08123456789</td>
            <td>2026-06-03</td>
            <td>19:00</td>
            <td>4</td>
        </tr>
        @endfor
    </tbody>
</table>
@endsection