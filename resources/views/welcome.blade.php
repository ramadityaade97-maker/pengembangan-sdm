<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN configured with preflight: false to preserve existing custom styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: {
                preflight: false,
            },
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        };
    </script>
</head>
    <script src="{{ asset('js/app.js') }}"></script>
<body>
    <nav id="navbar" class="elegant-nav">
    <div class="elegant-nav-inner">
        <!-- Brand -->
        <a href="#" class="nav-brand">
            <span class="nav-logo-wrap">
                <img src="{{ asset('images/logoDI.png') }}" alt="Denpasar Institute" class="nav-logo">
            </span>
            <span class="nav-brand-text">
                <span class="nav-brand-title">Denpasar Institute</span>
                <span class="nav-brand-sub">PUSAT KAJIAN PUBLIK — SEJAK 2017</span>
            </span>
        </a>

        <!-- Desktop links pill -->
        <div class="nav-links-pill" id="navLinksPill">
            <a href="#" class="nav-link active" data-label="Beranda">Beranda</a>
            <a href="#tentang-kami" class="nav-link" data-label="Tentang">Tentang</a>
            <a href="#galeri" class="nav-link" data-label="Galeri">Galeri</a>
            <a href="#program" class="nav-link" data-label="Program">Program</a>
        </div>

        <!-- CTA + mobile toggle -->
        <div class="nav-actions">
            <a href="#program" class="nav-cta-elegant">
                <span>Ajukan Kolaborasi</span>
                <span class="nav-cta-arrow">↗</span>
            </a>
            <button id="navToggle" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
            </button>
        </div>
    </div>

    <!-- Mobile drawer -->
    <div id="navMobile" class="nav-mobile">
        <a href="#" class="nav-mobile-link active">Beranda</a>
        <a href="#tentang-kami" class="nav-mobile-link">Tentang</a>
        <a href="#galeri" class="nav-mobile-link">Galeri</a>
        <a href="#program" class="nav-mobile-link">Program</a>
        <a href="#program" class="nav-mobile-cta">Ajukan Kolaborasi ↗</a>
    </div>
</nav>


<!-- legacy particles removed for elegant hero -->

    <section class="section-1 relative overflow-hidden bg-[#020617] isolate">
        <style>
            .section-1{ min-height:auto !important; }
            #heroElegant .hero-glow{ animation: heroGlow 8s ease-in-out infinite alternate; }
            @keyframes heroGlow{ 0%{ transform:translate(0,0) scale(1); opacity:.55} 100%{ transform:translate(18px,-14px) scale(1.08); opacity:.8 } }
            #heroCardFloat{ animation: heroFloat 6s ease-in-out infinite; }
            @keyframes heroFloat{ 0%,100%{ transform:translateY(0)} 50%{ transform:translateY(-10px)} }
            #heroMini1{ animation: heroMiniFloat 5.5s ease-in-out infinite; }
            #heroMini2{ animation: heroMiniFloat 5.5s ease-in-out 1.2s infinite; }
            @keyframes heroMiniFloat{ 0%,100%{ transform:translateY(0)} 50%{ transform:translateY(-7px)} }
            .hero-cta-primary{ transition: all .25s ease; }
            .hero-cta-primary:hover{ transform:translateY(-2px); box-shadow:0 16px 32px rgba(37,99,235,.35); }
            .hero-cta-secondary{ transition: all .25s ease; }
            .hero-cta-secondary:hover{ transform:translateY(-2px); }
            @media (prefers-reduced-motion: reduce){ #heroCardFloat,#heroMini1,#heroMini2,.hero-glow{ animation:none !important; } }
        </style>
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="hero-glow absolute -top-32 -left-40 w-[760px] h-[760px] bg-blue-600/20 rounded-full blur-[110px]"></div>
            <div class="hero-glow absolute top-10 right-[-120px] w-[620px] h-[620px] bg-indigo-500/16 rounded-full blur-[110px]" style="animation-delay:1.2s"></div>
            <div class="hero-glow absolute bottom-[-80px] left-1/3 w-[820px] h-[420px] bg-cyan-500/10 rounded-full blur-[100px]" style="animation-delay:.6s"></div>
            <div class="absolute inset-0 opacity-[0.035]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 28px 28px;"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#020617]/60"></div>
        </div>

        <div id="heroElegant" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-10 sm:pb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.07] border border-white/10 backdrop-blur text-[11px] font-semibold tracking-[0.16em] uppercase text-blue-200">
                <span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,.8)] animate-pulse"></span>
                Pusat Pengembangan SDM — Denpasar Institute
                <span class="hidden sm:inline-flex items-center gap-1.5 ml-2 pl-2 border-l border-white/15 text-white/60 tracking-normal normal-case text-[11px] font-medium"><span class="w-1 h-1 rounded-full bg-white/40"></span> Est. 2017 • Bali</span>
            </div>

            <div class="mt-8 grid lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                <div class="lg:col-span-7">
                    <h1 class="m-0 font-extrabold tracking-tight leading-[0.92] text-white">
                        <span class="block text-[34px] sm:text-[44px] lg:text-[56px]">DIVISI</span>
                        <span class="block text-[34px] sm:text-[44px] lg:text-[56px]">PENGEMBANGAN</span>
                        <span class="block font-['Cormorant_Garamond'] italic font-light text-[42px] sm:text-[54px] lg:text-[68px] leading-none mt-1 bg-gradient-to-r from-blue-400 via-indigo-300 to-cyan-300 bg-clip-text text-transparent">Sumber Daya Manusia</span>
                    </h1>
                    <div class="mt-5 w-20 h-[3px] rounded-full bg-gradient-to-r from-blue-500 via-indigo-500 to-cyan-400"></div>
                    <p class="m-0 mt-5 text-slate-300 text-sm sm:text-[15px] leading-relaxed max-w-xl">
                        Divisi Pengembangan SDM Denpasar Institute terbuka untuk kerja sama <span class="text-white font-medium">pelatihan, asesmen kompetensi,</span> dan pengembangan karier karyawan — dirancang elegan, terukur, dan berdampak untuk organisasi modern.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur"><svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SOP Terstandarisasi</span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur"><svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Asesmen Kompetensi</span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur"><svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Diklat & Karier</span>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="#program" class="hero-cta-primary inline-flex items-center gap-2 pl-6 pr-2 py-2 rounded-full bg-white text-slate-900 text-sm font-bold shadow-[0_10px_30px_rgba(0,0,0,.25)] no-underline">
                            Jelajahi Riset
                            <span class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">↗</span>
                        </a>
                        <a href="#tentang-kami" class="hero-cta-secondary inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/10 border border-white/20 backdrop-blur text-white text-sm font-semibold no-underline hover:bg-white hover:text-slate-900 hover:border-white">
                            Tentang Kami
                        </a>
                        <a href="#program" class="hidden sm:inline-flex items-center gap-2 text-slate-400 text-xs font-medium no-underline hover:text-white transition-colors">
                            <span class="w-8 h-8 rounded-full border border-white/15 flex items-center justify-center"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                            Lihat Program
                        </a>
                    </div>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/100?img=11" alt="" class="w-8 h-8 rounded-full border-2 border-[#020617] object-cover">
                            <img src="https://i.pravatar.cc/100?img=32" alt="" class="w-8 h-8 rounded-full border-2 border-[#020617] object-cover">
                            <img src="https://i.pravatar.cc/100?img=15" alt="" class="w-8 h-8 rounded-full border-2 border-[#020617] object-cover">
                            <span class="w-8 h-8 rounded-full bg-white text-slate-900 border-2 border-[#020617] flex items-center justify-center text-[10px] font-bold">+500</span>
                        </div>
                        <div>
                            <div class="flex items-center gap-1 text-amber-400 text-xs">★★★★★ <span class="text-slate-400 font-medium ml-1">4.9/5</span></div>
                            <p class="m-0 text-xs text-slate-400">Dipercaya organisasi & profesional di Bali & nasional</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 relative flex items-center justify-center lg:justify-end">
                    <div class="absolute w-[420px] h-[420px] bg-gradient-to-br from-blue-600/25 via-indigo-500/20 to-cyan-400/15 rounded-full blur-[50px] -z-10"></div>
                    <div id="heroCardFloat" class="relative w-[300px] sm:w-[360px] bg-white rounded-[2rem] shadow-[0_30px_80px_rgba(0,0,0,.5),0_8px_24px_rgba(37,99,235,.15)] border border-white/20 overflow-hidden">
                        <div class="h-1.5 w-full bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400"></div>
                        <div class="absolute top-6 right-6 w-20 h-20 bg-blue-50 rounded-full blur-xl pointer-events-none"></div>
                        <div class="p-7 sm:p-8 text-center">
                            <div class="mx-auto w-[132px] h-[132px] rounded-[1.5rem] bg-gradient-to-br from-slate-50 to-blue-50 border border-blue-100 flex items-center justify-center shadow-inner relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/[0.06] to-transparent"></div>
                                <img src="{{ asset('images/LogoSDM.png') }}" alt="Logo SDM" class="relative w-[108px] h-[108px] object-contain drop-shadow-[0_8px_20px_rgba(37,99,235,.18)]">
                            </div>
                            <h3 class="m-0 mt-5 text-slate-900 font-extrabold text-lg leading-tight">Pengembangan SDM</h3>
                            <p class="m-0 mt-1 text-slate-500 text-xs font-medium tracking-widest uppercase">Denpasar Institute</p>
                            <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-semibold">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Kolaborasi Terbuka
                            </div>
                            <div class="mt-6 grid grid-cols-3 gap-2 text-center">
                                <div class="rounded-xl bg-slate-50 border border-slate-100 p-2.5">
                                    <p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400">Program</p>
                                    <p class="m-0 text-lg font-extrabold text-slate-900"><span class="counter" data-target="10">0</span>+</p>
                                </div>
                                <div class="rounded-xl bg-blue-50 border border-blue-100 p-2.5">
                                    <p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-blue-600">Pelatihan</p>
                                    <p class="m-0 text-lg font-extrabold text-blue-700"><span class="counter" data-target="25">0</span>+</p>
                                </div>
                                <div class="rounded-xl bg-slate-50 border border-slate-100 p-2.5">
                                    <p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400">Peserta</p>
                                    <p class="m-0 text-lg font-extrabold text-slate-900"><span class="counter" data-target="500">0</span>+</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="rounded-xl bg-slate-900 text-white p-3 flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <span class="w-8 h-8 rounded-lg bg-white/15 flex items-center justify-center text-sm">✦</span>
                                    <div><p class="m-0 text-xs font-bold leading-none">Sertifikasi</p><p class="m-0 text-[11px] text-slate-400 leading-none mt-0.5">Berstandar Nasional</p></div>
                                </div>
                                <span class="text-white/60">›</span>
                            </div>
                        </div>
                    </div>
                    <div id="heroMini1" class="hidden sm:flex absolute -top-2 -right-2 lg:-right-4 bg-white rounded-2xl shadow-[0_16px_40px_rgba(0,0,0,.22)] border border-slate-100 p-3.5 items-center gap-3 min-w-[175px]">
                        <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="m-0 text-xs font-semibold text-slate-500 leading-none">Total Peserta</p>
                            <p class="m-0 text-sm font-extrabold text-slate-900 leading-none mt-1"><span class="counter" data-target="500">0</span>+ Profesional</p>
                            <p class="m-0 text-[11px] text-emerald-600 font-medium mt-0.5">↗ +12% bulan ini</p>
                        </div>
                    </div>
                    <div id="heroMini2" class="hidden sm:flex absolute -bottom-6 -left-6 lg:-left-2 bg-white rounded-2xl shadow-[0_16px_40px_rgba(0,0,0,.22)] border border-slate-100 p-3.5 items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="m-0 text-xs font-bold text-slate-900 leading-none">Akreditasi Terpercaya</p>
                            <p class="m-0 text-xs text-slate-500 leading-none mt-1">Mitra institusi nasional</p>
                        </div>
                        <span class="ml-2 w-7 h-7 rounded-full bg-emerald-500 text-white flex items-center justify-center text-xs">✓</span>
                    </div>
                </div>
            </div>
            <div class="mt-10 sm:mt-12 grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                <div class="group flex items-center gap-4 p-4 sm:p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur hover:bg-white/[0.09] hover:border-white/15 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-white text-blue-600 flex items-center justify-center shadow shrink-0 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-2xl font-extrabold text-white leading-none"><span class="counter" data-target="10">0</span><span class="text-blue-400">+</span></p>
                        <p class="m-0 mt-1 text-xs font-semibold tracking-widest uppercase text-slate-400">Program Unggulan</p>
                    </div>
                    <span class="ml-auto hidden sm:block text-slate-500 text-xs">Kurasi ahli ›</span>
                </div>
                <div class="group flex items-center gap-4 p-4 sm:p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur hover:bg-white/[0.09] hover:border-white/15 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow shrink-0 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-2xl font-extrabold text-white leading-none"><span class="counter" data-target="25">0</span><span class="text-cyan-400">+</span></p>
                        <p class="m-0 mt-1 text-xs font-semibold tracking-widest uppercase text-slate-400">Pelatihan Terselenggara</p>
                    </div>
                    <span class="ml-auto hidden sm:block text-slate-500 text-xs">Jadwal fleksibel ›</span>
                </div>
                <div class="group flex items-center gap-4 p-4 sm:p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur hover:bg-white/[0.09] hover:border-white/15 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-white text-slate-900 flex items-center justify-center shadow shrink-0 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-2xl font-extrabold text-white leading-none"><span class="counter" data-target="500">0</span><span class="text-blue-400">+</span></p>
                        <p class="m-0 mt-1 text-xs font-semibold tracking-widest uppercase text-slate-400">Peserta & Alumni</p>
                    </div>
                    <span class="ml-auto hidden sm:block text-emerald-400 text-xs font-semibold">↗ +12%</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         PROGRAM UTAMA SLIDER (TAILWIND CSS)
    ========================================= -->
    <section id="program" class="relative py-20 bg-gradient-to-b from-slate-50 via-sky-50/40 to-slate-100 text-slate-800 overflow-hidden font-sans border-t border-b border-slate-200/60">
        <style>
            /* Hover clean — tanpa fill gelap, layer tulisan di depan agar selalu terbaca */
            #program .program-card { border-radius:1rem; overflow:hidden; transition: border-color .30s ease, transform .30s ease, box-shadow .30s ease; }
            #program .program-card > div:first-child { position:relative; z-index:1; border-radius:1rem 1rem 0 0; overflow:hidden; } /* image stage — lengkung atas sama card */
            #program .program-card > div:last-child { position:relative; z-index:2; background:#FFFFFF; border-radius:0 0 1rem 1rem; transition: background-color .30s ease, border-color .30s ease; isolation:isolate; } /* text stage — lengkung bawah sama card */
            #program .program-card h3, #program .program-card p, #program .program-card .pc-footer, #program .program-card .pc-arrow { transition: color .25s ease, background-color .25s ease, border-color .25s ease, transform .25s ease; }
            /* hover — tetap putih, hanya angkat + border biru muda, teks tetap gelap terbaca */
            #program .program-card:hover { background:#FFFFFF !important; border-color:#BFDBFE !important; border-radius:1rem !important; box-shadow: 0 20px 44px rgba(15,23,42,.12), 0 8px 20px rgba(37,99,235,.08) !important; transform: translateY(-6px); }
            #program .program-card:hover > div:first-child { border-radius:1rem 1rem 0 0 !important; }
            #program .program-card:hover > div:last-child { background:#FFFFFF !important; border-radius:0 0 1rem 1rem !important; }
            #program .program-card:hover h3 { color:#1E3A8A !important; } /* biru tua — kontras di putih */
            #program .program-card:hover p  { color:#475569 !important; } /* slate-600 */
            #program .program-card:hover .pc-footer { border-color:#E2E8F0 !important; color:#2563EB !important; }
            #program .program-card:hover .pc-arrow { background:#2563EB !important; color:#FFFFFF !important; border-color:#2563EB !important; transform: translateX(2px); }
            #program .program-card:hover img { transform: scale(1.06); }
            #program .program-card:focus-visible { outline: 2px solid #2563EB; outline-offset: 2px; }
            @media (prefers-reduced-motion: reduce) {
              #program .program-card, #program .program-card * { transition: none !important; transform: none !important; }
            }
        </style>
        <!-- Ambient Glow Blobs -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10">
            <div class="absolute -top-20 right-1/4 w-96 h-96 bg-blue-400/15 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-20 w-96 h-96 bg-indigo-400/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 right-1/3 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header & Nav Buttons -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-6">
                <div>
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/90 border border-blue-200 text-blue-700 text-xs font-semibold tracking-wider uppercase mb-3 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        Informasi & Layanan
                    </div>
                    <!-- Title -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight m-0">
                        Program <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 bg-clip-text text-transparent">Utama</span>
                    </h2>
                    <!-- Subtitle -->
                    <p class="mt-3 text-slate-600 max-w-2xl text-sm sm:text-base leading-relaxed m-0">
                        Temukan berbagai program pengembangan SDM, pelatihan profesional, dan konsultasi institusional yang dirancang untuk mendukung keunggulan kompetitif organisasi Anda.
                    </p>
                </div>

                <!-- Slider Navigation Buttons -->
                <div class="flex items-center gap-3 self-start md:self-end">
                    <button id="programPrevBtn" type="button" aria-label="Program sebelumnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus:outline-none">
                        <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="programNextBtn" type="button" aria-label="Program berikutnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus:outline-none">
                        <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Slider Track Container -->
            <div class="relative">
                <div id="programTrack" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory py-4 px-1 cursor-grab active:cursor-grabbing select-none" style="scrollbar-width: none; -ms-overflow-style: none;">

                    <!-- Card 01: SOP -->
                    <a href="/sop" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 2.png') }}" alt="SOP" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">📋</span>
                                <span>Standar Prosedur</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                01
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    SOP
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Standar Operasional Prosedur untuk penataan alur kerja organisasi dan efisiensi operasional terukur.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 02: Interview Coaching -->
                    <a href="/interview" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 3.png') }}" alt="Interview Coaching" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">🎤</span>
                                <span>Pelatihan Wawancara</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                02
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Interview Coaching
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Bimbingan intensif dan teknik wawancara profesional untuk rekrutmen serta promosi karier jabatan.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 03: Diklat Jabatan -->
                    <a href="/diklat" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 4.png') }}" alt="Diklat Jabatan" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">🎓</span>
                                <span>Diklat Profesi</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                03
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Diklat Jabatan
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Pengembangan kompetensi manajerial, teknis, dan kepemimpinan sesuai kebutuhan jabatan kerja.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 04: Karir Dosen -->
                    <a href="/karier dosen" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 5.png') }}" alt="Karir Dosen" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">👨‍🎓</span>
                                <span>Karir Akademik</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                04
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Karir Dosen
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Pengembangan jenjang karier profesional dosen, peningkatan kualifikasi, dan Tri Dharma perguruan tinggi.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 05: Lokakarya SDM -->
                    <a href="/lokakarya" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 6.png') }}" alt="Lokakarya SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">💡</span>
                                <span>Workshop Tematik</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                05
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Lokakarya SDM
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Meningkatkan wawasan inovatif dan kompetensi SDM melalui lokakarya tematik interaktif dan aplikatif.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 06: In-House Training -->
                    <a href="/training" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 7.png') }}" alt="In-House Training" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">🏢</span>
                                <span>Pelatihan Khusus</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                06
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    In-House Training
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Program pelatihan internal eksklusif yang disesuaikan secara presisi dengan kebutuhan organisasi.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 07: Diklat SDM -->
                    <a href="/sdm" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 8.png') }}" alt="Diklat SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">📚</span>
                                <span>Pengembangan Talenta</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                07
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Diklat SDM
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Meningkatkan kompetensi, produktivitas, dan integritas profesional sumber daya manusia organisasi.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="pc-arrow w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 08: Tailor-Made -->
                    <a href="/tailor" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero 9.png') }}" alt="Tailor-Made" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm inline-flex items-center gap-1.5">
                                <span class="text-sm">🎯</span>
                                <span>Program Kustom</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full text-xs font-bold font-mono backdrop-blur-md bg-black/45 text-white/95 border border-white/20 shadow-sm">
                                08
                            </span>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-200 m-0 mb-2">
                                    Tailor-Made
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 line-clamp-3 leading-relaxed m-0 mb-5">
                                    Program pelatihan dan bimbingan eksklusif yang dirancang khusus sesuai sasaran strategis institusi.
                                </p>
                            </div>

                            <div class="pc-footer flex items-center justify-between pt-3 border-t border-slate-100 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                <span class="flex items-center gap-1">Pelajari Program</span>
                                <span class="w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-600 group-hover:text-white flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Slider Progress / Dots & Indicator Footer -->
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-200/80">
                <!-- Navigation Dots -->
                <div id="programDots" class="flex items-center gap-2"></div>

                <!-- Auto-slide status & Swipe hints -->
                <div class="flex items-center gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center gap-1.5">
                        <span id="programAutoStatus" class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span id="programAutoText">Auto-slider aktif</span>
                    </span>
                    <span class="text-slate-300">•</span>
                    <span class="inline-flex items-center gap-1">
                        <span>Geser atau klik panah untuk melihat program</span>
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </section>

<section id="tentang-kami" class="relative py-20 lg:py-28 bg-[#FCFCF9] text-slate-800 overflow-hidden font-sans border-y border-[#EDE9E3]">
    <!-- Elegant Background -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10">
        <div class="absolute -top-32 -right-32 w-[640px] h-[640px] bg-amber-200/20 rounded-full blur-[80px]"></div>
        <div class="absolute top-[18%] -left-40 w-[560px] h-[560px] bg-blue-300/12 rounded-full blur-[90px]"></div>
        <div class="absolute bottom-0 right-[18%] w-[500px] h-[500px] bg-indigo-200/15 rounded-full blur-[90px]"></div>
        <!-- subtle grid -->
        <div class="absolute inset-0 opacity-[0.04]" style="background-image: linear-gradient(to right, #0F172A 1px, transparent 1px), linear-gradient(to bottom, #0F172A 1px, transparent 1px); background-size: 48px 48px;"></div>
        <!-- large watermark typography -->
        <div class="absolute left-1/2 -translate-x-1/2 top-[88px] lg:top-[78px] select-none pointer-events-none">
            <p class="text-[68px] sm:text-[96px] lg:text-[148px] font-black tracking-[-0.06em] leading-none text-slate-900/[0.035] whitespace-nowrap" style="font-family: 'Poppins', sans-serif;">DENPASAR INSTITUTE</p>
        </div>
    </div>

    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Eyebrow + Header Editorial -->
        <div class="max-w-3xl mx-auto text-center mb-12 lg:mb-16 relative">
            <div class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full bg-white border border-[#EDE9E3] shadow-sm">
                <span class="w-7 h-px bg-amber-500/70"></span>
                <span class="text-[11px] font-bold tracking-[0.22em] uppercase text-amber-700">Tentang Kami — Est. 2017</span>
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
            </div>
            <h2 class="mt-6 text-[30px] sm:text-[42px] lg:text-[52px] font-extrabold tracking-tight leading-[0.95] text-slate-900" style="font-family: 'Poppins', sans-serif;">
                Membangun SDM
                <span class="relative inline-block">
                    <span class="relative z-10 font-serif italic font-light tracking-tight bg-gradient-to-r from-amber-600 via-[#C5A572] to-amber-700 bg-clip-text text-transparent" style="font-family: 'Cormorant Garamond', serif;">Unggul</span>
                    <span class="absolute left-0 right-0 bottom-1 h-[8px] bg-amber-200/50 -z-0"></span>
                </span>
                <span class="block mt-1 bg-gradient-to-r from-blue-700 via-indigo-600 to-cyan-600 bg-clip-text text-transparent">& Berdaya Saing</span>
            </h2>
            <!-- elegant divider -->
            <div class="flex items-center justify-center gap-3 mt-6">
                <span class="h-px w-12 bg-gradient-to-r from-transparent to-[#C5A572]/60"></span>
                <span class="w-1.5 h-1.5 rotate-45 border border-[#C5A572] bg-white"></span>
                <span class="h-px w-12 bg-gradient-to-l from-transparent to-[#C5A572]/60"></span>
            </div>
            <p class="mt-5 text-[13px] sm:text-[15px] leading-relaxed text-slate-600 max-w-2xl mx-auto font-medium">
                Divisi Pengembangan SDM Denpasar Institute — <span class="text-slate-900 font-semibold">mitra strategis</span> yang merancang kurikulum terstruktur, aplikatif, dan relevan untuk menjaga daya saing organisasi di era digital & kecerdasan buatan.
            </p>
        </div>

        <!-- Main Editorial Grid -->
        <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 items-stretch mb-8 lg:mb-10">
            <!-- LEFT: Visual Editorial Card -->
            <div class="lg:col-span-5 relative group">
                <!-- soft glow behind -->
                <div class="absolute -inset-3 bg-gradient-to-br from-amber-200/25 via-blue-200/20 to-indigo-200/25 rounded-[2.4rem] blur-2xl opacity-60 group-hover:opacity-80 transition-opacity"></div>
                <div class="relative h-full rounded-[2rem] bg-white border border-[#EDE9E3] shadow-[0_20px_60px_rgba(15,23,42,0.07)] overflow-hidden flex flex-col">
                    <!-- top hairline gold -->
                    <div class="h-[3px] w-full bg-gradient-to-r from-[#C5A572] via-amber-400 to-[#C5A572]"></div>
                    <div class="p-5 sm:p-6 flex flex-col flex-1">
                        <!-- card header -->
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-11 h-11 rounded-xl bg-slate-900 text-white flex items-center justify-center shadow-md rotate-[-2deg]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5"/></svg>
                            </div>
                            <div class="leading-tight">
                                <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-amber-700">Denpasar Institute</p>
                                <p class="text-[13px] font-extrabold text-slate-900 -mt-0.5">Pusat Pengembangan SDM</p>
                                <p class="text-[10px] font-medium tracking-wide text-slate-500">Bali • Indonesia</p>
                            </div>
                            <span class="ml-auto inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-[10px] font-bold tracking-widest uppercase text-emerald-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Sejak 2017
                            </span>
                        </div>

                        <!-- image stage -->
                        <div class="relative rounded-[1.9rem] bg-gradient-to-br from-[#FFFBF0] via-white to-blue-50/70 border border-[#F1EDE8] flex items-center justify-center p-3 sm:p-4 overflow-hidden min-h-[340px] sm:min-h-[400px]">
                            <!-- decorative corner lines -->
                            <span class="absolute top-4 left-4 w-8 h-8 border-l-2 border-t-2 border-[#C5A572]/40 rounded-tl-xl z-10"></span>
                            <span class="absolute bottom-4 right-4 w-8 h-8 border-r-2 border-b-2 border-[#C5A572]/40 rounded-br-xl z-10"></span>
                            <span class="absolute -top-10 -right-10 w-32 h-32 bg-amber-300/15 rounded-full blur-2xl"></span>
                            <span class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-300/15 rounded-full blur-2xl"></span>
                            <!-- big 01 watermark -->
                            <span class="absolute right-6 bottom-6 text-[84px] font-black leading-none text-slate-900/[0.04] select-none">01</span>
                            <img src="{{ asset('images/Denpasar institute.png') }}" alt="Denpasar Institute" class="relative w-[96%] max-w-[360px] sm:max-w-[400px] h-[300px] sm:h-[360px] object-cover object-center rounded-[1.35rem] border border-white shadow-[0_18px_40px_rgba(15,23,42,0.14)] bg-white group-hover:scale-[1.025] transition-transform duration-700">
                        </div>

                        <!-- floating metrics - glass -->
                        <div class="grid grid-cols-3 gap-3 mt-5">
                            <div class="relative rounded-2xl bg-slate-900 text-white p-3.5 text-center overflow-hidden shadow-md">
                                <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                                <p class="counter relative text-[18px] font-black leading-none tracking-tight" data-target="500">0+</p>
                                <p class="relative text-[9px] tracking-[0.16em] uppercase font-semibold opacity-70 mt-1">Peserta</p>
                                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-8 h-0.5 bg-amber-400 rounded-full"></span>
                            </div>
                            <div class="rounded-2xl bg-white border border-[#EDE9E3] p-3.5 text-center shadow-sm">
                                <p class="counter text-[18px] font-black leading-none tracking-tight text-slate-900" data-target="25">0+</p>
                                <p class="text-[9px] tracking-[0.16em] uppercase font-semibold text-slate-500 mt-1">Pelatihan</p>
                            </div>
                            <div class="relative rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white p-3.5 text-center overflow-hidden shadow-md">
                                <div class="absolute inset-0 bg-gradient-to-br from-white/12 to-transparent"></div>
                                <p class="counter relative text-[18px] font-black leading-none tracking-tight" data-target="10">0+</p>
                                <p class="relative text-[9px] tracking-[0.16em] uppercase font-semibold opacity-80 mt-1">Program</p>
                            </div>
                        </div>

                        <!-- micro trust row -->
                        <div class="mt-4 flex items-center justify-between text-[11px] font-medium text-slate-500 border-t border-[#F1EDE8] pt-3">
                            <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Terakreditasi & Tepercaya</span>
                            <span class="font-mono text-[10px] tracking-widest">DI-SDM/2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Narrative Editorial -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <!-- story card -->
                <div class="relative rounded-[2rem] bg-white border border-[#EDE9E3] shadow-[0_20px_60px_rgba(15,23,42,0.07)] p-6 sm:p-8 lg:p-9 overflow-hidden flex-1">
                    <div class="absolute top-0 left-8 right-8 h-px bg-gradient-to-r from-transparent via-[#C5A572]/40 to-transparent"></div>
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-amber-100/40 rounded-full blur-3xl"></div>

                    <div class="relative">
                        <div class="inline-flex items-center gap-2.5 mb-4">
                            <span class="w-8 h-px bg-[#C5A572]"></span>
                            <span class="text-[11px] font-bold tracking-[0.2em] uppercase text-amber-700">Cerita Kami</span>
                            <span class="w-1 h-1 rounded-full bg-[#C5A572]"></span>
                        </div>

                        <h3 class="text-[24px] sm:text-[30px] font-extrabold leading-[1.1] tracking-tight text-slate-900">
                            Mitra strategis untuk
                            <span class="font-serif italic font-normal text-slate-700" style="font-family: 'Cormorant Garamond', serif;">transformasi SDM</span>
                            <span class="text-blue-700"> yang berkelanjutan.</span>
                        </h3>

                        <!-- elegant quote block -->
                        <div class="mt-5 relative rounded-2xl bg-[#FFFBF0] border border-amber-200/50 p-4 sm:p-5 flex gap-4">
                            <span class="hidden sm:flex w-9 h-9 rounded-xl bg-white border border-amber-200 text-amber-600 items-center justify-center flex-shrink-0 shadow-sm text-lg leading-none">“</span>
                            <p class="text-[13px] sm:text-[14px] leading-relaxed text-slate-700 font-medium">
                                Di era <span class="font-semibold text-slate-900">Revolusi Digital & AI</span>, ekspektasi kinerja meningkat pesat. Kami menjembatani kesenjangan kompetensi dengan program <span class="font-semibold text-slate-900 underline decoration-amber-300 decoration-2 underline-offset-4">terstruktur, aplikatif, dan relevan industri</span> — menjaga daya saing & keberlanjutan bisnis Anda.
                            </p>
                        </div>

                        <div class="mt-7">
                            <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-slate-500 mb-3 flex items-center gap-2"><span class="w-6 h-px bg-[#C5A572]/50"></span> Fokus Pengembangan</p>
                            <ul class="grid sm:grid-cols-2 gap-3">
                                <li class="group/item flex items-center gap-3 rounded-xl bg-[#FCFCF9] border border-[#EDE9E3] hover:border-amber-200 hover:bg-white p-3.5 transition-colors">
                                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white border border-[#EDE9E3] group-hover/item:bg-amber-500 group-hover/item:text-white group-hover/item:border-amber-500 text-slate-700 flex items-center justify-center shadow-sm transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[13px] font-semibold text-slate-700 leading-snug">Peningkatan motivasi & loyalitas</span>
                                </li>
                                <li class="group/item flex items-center gap-3 rounded-xl bg-[#FCFCF9] border border-[#EDE9E3] hover:border-blue-200 hover:bg-white p-3.5 transition-colors">
                                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white border border-[#EDE9E3] group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:border-blue-600 text-slate-700 flex items-center justify-center shadow-sm transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[13px] font-semibold text-slate-700 leading-snug">Kompetensi teknis & manajerial</span>
                                </li>
                                <li class="group/item flex items-center gap-3 rounded-xl bg-[#FCFCF9] border border-[#EDE9E3] hover:border-indigo-200 hover:bg-white p-3.5 transition-colors">
                                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white border border-[#EDE9E3] group-hover/item:bg-indigo-600 group-hover/item:text-white group-hover/item:border-indigo-600 text-slate-700 flex items-center justify-center shadow-sm transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[13px] font-semibold text-slate-700 leading-snug">Karakter & etika profesional</span>
                                </li>
                                <li class="group/item flex items-center gap-3 rounded-xl bg-[#FCFCF9] border border-[#EDE9E3] hover:border-emerald-200 hover:bg-white p-3.5 transition-colors">
                                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white border border-[#EDE9E3] group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:border-emerald-600 text-slate-700 flex items-center justify-center shadow-sm transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[13px] font-semibold text-slate-700 leading-snug">Produktivitas & efektivitas</span>
                                </li>
                                <li class="group/item flex items-center gap-3 rounded-xl bg-slate-900 border border-slate-800 p-3.5 sm:col-span-2">
                                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/10 border border-white/15 text-white flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[13px] font-semibold text-white leading-snug">Penguatan kolaborasi tim & sistem manajemen SDM modern</span>
                                    <span class="ml-auto hidden sm:inline-flex text-[10px] font-bold tracking-widest uppercase text-amber-300">Featured →</span>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA inline -->
                        <div class="mt-6 flex flex-wrap items-center gap-3">
                            <a href="#program" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-slate-900 hover:bg-black text-white text-xs font-bold tracking-wide shadow-md hover:shadow-lg transition-all">
                                Jelajahi Program
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#galeri" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-[#EDE9E3] hover:border-slate-300 text-slate-700 text-xs font-bold tracking-wide transition-all">
                                Lihat Galeri
                            </a>
                            <span class="hidden sm:inline-flex items-center gap-2 text-[11px] font-medium text-slate-500 ml-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Konsultasi gratis tersedia
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- VISI MISI — Premium Bento -->
        <div class="grid md:grid-cols-2 gap-6 lg:gap-7">
            <!-- VISI: Light ivory premium -->
            <div class="group relative rounded-[1.8rem] bg-white border border-[#EDE9E3] shadow-[0_18px_50px_rgba(15,23,42,0.06)] hover:shadow-[0_24px_64px_rgba(15,23,42,0.10)] hover:-translate-y-1.5 transition-all duration-300 overflow-hidden p-7 sm:p-8">
                <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-[#C5A572] via-amber-400 to-[#C5A572]"></div>
                <div class="absolute -top-16 -right-16 w-40 h-40 bg-amber-100/50 rounded-full blur-2xl group-hover:bg-amber-100/70 transition-colors"></div>
                <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#EDE9E3] to-transparent"></div>
                <div class="relative">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-[#FCFCF9] border border-[#EDE9E3] text-slate-900 flex items-center justify-center shadow-sm">
                            <svg class="w-[22px] h-[22px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FFFBF0] border border-amber-200 text-amber-700 text-[10px] font-bold tracking-[0.16em] uppercase">Visi</span>
                    </div>
                    <p class="text-[11px] font-bold tracking-[0.2em] uppercase text-[#C5A572] mb-2">Masa Depan SDM Indonesia</p>
                    <h3 class="text-[22px] sm:text-[24px] font-extrabold tracking-tight text-slate-900 leading-tight">Visi</h3>
                    <div class="mt-3 w-10 h-0.5 bg-[#C5A572] rounded-full"></div>
                    <p class="mt-4 text-[14px] leading-relaxed text-slate-600">
                        Menjadi mitra strategis dalam pengembangan sumber daya manusia yang <span class="font-semibold text-slate-900">kompeten, profesional, adaptif, dan berdaya saing</span> — mampu menghadapi dunia kerja di era digital & kecerdasan buatan, serta mendukung terciptanya individu dan organisasi yang unggul dan berkelanjutan.
                    </p>
                    <div class="mt-6 flex items-center gap-3 text-[11px] font-semibold tracking-wide text-slate-500">
                        <span class="w-7 h-px bg-[#C5A572]/40"></span> Berorientasi masa depan & berkelanjutan
                    </div>
                </div>
            </div>

            <!-- MISI: Dark navy premium -->
            <div class="group relative rounded-[1.8rem] bg-[#0B1220] border border-slate-800 shadow-[0_18px_50px_rgba(2,6,23,0.35)] hover:shadow-[0_24px_64px_rgba(2,6,23,0.45)] hover:-translate-y-1.5 transition-all duration-300 overflow-hidden p-7 sm:p-8 text-white">
                <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-amber-400 via-[#C5A572] to-cyan-400"></div>
                <div class="absolute -top-16 -right-16 w-52 h-52 bg-blue-500/15 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-amber-500/10 rounded-full blur-3xl"></div>
                <!-- subtle grain -->
                <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 22px 22px;"></div>
                <div class="relative">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-white text-slate-900 flex items-center justify-center shadow-md">
                            <svg class="w-[22px] h-[22px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.9" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-white/10 border border-white/15 text-white text-[10px] font-bold tracking-[0.16em] uppercase backdrop-blur">Misi</span>
                    </div>
                    <p class="text-[11px] font-bold tracking-[0.2em] uppercase text-amber-300 mb-2">Komitmen & Aksi Nyata</p>
                    <h3 class="text-[22px] sm:text-[24px] font-extrabold tracking-tight leading-tight">Misi</h3>
                    <div class="mt-3 w-10 h-0.5 bg-amber-400 rounded-full"></div>
                    <p class="mt-4 text-[14px] leading-relaxed text-slate-300">
                        Mengembangkan SDM yang kompeten & adaptif melalui <span class="font-semibold text-white">pelatihan relevan industri</span>, penguatan karakter, peningkatan produktivitas, serta pengembangan kepemimpinan dan kolaborasi di era digital & kecerdasan buatan.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center gap-3 text-[13px] font-medium text-slate-200"><span class="w-7 h-7 rounded-full bg-white/10 border border-white/10 flex items-center justify-center flex-shrink-0"><span class="w-2 h-2 rounded-full bg-amber-400"></span></span> Program pelatihan link-and-match industri</li>
                        <li class="flex items-center gap-3 text-[13px] font-medium text-slate-200"><span class="w-7 h-7 rounded-full bg-white/10 border border-white/10 flex items-center justify-center flex-shrink-0"><span class="w-2 h-2 rounded-full bg-cyan-400"></span></span> Penguatan karakter & etika profesi</li>
                        <li class="flex items-center gap-3 text-[13px] font-medium text-slate-200"><span class="w-7 h-7 rounded-full bg-white/10 border border-white/10 flex items-center justify-center flex-shrink-0"><span class="w-2 h-2 rounded-full bg-indigo-400"></span></span> Kepemimpinan & kolaborasi tim</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- bottom trust bar -->
        <div class="mt-8 lg:mt-10 rounded-2xl bg-white border border-[#EDE9E3] shadow-sm px-5 sm:px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
            <p class="text-[12px] font-semibold tracking-wide text-slate-600 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Dipercaya institusi pemerintah, BUMN, dan swasta di Bali & nasional
            </p>
            <div class="flex items-center gap-2 text-[11px] font-bold tracking-widest uppercase text-slate-400">
                <span>Kualitas</span><span class="w-1 h-1 rounded-full bg-slate-300"></span><span>Integritas</span><span class="w-1 h-1 rounded-full bg-slate-300"></span><span>Keberlanjutan</span>
            </div>
        </div>
    </div>
</section>

<!-- =========================================
     GALLERY DENPASAR INSTITUTE (CARD SLIDER - TAILWIND CSS)
========================================= -->
<section id="galeri" class="relative py-20 bg-gradient-to-b from-slate-50 via-sky-50/40 to-slate-100 text-slate-800 overflow-hidden font-sans border-t border-b border-slate-200/60">
    <!-- Ambient Glow Blobs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10">
        <div class="absolute -top-20 left-1/4 w-96 h-96 bg-blue-400/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-20 w-96 h-96 bg-cyan-400/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 left-1/3 w-80 h-80 bg-indigo-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header & Nav Buttons -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-6">
            <div>
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/90 border border-blue-200 text-blue-700 text-xs font-semibold tracking-wider uppercase mb-3 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Dokumentasi & Galeri
                </div>
                <!-- Title -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight m-0">
                    Galeri <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 bg-clip-text text-transparent">Denpasar Institute</span>
                </h2>
                <!-- Subtitle -->
                <p class="mt-3 text-slate-600 max-w-2xl text-sm sm:text-base leading-relaxed m-0">
                    Dokumentasi visual kegiatan pelatihan pengembangan SDM, sertifikasi kepemimpinan, lokakarya strategis, serta penandatanganan kemitraan institusional.
                </p>
            </div>

            <!-- Slider Navigation Buttons -->
            <div class="flex items-center gap-3 self-start md:self-end">
                <button id="galleryPrevBtn" type="button" aria-label="Slide sebelumnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus:outline-none">
                    <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="galleryNextBtn" type="button" aria-label="Slide berikutnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus:outline-none">
                    <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Filter Category Tabs -->
        <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-3" style="scrollbar-width: none; -ms-overflow-style: none;">
            <button type="button" class="gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-blue-600 text-white shadow-sm shadow-blue-500/30 whitespace-nowrap cursor-pointer border-0" data-filter="all">
                Semua Galeri
            </button>
            <button type="button" class="gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-white/90 hover:bg-blue-50 text-slate-700 hover:text-blue-600 border border-slate-200/80 whitespace-nowrap cursor-pointer" data-filter="pelatihan">
                Pelatihan SDM
            </button>
            <button type="button" class="gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-white/90 hover:bg-blue-50 text-slate-700 hover:text-blue-600 border border-slate-200/80 whitespace-nowrap cursor-pointer" data-filter="diklat">
                Diklat Jabatan
            </button>
            <button type="button" class="gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-white/90 hover:bg-blue-50 text-slate-700 hover:text-blue-600 border border-slate-200/80 whitespace-nowrap cursor-pointer" data-filter="kerjasama">
                Kerjasama & MoU
            </button>
            <button type="button" class="gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-white/90 hover:bg-blue-50 text-slate-700 hover:text-blue-600 border border-slate-200/80 whitespace-nowrap cursor-pointer" data-filter="lokakarya">
                Lokakarya & Riset
            </button>
        </div>

        <!-- Slider Track Container -->
        <div class="relative">
            <div id="galleryTrack" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory py-4 px-1 cursor-grab active:cursor-grabbing select-none" style="scrollbar-width: none; -ms-overflow-style: none;">

                <!-- Card 1 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="pelatihan">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami1.jpg') }}" alt="Pelatihan SDM Unggul" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-blue-700 shadow-sm">
                            Pelatihan SDM
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/gambar-programkami1.jpg') }}"
                            data-title="Pelatihan Peningkatan Kapasitas SDM Unggul"
                            data-category="Pelatihan SDM"
                            data-meta="Januari 2026 • Denpasar, Bali"
                            data-desc="Dokumentasi pelatihan komprehensif bersama Denpasar Institute untuk meningkatkan kapabilitas, etika profesi, dan daya saing sumber daya manusia di era disrupsi digital.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                Denpasar, Bali
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Jan 2026</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Pelatihan Kapasitas SDM Unggul
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Program intensif penguatan kompetensi teknis dan karakter profesional bagi organisasi modern.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> 25+ Peserta
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/gambar-programkami1.jpg') }}"
                                data-title="Pelatihan Peningkatan Kapasitas SDM Unggul"
                                data-category="Pelatihan SDM"
                                data-meta="Januari 2026 • Denpasar, Bali"
                                data-desc="Dokumentasi pelatihan komprehensif bersama Denpasar Institute untuk meningkatkan kapabilitas, etika profesi, dan daya saing sumber daya manusia di era disrupsi digital.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="diklat">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami2.jpg') }}" alt="Interview Coaching" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-indigo-700 shadow-sm">
                            Diklat Jabatan
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/gambar-programkami2.jpg') }}"
                            data-title="Executive Coaching & Interview Kepemimpinan"
                            data-category="Diklat Jabatan"
                            data-meta="Februari 2026 • Auditorium Denpasar Institute"
                            data-desc="Simulasi wawancara terstandar dan bimbingan kepemimpinan eksklusif untuk persiapan promosi jabatan struktural di instansi pemerintah dan swasta.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                Auditorium DI
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Feb 2026</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Executive Coaching & Wawancara
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Pembekalan kecakapan komunikasi manajerial dan pemetaan kompetensi kepemimpinan strategis.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-indigo-500"></span> Executive Level
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/gambar-programkami2.jpg') }}"
                                data-title="Executive Coaching & Interview Kepemimpinan"
                                data-category="Diklat Jabatan"
                                data-meta="Februari 2026 • Auditorium Denpasar Institute"
                                data-desc="Simulasi wawancara terstandar dan bimbingan kepemimpinan eksklusif untuk persiapan promosi jabatan struktural di instansi pemerintah dan swasta.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="kerjasama">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/Kerjasama.jpg') }}" alt="Penandatanganan Kerjasama" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-emerald-700 shadow-sm">
                            Kerjasama & MoU
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/Kerjasama.jpg') }}"
                            data-title="Penandatanganan Nota Kesepahaman & Kemitraan Strategis"
                            data-category="Kerjasama & MoU"
                            data-meta="Desember 2025 • Ruang Kolaborasi DI"
                            data-desc="Momentum penandatanganan kerja sama tripartit untuk penguatan riset kebijakan publik, asesmen kompetensi, dan pelatihan berkelanjutan.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                Ruang Kolaborasi DI
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Des 2025</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Kemitraan & Kolaborasi Strategis
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Kolaborasi resmi bersama lembaga pemerintah dan sektor swasta untuk peningkatan produktivitas SDM nasional.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> MoU Institusional
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/Kerjasama.jpg') }}"
                                data-title="Penandatanganan Nota Kesepahaman & Kemitraan Strategis"
                                data-category="Kerjasama & MoU"
                                data-meta="Desember 2025 • Ruang Kolaborasi DI"
                                data-desc="Momentum penandatanganan kerja sama tripartit untuk penguatan riset kebijakan publik, asesmen kompetensi, dan pelatihan berkelanjutan.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="lokakarya">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami3.jpg') }}" alt="Lokakarya SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-amber-700 shadow-sm">
                            Lokakarya & Riset
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/gambar-programkami3.jpg') }}"
                            data-title="Lokakarya SDM: Sinergi Budaya Kerja Berkelanjutan"
                            data-category="Lokakarya & Riset"
                            data-meta="November 2025 • Ballroom Denpasar Institute"
                            data-desc="Forum diskusi terfokus mengupas inovasi human capital, etika kepemimpinan, dan best practice pengelolaan talenta di Indonesia.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                Ballroom DI
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Nov 2025</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Lokakarya Sinergi SDM & Budaya Kerja
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Diskusi panel dan lokakarya praktis mengenai penguatan etika kerja dan efektivitas tim kerja lintas divisi.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span> Workshop Interaktif
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/gambar-programkami3.jpg') }}"
                                data-title="Lokakarya SDM: Sinergi Budaya Kerja Berkelanjutan"
                                data-category="Lokakarya & Riset"
                                data-meta="November 2025 • Ballroom Denpasar Institute"
                                data-desc="Forum diskusi terfokus mengupas inovasi human capital, etika kepemimpinan, dan best practice pengelolaan talenta di Indonesia.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="pelatihan">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami4.jpg') }}" alt="Karir Dosen" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-cyan-700 shadow-sm">
                            Pelatihan SDM
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/gambar-programkami4.jpg') }}"
                            data-title="Pendampingan Karir & Sertifikasi Dosen"
                            data-category="Pelatihan SDM"
                            data-meta="Oktober 2025 • Hybrid Learning DI"
                            data-desc="Bimbingan teknis peningkatan kompetensi dosen menuju jenjang fungsional tertinggi, penyusunan portofolio akademik, dan publikasi ilmiah bereputasi.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                Hybrid Center
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Okt 2025</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Akselerasi Jenjang Karir Profesional
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Pendampingan portofolio karir, asesmen kompetensi terpadu, dan pembinaan profesionalisme berkelanjutan.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-cyan-500"></span> Sertifikasi Profesi
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/gambar-programkami4.jpg') }}"
                                data-title="Pendampingan Karir & Sertifikasi Dosen"
                                data-category="Pelatihan SDM"
                                data-meta="Oktober 2025 • Hybrid Learning DI"
                                data-desc="Bimbingan teknis peningkatan kompetensi dosen menuju jenjang fungsional tertinggi, penyusunan portofolio akademik, dan publikasi ilmiah bereputasi.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-2xl border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 snap-start flex flex-col overflow-hidden" data-category="diklat">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami5.jpg') }}" alt="In House Training" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-white/90 text-purple-700 shadow-sm">
                            Diklat Jabatan
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-black/40 hover:bg-blue-600 text-white backdrop-blur-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
                            data-img="{{ asset('images/gambar-programkami5.jpg') }}"
                            data-title="In-House Training & Tailor-Made Program"
                            data-category="Diklat Jabatan"
                            data-meta="September 2025 • Mitra Korporat"
                            data-desc="Penyelenggaraan pelatihan internal di tempat mitra yang dirancang presisi sesuai tantangan bisnis dan budaya organisasi perusahaan.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </button>

                        <div class="absolute bottom-3 left-3.5 right-3.5 flex items-center justify-between text-white/90 text-xs font-medium">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-purple-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                On-Site Partner
                            </span>
                            <span class="bg-black/40 px-2 py-0.5 rounded text-[11px] backdrop-blur-sm">Sep 2025</span>
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-1 justify-between bg-white">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base sm:text-lg group-hover:text-blue-600 transition-colors duration-200 line-clamp-1 m-0">
                                Tailor-Made In-House Training Korporat
                            </h3>
                            <p class="mt-2 text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-2 m-0">
                                Modul pelatihan eksklusif yang dikustomisasi penuh sesuai target sasaran dan performa organisasi.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-purple-500"></span> Customized Program
                            </span>
                            <button type="button" class="gallery-view-detail text-xs font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors cursor-pointer border-0 bg-transparent p-0 group/link"
                                data-img="{{ asset('images/gambar-programkami5.jpg') }}"
                                data-title="In-House Training & Tailor-Made Program"
                                data-category="Diklat Jabatan"
                                data-meta="September 2025 • Mitra Korporat"
                                data-desc="Penyelenggaraan pelatihan internal di tempat mitra yang dirancang presisi sesuai tantangan bisnis dan budaya organisasi perusahaan.">
                                Lihat Detail
                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Slider Progress / Dots & Indicator Footer -->
        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-200/80">
            <!-- Navigation Dots -->
            <div id="galleryDots" class="flex items-center gap-2"></div>

            <!-- Auto-slide status & Swipe hints -->
            <div class="flex items-center gap-3 text-xs text-slate-500">
                <span class="inline-flex items-center gap-1.5">
                    <span id="galleryAutoStatus" class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span id="galleryAutoText">Auto-slider aktif</span>
                </span>
                <span class="text-slate-300">•</span>
                <span class="inline-flex items-center gap-1">
                    <span>Geser atau klik panah untuk melihat galeri</span>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </span>
            </div>
        </div>
    </div>

    <!-- Interactive Lightbox Modal -->
    <div id="galleryModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-4 transition-all duration-300">
        <div class="relative max-w-2xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 transform scale-95" id="galleryModalContent">
            <!-- Close Button -->
            <button id="galleryModalClose" type="button" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center transition-all duration-200 cursor-pointer border-0 shadow-lg focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Modal Image Preview -->
            <div class="relative h-64 sm:h-80 w-full bg-slate-900 overflow-hidden">
                <img id="galleryModalImg" src="" alt="Gallery Preview" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent"></div>
                <div class="absolute bottom-4 left-6 right-6">
                    <span id="galleryModalCategory" class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-blue-600 text-white mb-2 shadow-sm">
                        Kategori
                    </span>
                    <h3 id="galleryModalTitle" class="text-xl sm:text-2xl font-bold text-white drop-shadow m-0">
                        Judul Galeri
                    </h3>
                </div>
            </div>

            <!-- Modal Content Body -->
            <div class="p-6 bg-white">
                <div class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-3" id="galleryModalMeta">
                    <span>Tanggal & Lokasi</span>
                </div>
                <p id="galleryModalDesc" class="text-slate-700 text-sm sm:text-base leading-relaxed m-0">
                    Deskripsi dokumentasi kegiatan.
                </p>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs text-slate-400 font-medium">Denpasar Institute • Dokumentasi Resmi</span>
                    <button id="galleryModalCloseBtn" type="button" class="px-5 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold transition-colors duration-200 shadow-sm shadow-blue-500/30 cursor-pointer border-0">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Slider JavaScript Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('galleryTrack');
    const prevBtn = document.getElementById('galleryPrevBtn');
    const nextBtn = document.getElementById('galleryNextBtn');
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const cards = Array.from(document.querySelectorAll('.gallery-card'));
    const dotsContainer = document.getElementById('galleryDots');
    const autoText = document.getElementById('galleryAutoText');
    const autoStatus = document.getElementById('galleryAutoStatus');

    // Modal elements
    const modal = document.getElementById('galleryModal');
    const modalContent = document.getElementById('galleryModalContent');
    const modalImg = document.getElementById('galleryModalImg');
    const modalTitle = document.getElementById('galleryModalTitle');
    const modalCategory = document.getElementById('galleryModalCategory');
    const modalMeta = document.getElementById('galleryModalMeta');
    const modalDesc = document.getElementById('galleryModalDesc');
    const modalClose = document.getElementById('galleryModalClose');
    const modalCloseBtn = document.getElementById('galleryModalCloseBtn');

    if (!track) return;

    // Build indicator dots based on visible cards
    function updateDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        const visibleCards = cards.filter(c => !c.classList.contains('hidden'));
        visibleCards.forEach((card, index) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'w-2.5 h-2.5 rounded-full transition-all duration-200 cursor-pointer border-0 p-0 ' + 
                (index === 0 ? 'bg-blue-600 w-6' : 'bg-slate-300 hover:bg-slate-400');
            dot.addEventListener('click', () => {
                const cardLeft = card.offsetLeft - track.offsetLeft;
                track.scrollTo({ left: cardLeft - 16, behavior: 'smooth' });
            });
            dotsContainer.appendChild(dot);
        });
    }
    updateDots();

    // Active dot sync on scroll
    track.addEventListener('scroll', () => {
        const visibleCards = cards.filter(c => !c.classList.contains('hidden'));
        const scrollCenter = track.scrollLeft + track.clientWidth / 3;
        let activeIdx = 0;

        visibleCards.forEach((card, idx) => {
            const cardLeft = card.offsetLeft - track.offsetLeft;
            if (scrollCenter >= cardLeft) {
                activeIdx = idx;
            }
        });

        if (dotsContainer) {
            const dots = dotsContainer.querySelectorAll('button');
            dots.forEach((d, i) => {
                if (i === activeIdx) {
                    d.className = 'w-6 h-2.5 rounded-full bg-blue-600 transition-all duration-200 cursor-pointer border-0 p-0';
                } else {
                    d.className = 'w-2.5 h-2.5 rounded-full bg-slate-300 hover:bg-slate-400 transition-all duration-200 cursor-pointer border-0 p-0';
                }
            });
        }
    }, { passive: true });

    // Scroll step amount
    const getScrollStep = () => {
        const firstCard = track.querySelector('.gallery-card:not(.hidden)');
        return firstCard ? firstCard.offsetWidth + 24 : 360;
    };

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 10) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
            }
        });
    }

    // Filter cards
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.className = 'gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-white/90 hover:bg-blue-50 text-slate-700 hover:text-blue-600 border border-slate-200/80 whitespace-nowrap cursor-pointer';
            });
            this.className = 'gallery-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 bg-blue-600 text-white shadow-sm shadow-blue-500/30 whitespace-nowrap cursor-pointer border-0';

            const filter = this.getAttribute('data-filter');
            cards.forEach(card => {
                const cardCat = card.getAttribute('data-category');
                if (filter === 'all' || cardCat === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            track.scrollTo({ left: 0, behavior: 'smooth' });
            updateDots();
        });
    });

    // Auto sliding functionality
    let autoInterval = null;
    let isUserInteracting = false;

    function startAutoSlide() {
        if (autoInterval) clearInterval(autoInterval);
        autoInterval = setInterval(() => {
            if (isUserInteracting) return;
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 15) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
            }
        }, 4000);
    }

    function pauseAutoSlide() {
        isUserInteracting = true;
        if (autoStatus) autoStatus.className = 'w-2 h-2 rounded-full bg-amber-500';
        if (autoText) autoText.textContent = 'Auto-slider jeda';
    }

    function resumeAutoSlide() {
        isUserInteracting = false;
        if (autoStatus) autoStatus.className = 'w-2 h-2 rounded-full bg-emerald-500 animate-pulse';
        if (autoText) autoText.textContent = 'Auto-slider aktif';
    }

    track.addEventListener('mouseenter', pauseAutoSlide);
    track.addEventListener('mouseleave', resumeAutoSlide);
    track.addEventListener('touchstart', pauseAutoSlide, { passive: true });
    track.addEventListener('touchend', () => setTimeout(resumeAutoSlide, 2000));

    startAutoSlide();

    // Drag to scroll
    let isDown = false;
    let startX = 0;
    let scrollLeftVal = 0;

    track.addEventListener('mousedown', (e) => {
        isDown = true;
        pauseAutoSlide();
        startX = e.pageX - track.offsetLeft;
        scrollLeftVal = track.scrollLeft;
    });

    track.addEventListener('mouseleave', () => {
        isDown = false;
    });

    track.addEventListener('mouseup', () => {
        isDown = false;
    });

    track.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - track.offsetLeft;
        const walk = (x - startX) * 1.5;
        track.scrollLeft = scrollLeftVal - walk;
    });

    // Modal / Lightbox handling
    function openModal(data) {
        pauseAutoSlide();
        modalImg.src = data.img;
        modalTitle.textContent = data.title;
        modalCategory.textContent = data.category;
        modalMeta.textContent = data.meta;
        modalDesc.textContent = data.desc;

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }, 10);
    }

    function closeModal() {
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            resumeAutoSlide();
        }, 200);
    }

    document.querySelectorAll('.gallery-zoom-btn, .gallery-view-detail').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openModal({
                img: btn.getAttribute('data-img'),
                title: btn.getAttribute('data-title'),
                category: btn.getAttribute('data-category'),
                meta: btn.getAttribute('data-meta'),
                desc: btn.getAttribute('data-desc')
            });
        });
    });

    if (modalClose) modalClose.addEventListener('click', closeModal);
    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
});
</script>

<!-- =========================================
     PROGRAM UTAMA SLIDER JAVASCRIPT
========================================= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const programTrack = document.getElementById('programTrack');
    const programPrevBtn = document.getElementById('programPrevBtn');
    const programNextBtn = document.getElementById('programNextBtn');
    const programCards = Array.from(document.querySelectorAll('.program-card'));
    const programDotsContainer = document.getElementById('programDots');
    const programAutoText = document.getElementById('programAutoText');
    const programAutoStatus = document.getElementById('programAutoStatus');

    if (!programTrack) return;

    // Build indicator dots based on cards
    function initProgramDots() {
        if (!programDotsContainer) return;
        programDotsContainer.innerHTML = '';
        programCards.forEach((card, index) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.setAttribute('aria-label', `Program ke-${index + 1}`);
            dot.className = 'w-2.5 h-2.5 rounded-full transition-all duration-200 cursor-pointer border-0 p-0 ' + 
                (index === 0 ? 'bg-blue-600 w-6' : 'bg-slate-300 hover:bg-slate-400');
            dot.addEventListener('click', () => {
                const cardLeft = card.offsetLeft - programTrack.offsetLeft;
                programTrack.scrollTo({ left: cardLeft - 16, behavior: 'smooth' });
            });
            programDotsContainer.appendChild(dot);
        });
    }
    initProgramDots();

    // Active dot sync on scroll
    programTrack.addEventListener('scroll', () => {
        const scrollCenter = programTrack.scrollLeft + programTrack.clientWidth / 3;
        let activeIdx = 0;

        programCards.forEach((card, idx) => {
            const cardLeft = card.offsetLeft - programTrack.offsetLeft;
            if (scrollCenter >= cardLeft) {
                activeIdx = idx;
            }
        });

        if (programDotsContainer) {
            const dots = programDotsContainer.querySelectorAll('button');
            dots.forEach((d, i) => {
                if (i === activeIdx) {
                    d.className = 'w-6 h-2.5 rounded-full bg-blue-600 transition-all duration-200 cursor-pointer border-0 p-0';
                } else {
                    d.className = 'w-2.5 h-2.5 rounded-full bg-slate-300 hover:bg-slate-400 transition-all duration-200 cursor-pointer border-0 p-0';
                }
            });
        }
    }, { passive: true });

    // Scroll step amount
    const getProgramScrollStep = () => {
        const firstCard = programTrack.querySelector('.program-card');
        return firstCard ? firstCard.offsetWidth + 24 : 340;
    };

    if (programPrevBtn) {
        programPrevBtn.addEventListener('click', () => {
            programTrack.scrollBy({ left: -getProgramScrollStep(), behavior: 'smooth' });
        });
    }

    if (programNextBtn) {
        programNextBtn.addEventListener('click', () => {
            const maxScroll = programTrack.scrollWidth - programTrack.clientWidth;
            if (programTrack.scrollLeft >= maxScroll - 15) {
                programTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                programTrack.scrollBy({ left: getProgramScrollStep(), behavior: 'smooth' });
            }
        });
    }

    // Auto sliding functionality
    let autoInterval = null;
    let isUserInteracting = false;

    function startProgramAutoSlide() {
        if (autoInterval) clearInterval(autoInterval);
        autoInterval = setInterval(() => {
            if (isUserInteracting) return;
            const maxScroll = programTrack.scrollWidth - programTrack.clientWidth;
            if (programTrack.scrollLeft >= maxScroll - 15) {
                programTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                programTrack.scrollBy({ left: getProgramScrollStep(), behavior: 'smooth' });
            }
        }, 4000);
    }

    function pauseProgramAutoSlide() {
        isUserInteracting = true;
        if (programAutoStatus) programAutoStatus.className = 'w-2 h-2 rounded-full bg-amber-500';
        if (programAutoText) programAutoText.textContent = 'Auto-slider jeda';
    }

    function resumeProgramAutoSlide() {
        isUserInteracting = false;
        if (programAutoStatus) programAutoStatus.className = 'w-2 h-2 rounded-full bg-emerald-500 animate-pulse';
        if (programAutoText) programAutoText.textContent = 'Auto-slider aktif';
    }

    programTrack.addEventListener('mouseenter', pauseProgramAutoSlide);
    programTrack.addEventListener('mouseleave', resumeProgramAutoSlide);
    programTrack.addEventListener('touchstart', pauseProgramAutoSlide, { passive: true });
    programTrack.addEventListener('touchend', () => setTimeout(resumeProgramAutoSlide, 2000));

    startProgramAutoSlide();

    // Drag to scroll
    let isDown = false;
    let startX = 0;
    let scrollLeftVal = 0;
    let hasDragged = false;

    programTrack.addEventListener('mousedown', (e) => {
        isDown = true;
        hasDragged = false;
        pauseProgramAutoSlide();
        startX = e.pageX - programTrack.offsetLeft;
        scrollLeftVal = programTrack.scrollLeft;
    });

    programTrack.addEventListener('mouseleave', () => {
        isDown = false;
    });

    programTrack.addEventListener('mouseup', () => {
        isDown = false;
    });

    programTrack.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - programTrack.offsetLeft;
        const walk = (x - startX) * 1.5;
        if (Math.abs(walk) > 6) {
            hasDragged = true;
        }
        programTrack.scrollLeft = scrollLeftVal - walk;
    });

    // Prevent accidental navigation when user dragged the cards
    programTrack.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', (e) => {
            if (hasDragged) {
                e.preventDefault();
                hasDragged = false;
            }
        });
    });
});
</script>

<section class="section-4 relative overflow-hidden bg-[#020617] text-white border-t border-white/10">
        <style>
            .section-4 { background:#020617 !important; padding:0 !important; }
            #footerTopShimmer{ background:linear-gradient(90deg, transparent, rgba(56,189,248,.45), rgba(59,130,246,.55), rgba(249,115,22,.35), transparent); background-size:200% 100%; animation:footerShimmer 3.2s linear infinite; }
            @keyframes footerShimmer{ 0%{background-position:-200% 0} 100%{background-position:200% 0} }
            .footer-grid a, .footer-grid p{ transition: color .2s ease, transform .2s ease; }
            .footer-grid a:hover{ color:#38bdf8 !important; transform:translateX(4px); }
            .footer-social a{ transition: transform .25s ease, background .25s ease, border-color .25s ease, box-shadow .25s ease; }
            .footer-social a:hover{ transform:translateY(-3px) scale(1.05); background:#2563EB !important; border-color:#2563EB !important; box-shadow:0 10px 28px rgba(37,99,235,.45); }
            .footer-contact-row{ transition: background .25s ease, border-color .25s ease, transform .25s ease; }
            .footer-contact-row:hover{ background:rgba(255,255,255,.08) !important; border-color:rgba(255,255,255,.14) !important; transform:translateX(4px); }
            .footer-contact-row:hover .footer-icon-box{ transform:rotate(-6deg) scale(1.06); }
            .footer-dot{ animation:footerPulse 2s ease-in-out infinite; }
            @keyframes footerPulse{ 0%,100%{opacity:.55; transform:scale(1)} 50%{opacity:1; transform:scale(1.25)} }
        </style>
        <div id="footerTopShimmer" class="h-[1px] w-full opacity-80"></div>
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute -top-28 -left-40 w-[560px] h-[560px] bg-blue-600/20 rounded-full blur-[90px]"></div>
            <div class="absolute top-10 right-0 w-[420px] h-[420px] bg-cyan-500/14 rounded-full blur-[80px]"></div>
            <div class="absolute bottom-0 left-1/3 w-[700px] h-[320px] bg-indigo-600/12 rounded-full blur-[80px]"></div>
            <div class="absolute inset-0 opacity-[0.035]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 28px 28px;"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-10">
            <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.06] backdrop-blur-xl p-5 sm:p-6 flex flex-col lg:flex-row lg:items-center justify-between gap-5 shadow-[0_20px_60px_rgba(0,0,0,.35)]">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 via-indigo-500/15 to-cyan-500/15 pointer-events-none"></div>
                <div class="absolute -right-16 -top-16 w-56 h-56 bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative flex items-start gap-4">
                    <div class="hidden sm:flex w-11 h-11 rounded-xl bg-white text-blue-600 items-center justify-center shadow-lg shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h3 class="m-0 text-white font-extrabold text-[17px] sm:text-lg leading-tight">Siap Akselerasi SDM Organisasi Anda?</h3>
                        <p class="m-0 mt-1 text-slate-300 text-xs sm:text-sm leading-relaxed max-w-xl">Konsultasi gratis dengan tim Denpasar Institute — kami bantu petakan kebutuhan SOP, diklat &amp; asesmen kompetensi.</p>
                    </div>
                </div>
                <div class="relative flex items-center gap-3 shrink-0">
                    <a href="#program" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-slate-900 text-sm font-bold shadow-lg hover:bg-blue-600 hover:text-white transition-colors duration-200 no-underline">Ajukan Kolaborasi <span class="w-7 h-7 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs">↗</span></a>
                    <a href="#tentang-kami" class="hidden sm:inline-flex items-center gap-2 px-5 py-3 rounded-full border border-white/20 bg-white/5 text-white text-sm font-semibold backdrop-blur hover:bg-white hover:text-slate-900 transition-colors duration-200 no-underline">Tentang Kami</a>
                </div>
            </div>
        </div>
        <div class="footer-utama relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-6 !bg-transparent !justify-start">
            <div class="lg:col-span-5 footer-kiri">
                <div class="logo-footer-atas flex items-center gap-3 !justify-start">
                    <div class="w-[52px] h-[52px] rounded-2xl bg-white flex items-center justify-center shadow-[0_8px_28px_rgba(37,99,235,.35)] shrink-0">
                        <img class="logo-atas !w-9 !h-9 !object-contain" src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute">
                    </div>
                    <div class="research-footer text-left">
                        <h3 class="m-0 text-white font-extrabold tracking-tight text-[15px] leading-none">DENPASAR INSTITUTE</h3>
                        <p class="m-0 mt-1 inline-flex items-center gap-1.5 text-[11px] font-semibold tracking-[0.18em] !text-[#2563EB] uppercase" style="color:#2563EB !important"><span class="footer-dot w-1.5 h-1.5 rounded-full bg-emerald-400 inline-block"></span> Pusat Kajian Publik - Sejak 2017</p>
                    </div>
                </div>
                <div class="research-kiri !mb-6 mt-4">
                    <p class="m-0 text-slate-300 text-sm leading-relaxed max-w-md">Lembaga riset independen yang menghasilkan penelitian dan analisis kebijakan publik untuk mendukung pembangunan Indonesia yang berkelanjutan, berbasis data &amp; kolaborasi.</p>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-[11px] font-semibold text-slate-200 backdrop-blur">Riset Independen</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-[11px] font-semibold text-slate-200 backdrop-blur">500+ Peserta</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-[11px] font-semibold text-slate-200 backdrop-blur">25+ Pelatihan</span>
                </div>
                <div class="social">
                    <p class="m-0 mb-2 text-[11px] font-semibold tracking-widest uppercase text-slate-400">Ikuti Kami</p>
                    <div class="footer-social logo-utama flex gap-2.5 !justify-start">
                        <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img class="logo-footer !w-4 !h-4 brightness-0 invert opacity-90" src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a>
                        <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img class="logo-footer !w-4 !h-4 brightness-0 invert opacity-90" src="{{ asset('images/twitter.svg') }}" alt="Twitter"></a>
                        <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img class="logo-footer !w-4 !h-4 brightness-0 invert opacity-90" src="{{ asset('images/instagram.svg') }}" alt="Instagram"></a>
                        <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img class="logo-footer !w-4 !h-4 brightness-0 invert opacity-90" src="{{ asset('images/linkledin.svg') }}" alt="LinkedIn"></a>
                        <a href="#" aria-label="YouTube" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img class="logo-footer-5 !w-5 !h-5 brightness-0 invert opacity-90" src="{{ asset('images/youtube.svg') }}" alt="YouTube"></a>
                    </div>
                </div>
            </div>
            <div class="footer-grid footer-tengah lg:col-span-2 lg:pl-4">
                <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-blue-500 inline-block"></span> Navigasi</h2>
                <nav class="flex flex-col gap-2.5">
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline inline-flex items-center gap-2"><span class="opacity-40">›</span> Beranda</a></p>
                    <p class="m-0"><a href="#tentang-kami" class="text-slate-300 text-sm no-underline inline-flex items-center gap-2"><span class="opacity-40">›</span> Tentang</a></p>
                    <p class="m-0"><a href="#galeri" class="text-slate-300 text-sm no-underline inline-flex items-center gap-2"><span class="opacity-40">›</span> Galeri</a></p>
                    <p class="m-0"><a href="#program" class="text-slate-300 text-sm no-underline inline-flex items-center gap-2"><span class="opacity-40">›</span> Program Kami</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline inline-flex items-center gap-2"><span class="opacity-40">›</span> Kontak</a></p>
                </nav>
            </div>
            <div class="footer-grid footer-tengah2 lg:col-span-2">
                <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-cyan-400 inline-block"></span> Program</h2>
                <div class="flex flex-col gap-2">
                    <p class="m-0"><a href="/sop" class="text-slate-300 text-sm no-underline">SOP</a></p>
                    <p class="m-0"><a href="/interview" class="text-slate-300 text-sm no-underline">Interview Coaching</a></p>
                    <p class="m-0"><a href="/diklat" class="text-slate-300 text-sm no-underline">Diklat Jabatan</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline">Karir Dosen</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline">Lokakarya SDM</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline">In House Training</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline">Diklat SDM</a></p>
                    <p class="m-0"><a href="#" class="text-slate-300 text-sm no-underline">Tailor-Made</a></p>
                </div>
            </div>
            <div class="footer-kanan lg:col-span-3">
                <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-orange-400 inline-block"></span> Kontak Kami</h2>
                <div class="flex flex-col gap-3">
                    <div class="footer-contact-row research-footer-kanan flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur">
                        <div class="footer-icon-box footer-1 !gap-0 w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0 shadow"><img class="logo-footer !w-4 !h-4 !m-0" src="{{ asset('images/location.svg') }}" alt="Alamat" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Alamat</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">Jl. Genetri IV, Tonja - Denpasar, Bali</p></div>
                    </div>
                    <div class="footer-contact-row research-footer-kanan flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur">
                        <div class="footer-icon-box footer-2 !gap-0 w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0 shadow"><img class="logo-footer !w-4 !h-4 !m-0" src="{{ asset('images/phone.svg') }}" alt="Telepon" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Telepon</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">(62) 21 8189 896</p></div>
                    </div>
                    <div class="footer-contact-row research-footer-kanan flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur">
                        <div class="footer-icon-box footer-3 !gap-0 w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0 shadow"><img class="logo-footer !w-4 !h-4 !m-0" src="{{ asset('images/email.svg') }}" alt="Email" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Email</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">halo@denpasarinstitute.com</p></div>
                    </div>
                    <a href="https://maps.google.com/?q=Jl.+Genetri+IV+Tonja+Denpasar" target="_blank" class="mt-1 inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold no-underline transition-colors">Lihat di Google Maps <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg></a>
                </div>
            </div>
        </div>
        <div class="relative border-t border-white/10 bg-black/20 backdrop-blur">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
                <p class="m-0 text-xs text-slate-400 text-center sm:text-left">© <span id="footerYear"></span> Denpasar Institute — Pusat Kajian Publik. All rights reserved. <span class="hidden sm:inline text-slate-600">•</span> <span class="text-slate-500"> Crafted with ♥ in Bali</span></p>
                <div class="flex items-center gap-4 text-xs">
                    <a href="#" class="text-slate-400 hover:text-white no-underline transition-colors">Kebijakan Privasi</a>
                    <span class="w-1 h-1 rounded-full bg-white/20"></span>
                    <a href="#" class="text-slate-400 hover:text-white no-underline transition-colors">Syarat Layanan</a>
                    <a href="#" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;" class="ml-2 w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors no-underline" aria-label="Kembali ke atas">↑</a>
                </div>
            </div>
        </div>
        <script>document.getElementById('footerYear').textContent = new Date().getFullYear();</script>
    </section>

<!-- Counter Animation: angka Tentang Kami & Hero berhitung dari 0 saat refresh / scroll masuk -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;

    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function animateCounter(el, delay) {
        if (el.dataset.counted === 'true') return;
        el.dataset.counted = 'true';
        const target = parseInt(el.getAttribute('data-target'), 10);
        if (isNaN(target)) return;
        if (prefersReduced) { el.textContent = target + '+'; return; }

        const duration = 1700;
        const easeOutCubic = t => 1 - Math.pow(1 - t, 3);
        let startTime = null;

        // stagger start
        setTimeout(() => {
            function step(ts) {
                if (startTime === null) startTime = ts;
                const elapsed = ts - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const eased = easeOutCubic(progress);
                const current = Math.floor(eased * target);
                el.textContent = current + '+';
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target + '+';
                    el.classList.add('counter-done');
                }
            }
            requestAnimationFrame(step);
        }, delay);
    }

    // IntersectionObserver: animasi saat elemen terlihat (cover hero + tentang kami)
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const all = Array.from(counters);
                    const idx = all.indexOf(el);
                    animateCounter(el, idx * 140);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.35, rootMargin: '0px 0px -40px 0px' });

        counters.forEach(c => {
            // reset to 0+ sebelum observe agar terlihat berhitung
            if (!c.dataset.counted) c.textContent = '0+';
            io.observe(c);
        });
    } else {
        counters.forEach((c, i) => animateCounter(c, i * 140));
    }
});
</script>
</body>
</html>