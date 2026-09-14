<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOP — Standar Operasional Prosedur | Denpasar Institute</title>
    <meta name="description" content="Pengembangan SOP yang jelas, terukur, dan sesuai karakter organisasi — Denpasar Institute pusat kajian publik sejak 2017.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config={corePlugins:{preflight:false},theme:{extend:{fontFamily:{sans:['Poppins','sans-serif']}}}}</script>
    <style>
      html{scroll-behavior:smooth}
      body{margin:0;background:#f8fafc;font-family:'Poppins',sans-serif}
      /* ensure Tailwind preflight false doesn't break box sizing */
      *,*::before,*::after{box-sizing:border-box}
    </style>
</head>
<body class="antialiased">

<!-- ===== ELEGANT NAV — same as beranda ===== -->
<nav id="navbar" class="elegant-nav">
    <div class="elegant-nav-inner">
        <a href="/" class="nav-brand">
            <span class="nav-logo-wrap"><img src="{{ asset('images/logoDI.png') }}" alt="Denpasar Institute" class="nav-logo"></span>
            <span class="nav-brand-text">
                <span class="nav-brand-title">Denpasar Institute</span>
                <span class="nav-brand-sub">PUSAT KAJIAN PUBLIK — SEJAK 2017</span>
            </span>
        </a>
        <div class="nav-links-pill" id="navLinksPill">
            <a href="/" class="nav-link" data-label="Beranda">Beranda</a>
            <a href="/#tentang-kami" class="nav-link" data-label="Tentang">Tentang</a>
            <a href="/#galeri" class="nav-link" data-label="Galeri">Galeri</a>
            <a href="/#program" class="nav-link active" data-label="Program">Program</a>
        </div>
        <div class="nav-actions">
            <a href="#kontak-sop" class="nav-cta-elegant"><span>Hubungi Kami</span><span class="nav-cta-arrow">↗</span></a>
            <button id="navToggle" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span class="nav-toggle-bar"></span><span class="nav-toggle-bar"></span><span class="nav-toggle-bar"></span>
            </button>
        </div>
    </div>
    <div id="navMobile" class="nav-mobile">
        <a href="/" class="nav-mobile-link">Beranda</a>
        <a href="/#tentang-kami" class="nav-mobile-link">Tentang</a>
        <a href="/#galeri" class="nav-mobile-link">Galeri</a>
        <a href="/#program" class="nav-mobile-link active">Program</a>
        <a href="#kontak-sop" class="nav-mobile-cta">Hubungi Kami ↗</a>
    </div>
</nav>

<!-- ===== HERO ELEGANT ===== -->
<section class="relative overflow-hidden bg-[#020617] isolate">
    <style>
      #heroSopCard{animation: sopFloat 6s ease-in-out infinite}
      @keyframes sopFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
      .sop-glow{animation: sopGlow 8s ease-in-out infinite alternate}
      @keyframes sopGlow{0%{transform:translate(0,0) scale(1);opacity:.55}100%{transform:translate(16px,-12px) scale(1.07);opacity:.85}}
    </style>
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="sop-glow absolute -top-28 -left-40 w-[760px] h-[760px] bg-blue-600/20 rounded-full blur-[110px]"></div>
        <div class="sop-glow absolute top-8 right-[-120px] w-[600px] h-[600px] bg-indigo-500/16 rounded-full blur-[110px]" style="animation-delay:1s"></div>
        <div class="sop-glow absolute bottom-[-80px] left-1/3 w-[820px] h-[420px] bg-cyan-500/10 rounded-full blur-[100px]" style="animation-delay:.6s"></div>
        <div class="absolute inset-0 opacity-[0.035]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 28px 28px;"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#020617]/55"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-10 sm:pb-14">
        <!-- breadcrumb -->
        <div class="flex flex-wrap items-center gap-2 text-[12px]">
            <a href="/" class="text-slate-400 hover:text-white no-underline">Beranda</a>
            <span class="text-slate-600">›</span>
            <a href="/#program" class="text-slate-400 hover:text-white no-underline">Program</a>
            <span class="text-slate-600">›</span>
            <span class="text-white font-semibold">SOP</span>
            <span class="ml-2 hidden sm:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-500/15 border border-emerald-400/20 text-emerald-300 text-[11px] font-semibold tracking-widest uppercase">Layanan Unggulan</span>
        </div>

        <div class="mt-7 grid lg:grid-cols-12 gap-10 lg:gap-8 items-center">
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.07] border border-white/10 backdrop-blur text-[11px] font-semibold tracking-[0.16em] uppercase text-blue-200">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,.8)] animate-pulse"></span>
                    Standar Operasional Prosedur
                    <span class="hidden sm:inline-flex ml-2 pl-2 border-l border-white/15 text-white/60 tracking-normal normal-case text-[11px] font-medium">Bali • Nasional</span>
                </div>
                <h1 class="m-0 mt-4 font-extrabold tracking-tight leading-[0.92] text-white">
                    <span class="block text-[34px] sm:text-[44px] lg:text-[56px]">STANDAR</span>
                    <span class="block text-[34px] sm:text-[44px] lg:text-[56px]">OPERASIONAL</span>
                    <span class="block font-['Cormorant_Garamond'] italic font-light text-[42px] sm:text-[54px] lg:text-[66px] leading-none mt-1 bg-gradient-to-r from-blue-400 via-indigo-300 to-cyan-300 bg-clip-text text-transparent">Prosedur</span>
                </h1>
                <div class="mt-5 w-20 h-[3px] rounded-full bg-gradient-to-r from-blue-500 via-indigo-500 to-cyan-400"></div>
                <p class="m-0 mt-5 text-slate-300 text-sm sm:text-[15px] leading-relaxed max-w-xl">
                    SOP yang <span class="text-white font-medium">jelas, terukur, dan sesuai karakter organisasi</span> — mengurangi kesalahan, mempercepat onboarding, dan memastikan layanan tetap berjalan dalam berbagai situasi.
                </p>
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur">✦ Standarisasi Kerja</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur">✦ Akuntabilitas</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs font-medium text-slate-200 backdrop-blur">✦ Efisiensi Organisasi</span>
                </div>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#kontak-sop" class="inline-flex items-center gap-2 pl-6 pr-2 py-2 rounded-full bg-white text-slate-900 text-sm font-bold shadow-[0_10px_30px_rgba(0,0,0,.25)] no-underline hover:translate-y-[-2px] transition-transform">Konsultasi SOP <span class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">↗</span></a>
                    <a href="#manfaat" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/10 border border-white/20 backdrop-blur text-white text-sm font-semibold no-underline hover:bg-white hover:text-slate-900 transition-colors">Lihat Manfaat</a>
                </div>
                <div class="mt-8 flex items-center gap-3 text-slate-400 text-xs">
                    <span class="inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Permenpan No. PER/21/M-PAN/11/2008</span>
                    <span class="w-1 h-1 rounded-full bg-white/20"></span>
                    <span>Tailor-made sesuai cakupan kerja</span>
                </div>
            </div>

            <!-- Card visual -->
            <div class="lg:col-span-5 relative flex items-center justify-center lg:justify-end">
                <div class="absolute w-[420px] h-[420px] bg-gradient-to-br from-blue-600/25 via-indigo-500/20 to-cyan-400/15 rounded-full blur-[50px] -z-10"></div>
                <div id="heroSopCard" class="relative w-[320px] sm:w-[380px] bg-white rounded-[2rem] shadow-[0_30px_80px_rgba(0,0,0,.5),0_8px_24px_rgba(37,99,235,.15)] border border-white/20 overflow-hidden">
                    <div class="h-1.5 w-full bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400"></div>
                    <div class="p-7 sm:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white shadow-lg">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6M9 16h6M9 8h6M4 6a2 2 0 012-2h6l5 5v9a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"/></svg>
                            </div>
                            <span class="px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-[11px] font-bold tracking-widest uppercase">SOP • Ready to implement</span>
                        </div>
                        <div class="mt-5 mx-auto w-[132px] h-[132px] rounded-[1.5rem] bg-gradient-to-br from-slate-50 to-blue-50 border border-blue-100 flex items-center justify-center shadow-inner relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/[0.06] to-transparent"></div>
                            <img src="{{ asset('images/LogoSDM.png') }}" alt="Logo SDM" class="relative w-[108px] h-[108px] object-contain drop-shadow-[0_8px_20px_rgba(37,99,235,.18)]">
                        </div>
                        <h3 class="m-0 mt-5 text-center text-slate-900 font-extrabold text-[17px] leading-tight">SOP Development</h3>
                        <p class="m-0 mt-1 text-center text-slate-500 text-xs font-medium tracking-widest uppercase">Denpasar Institute</p>
                        <div class="mt-5 grid grid-cols-3 gap-2 text-center">
                            <div class="rounded-xl bg-slate-50 border border-slate-100 p-2.5"><p class="m-0 text-[10px] font-semibold tracking-widest uppercase text-slate-400">Siklus</p><p class="m-0 text-sm font-extrabold text-slate-900">4 Tahap</p></div>
                            <div class="rounded-xl bg-blue-50 border border-blue-100 p-2.5"><p class="m-0 text-[10px] font-semibold tracking-widest uppercase text-blue-600">Manfaat</p><p class="m-0 text-sm font-extrabold text-blue-700">9 Poin</p></div>
                            <div class="rounded-xl bg-slate-50 border border-slate-100 p-2.5"><p class="m-0 text-[10px] font-semibold tracking-widest uppercase text-slate-400">Model</p><p class="m-0 text-sm font-extrabold text-slate-900">Tailor-Made</p></div>
                        </div>
                        <div class="mt-5 flex items-center justify-between p-3 rounded-xl bg-slate-900 text-white">
                            <div><p class="m-0 text-[11px] tracking-widest uppercase text-slate-400">Konsultasi awal</p><p class="m-0 text-sm font-bold">Gratis & terjadwal</p></div>
                            <span class="w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center">›</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== INTRO + WHY ===== -->
<section class="relative bg-[#f8fafc]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 items-start">
            <div class="lg:col-span-5">
                <div class="relative rounded-[1.75rem] bg-white border border-slate-200 shadow-[0_16px_40px_rgba(15,23,42,.08)] overflow-hidden p-6 sm:p-7">
                    <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400"></div>
                    <div class="w-11 h-11 rounded-xl bg-blue-600 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="m-0 mt-4 text-slate-900 font-extrabold text-[18px] leading-tight">Mengapa SOP itu krusial?</h2>
                    <p class="m-0 mt-2 text-slate-600 text-sm leading-relaxed">
                        Standar Operasional Prosedur memberi kepastian cara kerja, mengurangi kelalaian, dan menjadi acuan pengembangan kompetensi SDM. Dari implementasi SOP, terlihat aspek kompetensi apa yang harus dipenuhi setiap karyawan.
                    </p>
                    <div class="mt-5 grid grid-cols-3 gap-2">
                        <div class="rounded-xl bg-slate-50 border border-slate-100 p-3 text-center"><p class="m-0 text-lg font-extrabold text-slate-900">500+</p><p class="m-0 text-[11px] font-semibold text-slate-500">Peserta</p></div>
                        <div class="rounded-xl bg-slate-50 border border-slate-100 p-3 text-center"><p class="m-0 text-lg font-extrabold text-slate-900">25+</p><p class="m-0 text-[11px] font-semibold text-slate-500">Pelatihan</p></div>
                        <div class="rounded-xl bg-blue-50 border border-blue-100 p-3 text-center"><p class="m-0 text-lg font-extrabold text-blue-700">100%</p><p class="m-0 text-[11px] font-semibold text-blue-600">Terstandar</p></div>
                    </div>
                    <div class="mt-6 rounded-xl bg-slate-900 text-white p-4 flex items-center gap-3">
                        <img src="{{ asset('images/LogoSDM.png') }}" alt="" class="w-10 h-10 object-contain bg-white rounded-lg p-1">
                        <div><p class="m-0 text-xs font-bold">Denpasar Institute</p><p class="m-0 text-[11px] text-slate-400">Pengembangan SDM • Sejak 2017</p></div>
                        <span class="ml-auto text-emerald-400 text-xs font-bold">● Kolaborasi terbuka</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7">
                <p class="m-0 inline-flex items-center gap-2 text-[11px] font-bold tracking-[0.16em] uppercase text-blue-600"><span class="w-6 h-0.5 rounded-full bg-blue-600"></span> Tentang SOP</p>
                <h2 class="m-0 mt-2 text-slate-900 font-extrabold text-[22px] sm:text-[26px] leading-tight">SOP adalah fondasi <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">pengembangan SDM</span> yang berkelanjutan</h2>
                <p class="m-0 mt-3 text-slate-600 text-sm leading-relaxed">
                    Standar Operasional Prosedur (SOP) mampu memberi berbagai macam keuntungan bagi perusahaan, salah satunya untuk mengembangkan sumber daya manusia. Dari implementasi SOP pelatihan dan pengembangan SDM dapat diketahui berbagai aspek kompetensi yang dibutuhkan untuk memenuhi persyaratan implementasi SOP bagi setiap karyawan.
                </p>
                <div class="mt-6 grid sm:grid-cols-3 gap-3">
                    <div class="rounded-2xl bg-white border border-slate-200 p-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center">◎</div>
                        <h3 class="m-0 mt-3 font-bold text-slate-900 text-sm">Konsistensi</h3><p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Cara kerja yang sama, hasil yang terprediksi.</p>
                    </div>
                    <div class="rounded-2xl bg-white border border-slate-200 p-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                        <div class="w-9 h-9 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center">✓</div>
                        <h3 class="m-0 mt-3 font-bold text-slate-900 text-sm">Akuntabilitas</h3><p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Tanggung jawab terdokumentasi jelas.</p>
                    </div>
                    <div class="rounded-2xl bg-white border border-slate-200 p-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                        <div class="w-9 h-9 rounded-xl bg-indigo-50 border border-indigo-100 text-indigo-600 flex items-center justify-center">⬡</div>
                        <h3 class="m-0 mt-3 font-bold text-slate-900 text-sm">Skalabilitas</h3><p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Mudah direplikasi lintas unit & cabang.</p>
                    </div>
                </div>
                <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 text-white p-5 border border-white/10">
                    <p class="m-0 text-sm leading-relaxed text-slate-200">“Pergulatan bisnis menunjukkan organisasi akan mampu bertahan dan terus berkembang jika memiliki <span class="text-white font-semibold">SOP yang jelas dan terukur</span>.”</p>
                    <p class="m-0 mt-2 text-xs text-slate-400">— Denpasar Institute</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SIKLUS SOP ===== -->
<section class="relative bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="m-0 inline-flex items-center gap-2 text-[11px] font-bold tracking-[0.16em] uppercase text-blue-600"><span class="w-6 h-0.5 rounded-full bg-blue-600"></span> Siklus Penyusunan</p>
                <h2 class="m-0 mt-2 text-slate-900 font-extrabold text-[22px] sm:text-[26px] leading-tight">Proses yang <span class="text-blue-600">siklus</span> — dari assessment hingga evaluasi</h2>
                <p class="m-0 mt-2 text-slate-500 text-sm max-w-2xl">Jika hasil evaluasi memerlukan penyempurnaan atau SOP baru, proses kembali ke tahap awal. Pendekatan iteratif memastikan SOP tetap relevan.</p>
            </div>
            <span class="hidden sm:inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900 text-white text-xs font-semibold">4 Tahap • Iteratif</span>
        </div>

        <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="group relative rounded-[1.5rem] bg-slate-50 border border-slate-200 p-5 hover:bg-white hover:shadow-[0_16px_32px_rgba(15,23,42,.08)] hover:-translate-y-1 transition-all">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-xs font-extrabold text-slate-700">01</div>
                <div class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-blue-600 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="m-0 mt-4 font-bold text-slate-900 text-sm">SOP Need Assessment</h3>
                <p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Penilaian kebutuhan — memetakan proses, risiko, dan kompetensi yang dibutuhkan.</p>
                <div class="mt-4 h-1 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="group relative rounded-[1.5rem] bg-slate-50 border border-slate-200 p-5 hover:bg-white hover:shadow-[0_16px_32px_rgba(15,23,42,.08)] hover:-translate-y-1 transition-all">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-xs font-extrabold text-slate-700">02</div>
                <div class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-indigo-600 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </div>
                <h3 class="m-0 mt-4 font-bold text-slate-900 text-sm">SOP Development</h3>
                <p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Pengembangan dokumen SOP yang jelas, ringkas, dan sesuai karakter organisasi.</p>
                <div class="mt-4 h-1 rounded-full bg-gradient-to-r from-indigo-600 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="group relative rounded-[1.5rem] bg-slate-50 border border-slate-200 p-5 hover:bg-white hover:shadow-[0_16px_32px_rgba(15,23,42,.08)] hover:-translate-y-1 transition-all">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-xs font-extrabold text-slate-700">03</div>
                <div class="w-11 h-11 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-emerald-600 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="m-0 mt-4 font-bold text-slate-900 text-sm">SOP Implementation</h3>
                <p class="m-0 mt-1 text-xs text-slate-500 leading-relaxed">Penerapan & sosialisasi, pelatihan pengguna, dan pendampingan awal.</p>
                <div class="mt-4 h-1 rounded-full bg-gradient-to-r from-emerald-500 to-teal-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="group relative rounded-[1.5rem] bg-slate-900 border border-slate-800 p-5 hover:shadow-[0_16px_32px_rgba(15,23,42,.18)] hover:-translate-y-1 transition-all">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white/10 border border-white/15 flex items-center justify-center text-xs font-extrabold text-white">04</div>
                <div class="w-11 h-11 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-cyan-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="m-0 mt-4 font-bold text-white text-sm">Monitoring & Evaluation</h3>
                <p class="m-0 mt-1 text-xs text-slate-400 leading-relaxed">Pemantauan, evaluasi, dan penyempurnaan — kembali ke assessment jika perlu SOP baru.</p>
                <div class="mt-4 h-1 rounded-full bg-gradient-to-r from-cyan-400 to-blue-400"></div>
            </div>
        </div>
        <div class="mt-6 flex flex-wrap items-center gap-3 text-xs text-slate-500">
            <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-blue-600"></span> Siklus berulang</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span>Dokumen hidup — diperbarui sesuai evaluasi</span>
        </div>
    </div>
</section>

<!-- ===== MANFAAT ===== -->
<section id="manfaat" class="relative bg-[#f8fafc]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="max-w-3xl">
            <p class="m-0 inline-flex items-center gap-2 text-[11px] font-bold tracking-[0.16em] uppercase text-blue-600"><span class="w-6 h-0.5 rounded-full bg-blue-600"></span> Manfaat SOP — Permenpan No. PER/21/M-PAN/11/2008</p>
            <h2 class="m-0 mt-2 text-slate-900 font-extrabold text-[22px] sm:text-[26px] leading-tight">9 manfaat nyata SOP bagi organisasi</h2>
            <p class="m-0 mt-2 text-slate-500 text-sm leading-relaxed">Dirangkum dari regulasi dan praktik — SOP membantu staf lebih mandiri, mengurangi intervensi manajemen, dan menjaga mutu layanan.</p>
        </div>

        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- 1 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-blue-600 text-white flex items-center justify-center text-xs font-extrabold">01</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Standarisasi cara kerja</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Memberi standar penyelesaian pekerjaan khusus, mengurangi kesalahan dan kelalaian.</p>
            </div>
            <!-- 2 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-slate-900 text-white flex items-center justify-center text-xs font-extrabold">02</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Kemandirian staf</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Staf lebih mandiri, tidak tergantung intervensi manajemen; mengurangi keterlibatan pimpinan harian.</p>
            </div>
            <!-- 3 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-xs font-extrabold">03</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Akuntabilitas jelas</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Mendokumentasikan tanggung jawab khusus dalam melaksanakan tugas.</p>
            </div>
            <!-- 4 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-xs font-extrabold">04</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Ukuran kinerja</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Ukuran standar kinerja — cara konkret memperbaiki & mengevaluasi usaha.</p>
            </div>
            <!-- 5 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-cyan-600 text-white flex items-center justify-center text-xs font-extrabold">05</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Bahan training</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Menjadi materi onboarding — pegawai baru cepat menguasai tugasnya.</p>
            </div>
            <!-- 6 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center text-xs font-extrabold">06</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Citra efisien</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Menunjukkan organisasi efisien dan dikelola dengan baik.</p>
            </div>
            <!-- 7 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-violet-600 text-white flex items-center justify-center text-xs font-extrabold">07</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Pedoman layanan harian</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Pedoman bagi setiap pegawai unit pelayanan dalam pemberian layanan sehari-hari.</p>
            </div>
            <!-- 8 -->
            <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-rose-600 text-white flex items-center justify-center text-xs font-extrabold">08</span>
                    <h3 class="m-0 font-bold text-slate-900 text-sm">Tanpa tumpang tindih</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-600 leading-relaxed">Menghindari duplikasi tugas; membantu penelusuran kesalahan prosedural.</p>
            </div>
            <!-- 9 -->
            <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-white text-slate-900 flex items-center justify-center text-xs font-extrabold">09</span>
                    <h3 class="m-0 font-bold text-white text-sm">Layanan tetap berjalan</h3>
                </div>
                <p class="m-0 mt-3 text-sm text-slate-300 leading-relaxed">Menjamin proses pelayanan tetap berjalan dalam berbagai situasi.</p>
            </div>
        </div>

        <div class="mt-8 rounded-[1.5rem] bg-white border border-slate-200 p-5 sm:p-6 flex flex-col lg:flex-row gap-5 items-start lg:items-center justify-between shadow-sm">
            <div class="flex gap-4">
                <div class="hidden sm:flex w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 items-center justify-center text-blue-600 shrink-0">✦</div>
                <div>
                    <h3 class="m-0 font-extrabold text-slate-900 text-sm">Denpasar Institute — pengembangan SOP tailor-made</h3>
                    <p class="m-0 mt-1 text-sm text-slate-600 leading-relaxed max-w-2xl">Kami menyesuaikan SOP dengan karakter organisasi dan cakupan kerja lembaga/perusahaan Anda — bukan template generik.</p>
                </div>
            </div>
            <a href="#kontak-sop" class="shrink-0 inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold no-underline transition-colors">Konsultasi kebutuhan →</a>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="kontak-sop" class="relative overflow-hidden bg-[#020617] isolate">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-32 -left-32 w-[640px] h-[640px] bg-blue-600/20 rounded-full blur-[90px]"></div>
        <div class="absolute -bottom-24 -right-24 w-[560px] h-[560px] bg-cyan-500/12 rounded-full blur-[90px]"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12">
        <div class="rounded-[1.75rem] bg-white/[0.06] backdrop-blur border border-white/10 p-6 sm:p-8 flex flex-col lg:flex-row gap-6 items-start lg:items-center justify-between">
            <div>
                <p class="m-0 inline-flex items-center gap-2 text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-300"><span class="w-6 h-0.5 rounded-full bg-cyan-400"></span> Siap menyusun SOP Anda?</p>
                <h2 class="m-0 mt-2 text-white font-extrabold text-[20px] sm:text-[24px] leading-tight">Hubungi kami untuk informasi lebih lanjut</h2>
                <p class="m-0 mt-2 text-slate-300 text-sm max-w-xl">Ceritakan proses & tantangan organisasi Anda — kami bantu merancang SOP yang praktis, mudah diadopsi, dan terukur dampaknya.</p>
                <div class="mt-4 flex flex-wrap gap-2 text-xs">
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-slate-200">Need Assessment gratis</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-slate-200">Jadwal fleksibel</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/10 text-slate-200">Pendampingan implementasi</span>
                </div>
            </div>
            <div class="w-full lg:w-auto shrink-0 flex flex-col gap-3">
                <a href="mailto:halo@denpasarinstitute.com" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white text-slate-900 text-sm font-bold no-underline hover:bg-slate-100 transition-colors">halo@denpasarinstitute.com <span class="w-7 h-7 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs">↗</span></a>
                <a href="tel:+62218189896" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold no-underline transition-colors">☎ (62) 21 8189 896</a>
                <p class="m-0 text-center text-[11px] text-slate-400">Jl. Genetri IV, Tonja — Denpasar, Bali • <a href="https://maps.google.com/?q=Jl.+Genetri+IV+Tonja+Denpasar" target="_blank" class="text-cyan-300 hover:text-white underline decoration-white/20">Lihat peta</a></p>
            </div>
        </div>
        <p class="m-0 mt-6 text-center text-xs text-slate-500">© <span id="footerYearSop"></span> Denpasar Institute — Pusat Kajian Publik. SOP tailor-made untuk organisasi Anda.</p>
    </div>
</section>

<!-- ===== FOOTER WOW — senada beranda ===== -->
<section class="relative overflow-hidden bg-[#020617] border-t border-white/10">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-24 right-10 w-[520px] h-[340px] bg-blue-600/14 rounded-full blur-[80px]"></div>
        <div class="absolute bottom-0 left-0 w-[640px] h-[280px] bg-cyan-500/8 rounded-full blur-[90px]"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-6">
        <div class="lg:col-span-5">
            <div class="flex items-center gap-3">
                <div class="w-[52px] h-[52px] rounded-2xl bg-white flex items-center justify-center shadow-[0_8px_28px_rgba(37,99,235,.35)] shrink-0"><img src="{{ asset('images/logoDI.png') }}" alt="Logo" class="w-9 h-9 object-contain"></div>
                <div>
                    <h3 class="m-0 text-white font-extrabold tracking-tight text-[15px] leading-none">DENPASAR INSTITUTE</h3>
                    <p class="m-0 mt-1 inline-flex items-center gap-1.5 text-[11px] font-semibold tracking-[0.18em] uppercase" style="color:#2563EB"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 inline-block"></span> Pusat Kajian Publik - Sejak 2017</p>
                </div>
            </div>
            <p class="m-0 mt-4 text-slate-300 text-sm leading-relaxed max-w-md">Lembaga riset independen yang menghasilkan penelitian dan analisis kebijakan publik untuk mendukung pembangunan Indonesia yang berkelanjutan, berbasis data & kolaborasi.</p>
            <div class="mt-5 flex gap-2.5">
                <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook" class="w-4 h-4 brightness-0 invert opacity-90"></a>
                <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img src="{{ asset('images/twitter.svg') }}" alt="Twitter" class="w-4 h-4 brightness-0 invert opacity-90"></a>
                <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img src="{{ asset('images/instagram.svg') }}" alt="Instagram" class="w-4 h-4 brightness-0 invert opacity-90"></a>
                <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img src="{{ asset('images/linkledin.svg') }}" alt="LinkedIn" class="w-4 h-4 brightness-0 invert opacity-90"></a>
                <a href="#" aria-label="YouTube" class="w-10 h-10 rounded-full bg-white/10 border border-white/15 backdrop-blur flex items-center justify-center"><img src="{{ asset('images/youtube.svg') }}" alt="YouTube" class="w-5 h-5 brightness-0 invert opacity-90"></a>
            </div>
        </div>
        <div class="lg:col-span-2 lg:pl-4">
            <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-blue-500 inline-block"></span> Navigasi</h2>
            <nav class="flex flex-col gap-2.5">
                <a href="/" class="text-slate-300 text-sm no-underline hover:text-white">› Beranda</a>
                <a href="/#tentang-kami" class="text-slate-300 text-sm no-underline hover:text-white">› Tentang</a>
                <a href="/#galeri" class="text-slate-300 text-sm no-underline hover:text-white">› Galeri</a>
                <a href="/#program" class="text-slate-300 text-sm no-underline hover:text-white">› Program Kami</a>
            </nav>
        </div>
        <div class="lg:col-span-2">
            <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-cyan-400 inline-block"></span> Program</h2>
            <div class="flex flex-col gap-2 text-sm">
                <a href="/sop" class="text-white font-semibold no-underline">SOP</a>
                <a href="/interview" class="text-slate-300 no-underline hover:text-white">Interview Coaching</a>
                <a href="/diklat" class="text-slate-300 no-underline hover:text-white">Diklat Jabatan</a>
                <a href="#" class="text-slate-300 no-underline hover:text-white">In House Training</a>
            </div>
        </div>
        <div class="lg:col-span-3">
            <h2 class="m-0 mb-4 text-white font-bold text-sm tracking-wide flex items-center gap-2"><span class="w-7 h-0.5 rounded-full bg-orange-400 inline-block"></span> Kontak Kami</h2>
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur"><div class="w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0"><img src="{{ asset('images/location.svg') }}" alt="" class="w-4 h-4" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div><div><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Alamat</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">Jl. Genetri IV, Tonja - Denpasar, Bali</p></div></div>
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur"><div class="w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0"><img src="{{ asset('images/phone.svg') }}" alt="" class="w-4 h-4" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div><div><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Telepon</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">(62) 21 8189 896</p></div></div>
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.06] border border-white/10 backdrop-blur"><div class="w-9 h-9 rounded-lg bg-white text-blue-600 flex items-center justify-center shrink-0"><img src="{{ asset('images/email.svg') }}" alt="" class="w-4 h-4" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div><div><p class="m-0 text-[11px] font-semibold tracking-widest uppercase text-slate-400 leading-none">Email</p><p class="m-0 mt-1 text-sm font-medium text-white leading-tight">halo@denpasarinstitute.com</p></div></div>
            </div>
        </div>
    </div>
    <div class="relative border-t border-white/10 bg-black/20 backdrop-blur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="m-0 text-xs text-slate-400 text-center sm:text-left">© <span id="footerYear"></span> Denpasar Institute — Pusat Kajian Publik. All rights reserved.</p>
            <div class="flex items-center gap-4 text-xs">
                <a href="#" class="text-slate-400 hover:text-white no-underline">Kebijakan Privasi</a>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <a href="#" class="text-slate-400 hover:text-white no-underline">Syarat Layanan</a>
                <a href="#" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;" class="ml-2 w-8 h-8 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors no-underline" aria-label="Kembali ke atas">↑</a>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('footerYear').textContent=new Date().getFullYear();
const y2=document.getElementById('footerYearSop'); if(y2) y2.textContent=new Date().getFullYear();
const navbar=document.getElementById('navbar');
const toggle=document.getElementById('navToggle');
const mobile=document.getElementById('navMobile');
if(toggle&&mobile){
  toggle.addEventListener('click',()=>{const o=mobile.classList.toggle('open');toggle.setAttribute('aria-expanded',o?'true':'false');document.body.style.overflow=o?'hidden':'';});
  mobile.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{mobile.classList.remove('open');toggle.setAttribute('aria-expanded','false');document.body.style.overflow='';}));
  document.addEventListener('click',e=>{if(!navbar.contains(e.target)&&mobile.classList.contains('open')){mobile.classList.remove('open');toggle.setAttribute('aria-expanded','false');document.body.style.overflow='';}});
}
window.addEventListener('scroll',()=>{if(!navbar)return;if(window.scrollY>12)navbar.classList.add('scrolled');else navbar.classList.remove('scrolled');},{passive:true});
</script>
</body>
</html>
