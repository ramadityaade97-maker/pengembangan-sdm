<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Kolaborasi | Denpasar Institute</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/legacy.css') }}">
</head>
<body>
    <a class="skip-link" href="#main">Lompat ke konten utama</a>

    <nav class="inbox-bar" aria-label="Navigasi pengelola">
        <a href="/" class="inbox-brand">
            <img src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute" width="40" height="40">
            <span>Denpasar Institute</span>
        </a>
        <div class="inbox-bar-right">
            <span class="inbox-who">{{ auth()->user()->email }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-quiet">Keluar</button>
            </form>
        </div>
    </nav>

    <main id="main" class="section-body">
        <div class="wrap-wide">

            <div class="inbox-head">
                <h1>Pengajuan kolaborasi</h1>
                <p>
                    {{ $total }} pengajuan tercatat.
                    Halaman ini berisi data kontak pengirim, jadi jangan dibagikan.
                </p>
            </div>

            @if ($requests->isEmpty())
                {{-- R-27: say why it is empty and what fills it. --}}
                <div class="inbox-empty">
                    <h2>Belum ada pengajuan</h2>
                    <p>
                        Belum ada yang mengisi formulir di halaman
                        <a href="/kolaborasi">Ajukan Kolaborasi</a>.
                        Pengajuan baru akan muncul di sini begitu dikirim.
                    </p>
                </div>
            @else
                <ol class="inbox-list">
                    @foreach ($requests as $r)
                        <li class="inbox-item">
                            <div class="inbox-item-head">
                                <h2>{{ $r->name }}</h2>
                                <time datetime="{{ $r->created_at->toIso8601String() }}">
                                    {{ $r->created_at->translatedFormat('d M Y, H:i') }}
                                </time>
                            </div>

                            <dl class="inbox-meta">
                                <div>
                                    <dt>Organisasi</dt>
                                    <dd>{{ $r->organisation }}</dd>
                                </div>
                                <div>
                                    <dt>Email</dt>
                                    <dd><a href="mailto:{{ $r->email }}">{{ $r->email }}</a></dd>
                                </div>
                                <div>
                                    <dt>Telepon</dt>
                                    <dd>
                                        @if ($r->phone)
                                            <a href="tel:{{ $r->phone }}">{{ $r->phone }}</a>
                                        @else
                                            <span class="inbox-empty-value">tidak diisi</span>
                                        @endif
                                    </dd>
                                </div>
                            </dl>

                            <div class="inbox-message">
                                <p>{{ $r->message }}</p>
                            </div>

                            <div class="inbox-item-foot">
                                <a class="btn-quiet" href="mailto:{{ $r->email }}?subject={{ rawurlencode('Re: Permintaan kolaborasi dari '.$r->name) }}">Balas lewat email</a>
                            </div>
                        </li>
                    @endforeach
                </ol>
            @endif

        </div>
    </main>
</body>
</html>
