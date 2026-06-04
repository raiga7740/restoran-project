<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Saung Rasa Sunda')</title>
    <link rel="stylesheet" href="{{ asset('css/resto.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="logo">Saung Rasa Sunda</div>

<div class="nav-links">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('home') }}#tentang">Tentang Kami</a>
    <a href="{{ route('home') }}#galeri">Galeri</a>
    <a href="{{ route('home') }}#menu">Menu</a>
    <a href="{{ route('home') }}#reservasi">Reservasi</a>
    <a href="{{ route('home') }}#kontak">Kontak</a>

    @auth
        <a href="{{ route('admin.dashboard') }}" class="nav-login">Dashboard</a>

        <form action="{{ route('logout') }}" method="POST" class="nav-logout-form">
            @csrf
            <button type="submit" class="nav-login">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="nav-login">Login</a>
    @endauth
</div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer">
    <p>&copy; {{ date('Y') }} Saung Rasa Sunda. All rights reserved.</p>
</footer>

</body>
</html>