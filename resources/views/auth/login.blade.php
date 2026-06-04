<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/resto.css') }}">
</head>
<body>

<section class="login-page">
    <form action="{{ route('login.process') }}" method="POST" class="login-card">
        @csrf

        <h1>Login Admin</h1>
        <p>Masuk untuk mengelola menu restoran.</p>

        @if (session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif

        <label>Email</label>
        <input type="email" name="email" placeholder="admin@gmail.com" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</section>

</body>
</html>