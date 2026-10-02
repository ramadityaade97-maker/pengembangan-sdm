<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa kata sandi | Denpasar Institute</title>
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

            <h1>Lupa kata sandi</h1>
            <p class="auth-lede">
                Tuliskan email akun Anda. Tautan untuk mengatur ulang kata sandi
                akan dikirim ke alamat tersebut.
            </p>

            @if (session('status'))
                {{-- This site has no mail transport configured (MAIL_MAILER=log),
                     so the reset link is written to storage/logs/laravel.log
                     rather than delivered to an inbox. Saying "check your email"
                     here would be a promise the system cannot keep, so the notice
                     names where the link actually is. Replace this block with a
                     plain confirmation once real SMTP is configured. --}}
                <div class="notice notice-warn" role="status">
                    <h2>Tautan sudah dibuat</h2>
                    <p>{{ session('status') }}</p>
                    <p class="notice-aside">
                        Situs ini belum dikonfigurasi dengan server email, jadi tautannya
                        belum dikirim ke kotak masuk Anda. Tautan itu tersimpan di
                        <code>storage/logs/laravel.log</code>. Agar tautannya benar-benar
                        masuk ke email, konfigurasi SMTP terlebih dahulu.
                    </p>
                </div>
            @else
                <form method="POST" action="{{ route('password.email') }}">
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

                    <div class="actions">
                        <button type="submit" class="btn-primary">Kirim tautan</button>
                    </div>
                </form>
            @endif

            <p class="auth-foot">
                <a href="{{ route('login') }}">Kembali ke halaman masuk</a>
            </p>
        </div>
    </main>

    <script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
