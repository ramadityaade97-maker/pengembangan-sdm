<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denpasar Institute · Pusat Kajian Publik</title>
    <meta name="description" content="Lembaga riset independen untuk kebijakan publik: pengembangan SDM, lokakarya, dan program pelatihan yang disesuaikan dengan kebutuhan organisasi.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Petit+Formal+Script&display=swap" rel="stylesheet">
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
        <a href="/" class="nav-brand">
            <span class="nav-logo-wrap">
                <img src="{{ asset('images/logoDI.png') }}" alt="Denpasar Institute" class="nav-logo">
            </span>
            <span class="nav-brand-text">
                <span class="nav-brand-title">Denpasar Institute</span>
                <span class="nav-brand-sub">PUSAT KAJIAN PUBLIK · SEJAK 2017</span>
            </span>
        </a>

        <!-- Desktop links pill -->
        <div class="nav-links-pill" id="navLinksPill">
            <a href="/" class="nav-link active" data-label="Beranda">Beranda</a>
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
        <a href="/" class="nav-mobile-link active">Beranda</a>
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
            /* This button is bg-white, and the colour was being computed as
               white too, so the label was invisible at every width. The
               text-slate-900 utility in the markup was losing the cascade against
               an inherited colour. Setting it here makes the pairing explicit
               instead of depending on which utility wins. */
            .hero-cta-primary{ transition: all .25s ease; color:#0F172A; }
            .hero-cta-primary:hover{ transform:translateY(-2px); box-shadow:0 16px 32px rgba(37,99,235,.35); }
            .hero-cta-secondary{ transition: all .25s ease; }
            .hero-cta-secondary:hover{ transform:translateY(-2px); }
        </style>
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute inset-0" style="background:radial-gradient(120% 80% at 12% 0%, #10306b 0%, #020617 58%);"></div>
        </div>

        <div id="heroElegant" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-10 sm:pb-12">
            <div class="mt-8 grid lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                <div class="lg:col-span-7">
                    <h1 class="m-0 display-type display-type-xl text-white">
                        <span class="block">Divisi</span>
                        <span class="block">Pengembangan</span>
                        <span class="block display-accent">Sumber Daya Manusia</span>
                    </h1>
                    <div class="mt-5 w-20 h-[3px] bg-[#60A5FA]"></div>
                    <p class="m-0 mt-5 text-slate-300 text-sm sm:text-[15px] leading-relaxed max-w-xl">
                        Divisi Pengembangan SDM Denpasar Institute terbuka untuk kerja sama <span class="text-white font-medium">pelatihan, asesmen kompetensi,</span> dan pengembangan karier karyawan yang dirancang elegan, terukur, dan berdampak untuk organisasi modern.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2">
                        <span class="inline-flex items-center gap-2 text-xs font-medium text-slate-300"><svg class="w-4 h-4 text-[#8FC0F7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> SOP Terstandarisasi</span>
                        <span class="inline-flex items-center gap-2 text-xs font-medium text-slate-300"><svg class="w-4 h-4 text-[#8FC0F7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Asesmen Kompetensi</span>
                        <span class="inline-flex items-center gap-2 text-xs font-medium text-slate-300"><svg class="w-4 h-4 text-[#8FC0F7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Diklat & Karier</span>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="#program" class="hero-cta-primary inline-flex items-center px-6 py-3 rounded-full bg-white text-slate-900 text-sm font-bold no-underline">
                            Jelajahi Riset
                        </a>
                        <a href="#tentang-kami" class="hero-cta-secondary inline-flex items-center px-6 py-3 rounded-full border border-white/25 text-white text-sm font-semibold no-underline hover:bg-white hover:text-slate-900 hover:border-white">
                            Tentang Kami
                        </a>
                        <a href="#program" class="hidden sm:inline-flex items-center gap-2 text-slate-400 text-xs font-medium no-underline hover:text-white transition-colors">
                            <span class="w-8 h-8 rounded-full border border-white/15 flex items-center justify-center"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                            Lihat Program
                        </a>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-2 text-xs text-slate-400">
                        <span>Pelatihan, asesmen kompetensi, dan pengembangan karier</span>
                        <span>Berbasis Needs Analysis Survey</span>
                        <span>Untuk organisasi pemerintah, BUMN, dan swasta</span>
                    </div>
                </div>
                <div class="lg:col-span-5 relative flex items-center justify-center lg:justify-end">
                    <div class="relative w-full max-w-[380px] bg-white rounded-2xl border border-white/15 shadow-[0_24px_60px_rgba(0,0,0,.45)] overflow-hidden">
                        <div class="p-7 sm:p-8 text-center border-b border-slate-100">
                            <div class="mx-auto w-[112px] h-[112px] rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('images/LogoSDM.png') }}" alt="" class="w-[92px] h-[92px] object-contain">
                            </div>
                            <h3 class="m-0 mt-5 text-slate-900 font-bold text-lg leading-tight">Pengembangan SDM</h3>
                            <p class="m-0 mt-1 text-slate-500 text-xs">Denpasar Institute</p>
                            <p class="m-0 mt-3 text-xs text-slate-600 leading-relaxed">Delapan program yang bisa disesuaikan dengan kebutuhan organisasi Anda.</p>
                        </div>
                        <ul class="m-0 p-0 list-none divide-y divide-slate-100">
                            <li><a href="/sop" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>SOP</span><span class="text-slate-400 text-xs">Standar Operasional Prosedur</span></a></li>
                            <li><a href="/interview" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Interview Coaching</span><span class="text-slate-400 text-xs">Teknik wawancara</span></a></li>
                            <li><a href="/diklat" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Diklat Jabatan</span><span class="text-slate-400 text-xs">Level 1 dan 2</span></a></li>
                            <li><a href="/karir-dosen" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Karir Dosen</span><span class="text-slate-400 text-xs">DUPAK dan PAK</span></a></li>
                            <li><a href="/lokakarya" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Lokakarya SDM</span><span class="text-slate-400 text-xs">Akademik dan non-akademik</span></a></li>
                            <li><a href="/training" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>In-House Training</span><span class="text-slate-400 text-xs">Di lokasi perusahaan</span></a></li>
                            <li><a href="/sdm" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Diklat SDM</span><span class="text-slate-400 text-xs">Pendidikan vokasi SKKNI</span></a></li>
                            <li><a href="/tailor" class="flex items-center justify-between gap-3 px-7 py-3.5 min-h-[48px] text-sm text-slate-800 no-underline hover:bg-slate-50"><span>Tailor-Made</span><span class="text-slate-400 text-xs">Sesuai analisis kebutuhan</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10 sm:mt-12 grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                <div class="flex items-center gap-4 p-4 sm:p-5 border-b sm:border-b-0 sm:border-r border-white/10">
                    <div class="w-11 h-11 rounded-lg bg-white/10 text-[#8FC0F7] flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-sm font-bold text-white leading-tight">Delapan program</p>
                        <p class="m-0 mt-1 text-xs text-slate-400">Dari SOP sampai tailor-made</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 sm:p-5 border-b sm:border-b-0 sm:border-r border-white/10">
                    <div class="w-11 h-11 rounded-lg bg-white/10 text-[#8FC0F7] flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-sm font-bold text-white leading-tight">Basis analisis kebutuhan</p>
                        <p class="m-0 mt-1 text-xs text-slate-400">Need Analysis Survey di awal</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 sm:p-5">
                    <div class="w-11 h-11 rounded-lg bg-white/10 text-[#8FC0F7] flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <p class="m-0 text-sm font-bold text-white leading-tight">Standar nasional</p>
                        <p class="m-0 mt-1 text-xs text-slate-400">SKKNI, UU 14/2005, Permenpan 46/2013</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         PROGRAM UTAMA SLIDER (TAILWIND CSS)
    ========================================= -->
    <section id="program" class="relative py-20 bg-gradient-to-b from-slate-50 via-sky-50/40 to-slate-100 text-slate-800 overflow-hidden font-sans border-t border-b border-slate-200/60">
        <style>
            /* Hover clean: tanpa fill gelap, layer tulisan di depan agar selalu terbaca */
            #program .program-card { border-radius:1rem; overflow:hidden; transition: border-color .30s ease, transform .30s ease, box-shadow .30s ease; }
            #program .program-card > div:first-child { position:relative; z-index:1; border-radius:1rem 1rem 0 0; overflow:hidden; } /* image stage: lengkung atas sama card */
            #program .program-card > div:last-child { position:relative; z-index:2; background:#FFFFFF; border-radius:0 0 1rem 1rem; transition: background-color .30s ease, border-color .30s ease; isolation:isolate; } /* text stage: lengkung bawah sama card */
            #program .program-card h3, #program .program-card p, #program .program-card .pc-footer { transition: color .25s ease, background-color .25s ease, border-color .25s ease, transform .25s ease; }
            /* hover: kartu tetap putih, hanya border dan naikit tipis */
            #program .program-card:hover { background:#FFFFFF !important; border-color:#BFDBFE !important; border-radius:1rem !important; box-shadow: 0 6px 16px rgba(15,23,42,.07) !important; transform: translateY(-2px); }
            #program .program-card:hover > div:first-child { border-radius:1rem 1rem 0 0 !important; }
            #program .program-card:hover > div:last-child { background:#FFFFFF !important; border-radius:0 0 1rem 1rem !important; }
            #program .program-card:hover h3 { color:#1E3A8A !important; } /* biru tua: kontras di putih */
            #program .program-card:hover p  { color:#475569 !important; } /* slate-600 */
            #program .program-card:hover .pc-footer { border-color:#E2E8F0 !important; color:#2563EB !important; }
            #program .program-card:hover img { transform: scale(1.03); }
            #program .program-card:focus-visible { outline: 2px solid #2563EB; outline-offset: 2px; }
            @media (prefers-reduced-motion: reduce) {
              #program .program-card, #program .program-card * { transition: none !important; transform: none !important; }
            }
        </style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header & Nav Buttons -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-6">
                <div>
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/90 border border-blue-200 text-blue-700 text-xs font-semibold tracking-wider uppercase mb-3 shadow-sm">
                        
                        Informasi & Layanan
                    </div>
                    <!-- Title -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight leading-tight m-0">
                        Program <span class="text-[#1D4ED8]">Utama</span>
                    </h2>
                    <!-- Subtitle -->
                    <p class="mt-3 text-slate-600 max-w-2xl text-sm sm:text-base leading-relaxed m-0">
                        Temukan berbagai program pengembangan SDM, pelatihan profesional, dan konsultasi institusional yang dirancang untuk mendukung keunggulan kompetitif organisasi Anda.
                    </p>
                </div>

                <!-- Slider Navigation Buttons -->
                <div class="flex items-center gap-3 self-start md:self-end">
                    <button id="programPrevBtn" type="button" aria-label="Program sebelumnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                        <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="programNextBtn" type="button" aria-label="Program berikutnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
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
                    <a href="/sop" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-2.png') }}" alt="SOP" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">📋</span>
                                <span>Standar Prosedur</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 02: Interview Coaching -->
                    <a href="/interview" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-3.png') }}" alt="Interview Coaching" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">🎤</span>
                                <span>Pelatihan Wawancara</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 03: Diklat Jabatan -->
                    <a href="/diklat" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-4.png') }}" alt="Diklat Jabatan" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">🎓</span>
                                <span>Diklat Profesi</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 04: Karir Dosen -->
                    <a href="/karir-dosen" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-5.png') }}" alt="Karir Dosen" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">👨‍🎓</span>
                                <span>Karir Akademik</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 05: Lokakarya SDM -->
                    <a href="/lokakarya" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-6.png') }}" alt="Lokakarya SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">💡</span>
                                <span>Workshop Tematik</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 06: In-House Training -->
                    <a href="/training" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-7.png') }}" alt="In-House Training" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">🏢</span>
                                <span>Pelatihan Khusus</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 07: Diklat SDM -->
                    <a href="/sdm" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-8.png') }}" alt="Diklat SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">📚</span>
                                <span>Pengembangan Talenta</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
                                </div>
                        </div>
                    </a>

                    <!-- Card 08: Tailor-Made -->
                    <a href="/tailor" style="text-decoration: none;" class="program-card group flex-shrink-0 w-[285px] sm:w-[305px] md:w-[318px] min-h-[485px] sm:min-h-[505px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden text-slate-800 no-underline cursor-pointer">
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/hero-9.png') }}" alt="Tailor-Made" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                            
                            <span class="pc-badge absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700 inline-flex items-center gap-2">
                                <span class="text-sm">🎯</span>
                                <span>Program Kustom</span>
                            </span>

                            <span class="absolute top-3.5 right-3.5 px-2 py-0.5 text-xs font-bold bg-black/60 text-white">
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

                            <div class="pc-footer pt-3 border-t border-slate-100 text-xs font-semibold text-[#1D4ED8]">
                                <span class="group-hover:underline">Pelajari program</span>
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
                        <span id="programAutoStatus" class="w-2 h-2 rounded-full bg-emerald-500"></span>
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

<section id="tentang-kami" class="relative py-16 lg:py-24 bg-[#FCFCF9] text-slate-800 font-sans border-y border-[#EDE9E3]">
    <div class="max-w-[1140px] mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl">
            <p class="text-[12px] font-semibold tracking-[0.08em] uppercase text-slate-500">Tentang kami</p>
            <h2 class="section-title mt-3 text-[28px] sm:text-[36px] lg:text-[42px] text-slate-900">
                Membangun SDM yang berdaya saing
            </h2>
            <p class="mt-4 text-[15px] leading-relaxed text-slate-600">
                Divisi Pengembangan SDM Denpasar Institute menyusun program pelatihan yang
                mengikuti kebutuhan nyata di tempat kerja.
            </p>
        </div>

        <div class="mt-14 grid lg:grid-cols-12 gap-10 items-start">

            <div class="lg:col-span-5">
                <img src="{{ asset('images/denpasar-institute.png') }}" alt="Denpasar Institute"
                     class="w-full rounded-xl border border-[#8A8178]">

                <dl class="mt-6 space-y-4">
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-[14px] text-slate-600">Berdiri</dt>
                        <dd class="text-[14px] font-semibold text-slate-900">2017</dd>
                    </div>
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-[14px] text-slate-600">Berbasis di</dt>
                        <dd class="text-[14px] font-semibold text-slate-900">Tonja, Denpasar</dd>
                    </div>
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-[14px] text-slate-600">Acuan vokasi</dt>
                        <dd class="text-[14px] font-semibold text-slate-900">SKKNI</dd>
                    </div>
                </dl>

                <p class="mt-5 text-[13px] leading-relaxed text-slate-500 border-t border-[#EDE9E3] pt-4">
                    Untuk studi jabatan, kami mengacu pada UU Nomor 14 Tahun 2005 tentang
                    Guru dan Dosen.
                </p>
            </div>

            <div class="lg:col-span-7">
                <h3 class="text-[26px] sm:text-[30px] font-semibold leading-[1.15] -tracking-[0.02em] text-slate-900">
                    Lima hal yang kami <span class="accent-script">kerjakan</span>
                </h3>

                <div class="mt-6 rounded-xl bg-white border border-[#8A8178] p-5">
                    <p class="text-[15px] font-semibold text-slate-900">
                        Penguatan kolaborasi tim dan sistem manajemen SDM
                    </p>
                    <p class="mt-1.5 text-[14px] leading-relaxed text-slate-600">
                        Program yang paling sering dibutuhkan organisasi, karena hasil kerja
                        satu tim bergantung pada sistem yang menopangnya.
                    </p>
                </div>

                <ul class="mt-5 space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#78716C] shrink-0" aria-hidden="true"></span>
                        <span class="text-[14px] leading-relaxed text-slate-700">Peningkatan motivasi dan loyalitas</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#78716C] shrink-0" aria-hidden="true"></span>
                        <span class="text-[14px] leading-relaxed text-slate-700">Kompetensi teknis dan manajerial</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#78716C] shrink-0" aria-hidden="true"></span>
                        <span class="text-[14px] leading-relaxed text-slate-700">Karakter dan etika profesional</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#78716C] shrink-0" aria-hidden="true"></span>
                        <span class="text-[14px] leading-relaxed text-slate-700">Produktivitas dan efektivitas kerja</span>
                    </li>
                </ul>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="#program" class="inline-flex items-center px-5 py-2.5 rounded-full bg-slate-900 text-white text-[13px] font-semibold no-underline hover:bg-slate-700 transition-colors">
                        Lihat program
                    </a>
                    <a href="mailto:halo@denpasarinstitute.com" class="inline-flex items-center px-5 py-2.5 rounded-full border border-[#8A8178] text-slate-700 text-[13px] font-semibold no-underline hover:border-slate-500 transition-colors">
                        Ajukan konsultasi
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 grid md:grid-cols-2 gap-6">

            <div class="rounded-xl bg-white border border-[#8A8178] p-6">
                <h3 class="text-[12px] font-semibold tracking-[0.08em] uppercase text-slate-500">Visi</h3>
                <p class="mt-3 text-[16px] leading-relaxed text-slate-700">
                    Menjadi mitra pengembangan SDM yang kompeten dan berdaya saing, sehingga
                    individu dan organisasi mampu bekerja di era digital.
                </p>
            </div>

            <div class="rounded-xl bg-slate-900 p-6 text-white">
                <h3 class="text-[12px] font-semibold tracking-[0.08em] uppercase text-slate-400">Misi</h3>
                <ul class="mt-4 space-y-2.5">
                    <li class="text-[15px] leading-relaxed text-slate-200">Pelatihan yang disusun bersama pemberi kerja</li>
                    <li class="text-[15px] leading-relaxed text-slate-200">Penguatan karakter dan etika profesi</li>
                    <li class="text-[15px] leading-relaxed text-slate-200">Pengembangan kepemimpinan dan kolaborasi</li>
                    <li class="text-[15px] leading-relaxed text-slate-200">Peningkatan produktivitas kerja</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- =========================================
     GALLERY DENPASAR INSTITUTE (CARD SLIDER - TAILWIND CSS)
========================================= -->
<section id="galeri" class="relative py-20 bg-slate-100 text-slate-800 overflow-hidden font-sans border-t border-slate-200">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header & Nav Buttons -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-6">
            <div>
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/90 border border-blue-200 text-blue-700 text-xs font-semibold tracking-wider uppercase mb-3 shadow-sm">
                    
                    Dokumentasi & Galeri
                </div>
                <!-- Title -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight leading-tight m-0">
                    Galeri <span class="text-[#1D4ED8]">Denpasar Institute</span>
                </h2>
                <!-- Subtitle -->
                <p class="mt-3 text-slate-600 max-w-2xl text-sm sm:text-base leading-relaxed m-0">
                    Dokumentasi visual kegiatan pelatihan pengembangan SDM, sertifikasi kepemimpinan, lokakarya strategis, serta penandatanganan kemitraan institusional.
                </p>
            </div>

            <!-- Slider Navigation Buttons -->
            <div class="flex items-center gap-3 self-start md:self-end">
                <button id="galleryPrevBtn" type="button" aria-label="Slide sebelumnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="galleryNextBtn" type="button" aria-label="Slide berikutnya" class="w-12 h-12 rounded-full bg-white hover:bg-blue-600 text-slate-700 hover:text-white border border-slate-200 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 active:scale-95 cursor-pointer group focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="pelatihan">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami1.jpg') }}" alt="Pelatihan SDM Unggul" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-blue-700">
                            Pelatihan SDM
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Jan 2026</span>
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
                            <span class="text-xs text-slate-500">Program inti</span>
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="diklat">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami2.jpg') }}" alt="Interview Coaching" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-slate-800">
                            Diklat Jabatan
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Feb 2026</span>
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="kerjasama">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/Kerjasama.jpg') }}" alt="Penandatanganan Kerjasama" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-slate-800">
                            Kerjasama & MoU
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Des 2025</span>
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="lokakarya">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami3.jpg') }}" alt="Lokakarya SDM" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-slate-800">
                            Lokakarya & Riset
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Nov 2025</span>
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="pelatihan">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami4.jpg') }}" alt="Karir Dosen" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-slate-800">
                            Pelatihan SDM
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Okt 2025</span>
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
                <div class="gallery-card group flex-shrink-0 w-[290px] sm:w-[350px] md:w-[380px] bg-white rounded-xl border border-slate-200 shadow-sm hover:border-slate-300 hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 snap-start flex flex-col overflow-hidden" data-category="diklat">
                    <div class="relative h-56 sm:h-60 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gambar-programkami5.jpg') }}" alt="In House Training" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
                        
                        <span class="absolute top-3.5 left-3.5 px-3 py-1 text-xs font-semibold bg-white text-slate-800">
                            Diklat Jabatan
                        </span>

                        <button type="button" class="gallery-zoom-btn absolute top-3.5 right-3.5 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer border-0" title="Perbesar Foto"
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
                            <span class="bg-black/60 px-2 py-0.5 text-[11px]">Sep 2025</span>
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
                    <span id="galleryAutoStatus" class="w-2 h-2 rounded-full bg-emerald-500"></span>
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
    <div id="galleryModal" role="dialog" aria-modal="true" aria-labelledby="galleryModalTitle" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-4 transition-all duration-300">
        <div class="relative max-w-2xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 transform scale-95" id="galleryModalContent">
            <!-- Close Button -->
            <button id="galleryModalClose" type="button" aria-label="Tutup galeri" class="absolute top-4 right-4 z-20 w-11 h-11 rounded-full bg-black/60 hover:bg-blue-600 text-white flex items-center justify-center transition-colors duration-200 cursor-pointer border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Modal Image Preview -->
            <div class="relative h-64 sm:h-80 w-full bg-slate-900 overflow-hidden">
                <img id="galleryModalImg" src="" alt="Gallery Preview" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent"></div>
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
            dot.className = 'carousel-dot' + (index === 0 ? ' is-active' : '');
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
                    d.className = 'carousel-dot';
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
        if (autoStatus) autoStatus.className = 'w-2 h-2 rounded-full bg-emerald-500';
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
    let lastFocused = null;

    function openModal(data) {
        lastFocused = document.activeElement;
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
            modalClose.focus();
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
            if (lastFocused) lastFocused.focus();
        }, 200);
    }

    // Keep Tab inside the dialog while it is open.
    modal.addEventListener('keydown', (e) => {
        if (e.key !== 'Tab') return;
        const focusable = modal.querySelectorAll('button, [href], [tabindex]:not([tabindex="-1"])');
        if (!focusable.length) return;
        const first = focusable[0];
        const last = focusable[focusable.length - 1];
        if (e.shiftKey && document.activeElement === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    });

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
            dot.className = 'carousel-dot' + (index === 0 ? ' is-active' : '');
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
                    d.className = 'carousel-dot';
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
        if (programAutoStatus) programAutoStatus.className = 'w-2 h-2 rounded-full bg-emerald-500';
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
            /* One hover colour for every link in the footer. These were three
               different blues and the contact rows slid sideways, so the same
               action read as three different actions. */
            .footer-link{ transition: color .15s ease; }
            .footer-link:hover, .footer-link:focus-visible{ color:#93C5FD; }
            .footer-contact-row{ transition: background .15s ease, border-color .15s ease; }
            .footer-contact-row:hover{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.16); }
        </style>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-10">
            <div class="relative overflow-hidden rounded-xl border border-white/35 bg-white/[0.04] p-5 sm:p-6 flex flex-col lg:flex-row lg:items-center justify-between gap-5">
                <div>
                    <h3 class="m-0 text-white font-semibold text-[17px] sm:text-lg leading-tight">Siap Akselerasi SDM Organisasi Anda?</h3>
                    <p class="m-0 mt-1.5 text-slate-300 text-xs sm:text-sm leading-relaxed max-w-xl">Konsultasi dengan tim Denpasar Institute untuk memetakan kebutuhan SOP, diklat, dan asesmen kompetensi.</p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="/kolaborasi" class="inline-flex items-center px-6 py-3 rounded-full bg-white text-slate-900 text-sm font-semibold hover:bg-blue-600 hover:text-white transition-colors duration-200 no-underline">Ajukan Kolaborasi</a>
                    <a href="#tentang-kami" class="hidden sm:inline-flex items-center px-5 py-3 rounded-full border border-white/25 text-white text-sm font-semibold hover:bg-white hover:text-slate-900 transition-colors duration-200 no-underline">Tentang Kami</a>
                </div>
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-6">
            <div class="md:col-span-12 lg:col-span-5">
                <div class="flex items-center gap-3">
                    <div class="w-[52px] h-[52px] rounded-lg bg-white flex items-center justify-center shrink-0">
                        <img class="!w-9 !h-9 object-contain" src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute">
                    </div>
                    <div class="text-left">
                        <h3 class="m-0 text-white font-semibold tracking-tight text-[15px] leading-none">DENPASAR INSTITUTE</h3>
                        <p class="m-0 mt-1.5 text-[11px] font-medium tracking-[0.08em] text-slate-400 uppercase">Pusat Kajian Publik - Sejak 2017</p>
                    </div>
                </div>
                <p class="m-0 mt-6 text-slate-300 text-sm leading-relaxed max-w-md">Lembaga riset independen yang menghasilkan penelitian dan analisis kebijakan publik untuk mendukung pembangunan Indonesia yang berkelanjutan, berbasis data &amp; kolaborasi.</p>
                <div class="flex flex-wrap gap-2 mt-6">
                    <span class="px-3 py-1.5 border border-white/15 text-[11px] font-medium text-slate-300">Riset Independen</span>
                    <span class="px-3 py-1.5 border border-white/15 text-[11px] font-medium text-slate-300">Berdiri sejak 2017</span>
                    <span class="px-3 py-1.5 border border-white/15 text-[11px] font-medium text-slate-300">Tonja, Denpasar</span>
                </div>
            </div>
            <div class="md:col-span-3 lg:col-span-2 lg:pl-4">
                <h2 class="m-0 mb-4 max-md:flex max-md:items-center text-white font-semibold text-sm">Navigasi</h2>
                <nav class="flex flex-col gap-2.5">
                    <a href="/" class="footer-link text-slate-300 text-sm no-underline">Beranda</a>
                    <a href="#tentang-kami" class="footer-link text-slate-300 text-sm no-underline">Tentang</a>
                    <a href="#galeri" class="footer-link text-slate-300 text-sm no-underline">Galeri</a>
                    <a href="#program" class="footer-link text-slate-300 text-sm no-underline">Program Kami</a>
                </nav>
            </div>
            <div class="md:col-span-4 lg:col-span-2">
                <h2 class="m-0 mb-4 max-md:flex max-md:items-center text-white font-semibold text-sm">Program</h2>
                <div class="flex flex-col gap-2">
                    <a href="/sop" class="footer-link text-slate-300 text-sm no-underline">SOP</a>
                    <a href="/interview" class="footer-link text-slate-300 text-sm no-underline">Interview Coaching</a>
                    <a href="/diklat" class="footer-link text-slate-300 text-sm no-underline">Diklat Jabatan</a>
                    <a href="/karir-dosen" class="footer-link text-slate-300 text-sm no-underline">Karir Dosen</a>
                    <a href="/lokakarya" class="footer-link text-slate-300 text-sm no-underline">Lokakarya SDM</a>
                    <a href="/training" class="footer-link text-slate-300 text-sm no-underline">In House Training</a>
                    <a href="/sdm" class="footer-link text-slate-300 text-sm no-underline">Diklat SDM</a>
                    <a href="/tailor" class="footer-link text-slate-300 text-sm no-underline">Tailor-Made</a>
                </div>
            </div>
            <div class="md:col-span-5 lg:col-span-3">
                <h2 class="m-0 mb-4 max-md:flex max-md:items-center text-white font-semibold text-sm">Kontak</h2>
                <div class="flex flex-col gap-3">
                    <div class="footer-contact-row flex items-start gap-3 p-3 border border-white/10">
                        <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><img class="!w-4 !h-4 !m-0" src="{{ asset('images/location.svg') }}" alt="" aria-hidden="true" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-medium tracking-[0.08em] uppercase text-slate-400 leading-none">Alamat</p><p class="m-0 mt-1 text-sm text-white leading-tight">Jl. Genetri IV, Tonja - Denpasar, Bali</p></div>
                    </div>
                    <div class="footer-contact-row flex items-start gap-3 p-3 border border-white/10">
                        <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><img class="!w-4 !h-4 !m-0" src="{{ asset('images/phone.svg') }}" alt="" aria-hidden="true" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-medium tracking-[0.08em] uppercase text-slate-400 leading-none">Telepon</p><a href="tel:+62218189896" class="footer-link m-0 mt-1 inline-block text-sm text-white no-underline leading-tight">+62 21 8189 896</a></div>
                    </div>
                    <div class="footer-contact-row flex items-start gap-3 p-3 border border-white/10">
                        <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><img class="!w-4 !h-4 !m-0" src="{{ asset('images/email.svg') }}" alt="" aria-hidden="true" style="filter: invert(28%) sepia(98%) saturate(2200%) hue-rotate(210deg);"></div>
                        <div class="min-w-0"><p class="m-0 text-[11px] font-medium tracking-[0.08em] uppercase text-slate-400 leading-none">Email</p><a href="mailto:halo@denpasarinstitute.com" class="footer-link m-0 mt-1 inline-block text-sm text-white no-underline leading-tight">halo@denpasarinstitute.com</a></div>
                    </div>
                    <a href="https://maps.google.com/?q=Jl.+Genetri+IV+Tonja+Denpasar" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center justify-center w-full min-h-[44px] px-4 py-2.5 rounded-full border border-white/25 text-white text-xs font-semibold no-underline transition-colors hover:bg-white hover:text-slate-900">Lihat di Google Maps</a>
                </div>
            </div>
        </div>
        <div class="relative border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
                <p class="m-0 text-xs text-slate-400 text-center sm:text-left">&copy; <span id="footerYear"></span> Denpasar Institute, Pusat Kajian Publik.</p>
                <button type="button" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="w-11 h-11 rounded-full bg-white text-slate-900 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors no-underline border-0 cursor-pointer" aria-label="Kembali ke atas"></button>
            </div>
        </div>
        <script>document.getElementById('footerYear').textContent = new Date().getFullYear();</script>
    </section>

</body>
</html>
