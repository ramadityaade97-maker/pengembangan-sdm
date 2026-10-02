<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi kata sandi | Denpasar Institute</title>
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

            <h1>Konfirmasi kata sandi</h1>
            <p class="auth-lede">
                Ini bagian yang aman dari situs. Masukkan kata sandi Anda lagi
                untuk melanjutkan.
            </p>

            @if ($errors->any())
                <div class="notice notice-error" role="alert">
                    <h2>Kata sandi tidak cocok</h2>
                    <p>Periksa kembali kata sandi yang Anda masukkan.</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

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

                <div class="actions">
                    <button type="submit" class="btn-primary">Konfirmasi</button>
                </div>
            </form>

            <p class="auth-foot">
                <a href="/pengajuan">Kembali ke daftar pengajuan</a>
            </p>
        </div>
    </main>

    <script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
