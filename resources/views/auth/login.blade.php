<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | Denpasar Institute</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/legacy.css') }}">
</head>
<body>
    <a class="skip-link" href="#main">Lompat ke konten utama</a>

    <main id="main" class="auth-page">
        <div class="auth-card">
            <a href="/" class="auth-brand">
                <img src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute" width="48" height="48">
                <span>Denpasar Institute</span>
            </a>

            <h1>Masuk</h1>
            <p class="auth-lede">Area ini hanya untuk pengelola. Halaman publik tidak memerlukan akun.</p>

            @if (session('status'))
                <div class="notice notice-ok" role="status">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="notice notice-error" role="alert">
                    <h2>Gagal masuk</h2>
                    <p>
                        Email atau kata sandi tidak cocok. Jika Anda merasa benar,
                        gunakan tautan lupa kata sandi di bawah.
                    </p>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                    >
                    @error('email')
                        <p class="field-error" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Kata sandi</label>
                    <div class="password-wrap">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            data-password-toggle
                            @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
                        >
                        <button
                            type="button"
                            class="password-toggle"
                            data-password-toggle-button
                            aria-controls="password"
                            aria-label="Tampilkan kata sandi"
                        >Lihat</button>
                    </div>
                    @error('password')
                        <p class="field-error" id="password-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field field-row">
                    <label class="check" for="remember">
                        <input type="checkbox" id="remember" name="remember" value="1">
                        <span>Ingat saya</span>
                    </label>
                    <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
                </div>

                <div class="actions">
                    <button type="submit" class="btn-primary">Masuk</button>
                </div>
            </form>

            <p class="auth-foot">
                <a href="/">Kembali ke situs</a>
            </p>
        </div>
    </main>

    <script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
