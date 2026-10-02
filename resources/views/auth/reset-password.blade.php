<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur ulang kata sandi | Denpasar Institute</title>
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

            <h1>Atur kata sandi baru</h1>
            <p class="auth-lede">
                Pilih kata sandi baru untuk akun {{ $request->email ?? 'Anda' }}.
            </p>

            @if ($errors->any())
                <div class="notice notice-error" role="alert">
                    <h2>Kata sandi belum bisa disimpan</h2>
                    <p>Periksa isian di bawah, lalu coba lagi.</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="field">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        required
                        autocomplete="username"
                        @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                    >
                    @error('email')
                        <p class="field-error" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Kata sandi baru</label>
                    <div class="password-wrap">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="new-password"
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

                <div class="field">
                    <label for="password_confirmation">Ulangi kata sandi baru</label>
                    <div class="password-wrap">
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            data-password-toggle
                        >
                        <button
                            type="button"
                            class="password-toggle"
                            data-password-toggle-button
                            aria-controls="password_confirmation"
                            aria-label="Tampilkan kata sandi"
                        >Lihat</button>
                    </div>
                </div>

                <div class="actions">
                    <button type="submit" class="btn-primary">Simpan kata sandi</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
