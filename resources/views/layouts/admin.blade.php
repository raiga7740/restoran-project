<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Restoran')</title>
    <link rel="stylesheet" href="{{ asset('css/resto.css') }}">
</head>
<body>
    <div class="admin-wrapper">
        <aside class="sidebar">
            <h2>Admin</h2>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.menu.index') }}">Data Menu</a>
            <a href="{{ route('admin.reservasi.index') }}">Reservasi</a>
            <a href="{{ route('admin.galeri.index') }}">Galeri</a>
            <a href="{{ route('home') }}">Lihat Website</a>
        </aside>

        <main class="admin-content">
            @yield('content')
        </main>
    </div>
</body>
</html>