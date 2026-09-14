<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diklat Jabatan — Leadership Development | Denpasar Institute</title>
    <meta name="description" content="Diklat Kepemimpinan Level 1 & 2 untuk pejabat pemerintah dan swasta — self mastery, diagnosa perubahan, inovasi, tim efektif, proyek perubahan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config={corePlugins:{preflight:false},theme:{extend:{fontFamily:{sans:['Poppins','sans-serif']}}}}</script>
    <style>html{scroll-behavior:smooth} body{margin:0;background:#f8fafc;font-family:'Poppins',sans-serif} *,*::before,*::after{box-sizing:border-box}</style>
</head>
<body class="antialiased">

<nav id="navbar" class="elegant-nav">
    <div class="elegant-nav-inner">
        <a href="/" class="nav-brand">
            <span class="nav-logo-wrap"><img src="{{ asset('images/logoDI.png') }}" alt="Denpasar Institute" class="nav-logo"></span>
            <span class="nav-brand-text"><span class="nav-brand-title">Denpasar Institute</span><span class="nav-brand-sub">PUSAT KAJIAN PUBLIK — SEJAK 2017</span></span>
        </a>
        <div class="nav-links-pill"><a href="/" class="nav-link">Beranda</a><a href="/#tentang-kami" class="nav-link">Tentang</a><a href="/#galeri" class="nav-link">Galeri</a><a href="/#program" class="nav-link active">Program</a></div>
        <div class="nav-actions"><a href="#kontak-diklat" class="nav-cta-elegant"><span>Konsultasi Diklat</span><span class="nav-cta-arrow">↗</span></a><button id="navToggle" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><span class="nav-toggle-bar"></span><span class="nav-toggle-bar"></span><span class="nav-toggle-bar"></span></button></div>
    </div>
    <div id="navMobile" class="nav-mobile"><a href="/" class="nav-mobile-link">Beranda</a><a href="/#tentang-kami" class="nav-mobile-link">Tentang</a><a href="/#galeri" class="nav-mobile-link">Galeri</a><a href="/#program" class="nav-mobile-link active">Program</a><a href="#kontak-diklat" class="nav-mobile-cta">Konsultasi Diklat ↗</a></div>
</nav>

<section class="relative overflow-hidden bg-[#020617] isolate">
    <div class="absolute inset-0 -z-10">
        <div class="absolute -top-40 -left-40 w-[720px] h-[720px] rounded-full opacity-25" style="background:radial-gradient(circle at 30% 30%, #3b82f6 0%, transparent 60%); filter:blur(40px); animation:glowFloat 8s ease-in-out infinite;"></div>
        <div class="absolute -bottom-40 -right-32 w-[640px] h-[640px] rounded-full opacity-20" style="background:radial-gradient(circle at 70% 70%, #06b6d4 0%, transparent 60%); filter:blur(40px); animation:glowFloat 10s ease-in-out infinite reverse;"></div>
        <div class="absolute inset-0 opacity-[0.04]" style="background-image:linear-gradient(rgba(255,255,255,0.12) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.12) 1px, transparent 1px); background-size:48px 48px;"></div>
    </div>
    <div class="max-w-[1120px] mx-auto px-5 sm:px-6 pt-28 sm:pt-32 pb-10 sm:pb-14">
        <nav class="flex items-center gap-2 text-[11px] tracking-[0.14em] uppercase text-white/55 mb-6">
            <a href="/" class="hover:text-white transition">Beranda</a><span class="opacity-40">/</span><a href="/#program" class="hover:text-white transition">Program</a><span class="opacity-40">/</span><span class="text-white/90">Diklat Jabatan</span>
        </nav>
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur text-white/90 text-xs font-semibold tracking-wide mb-5">
            <span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(16,185,129,0.9)]"></span> Diklat Kepemimpinan • Level 1 & 2
        </div>
        <div class="grid lg:grid-cols-[1.15fr_0.85fr] gap-8 items-start">
            <div>
                <h1 class="font-black leading-[0.92] tracking-[-0.04em] text-white">
                    <span class="block text-[12px] sm:text-[13px] tracking-[0.28em] font-semibold text-white/60 mb-2">LEADERSHIP DEVELOPMENT</span>
                    <span class="block text-[42px] sm:text-[56px] lg:text-[64px]" style="font-family:'Cormorant Garamond',serif; font-weight:300; font-style:italic; letter-spacing:-0.03em;">DIKLAT</span>
                    <span class="block text-[42px] sm:text-[56px] lg:text-[64px] -mt-1">JABATAN</span>
                </h1>
                <p class="mt-4 text-[14px] sm:text-[15px] leading-7 text-white/70 max-w-[560px]">Diklat kepemimpinan untuk meningkatkan kompetensi pejabat di lembaga pemerintah dan swasta — dari <em>taktikal</em> hingga <em>stratejik</em>, berbasis proyek perubahan nyata.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#level" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-sm font-bold shadow-lg hover:shadow-xl transition" style="color:#000 !important">Lihat Level & Kompetensi <span style="color:#000 !important">→</span></a>
                    <a href="#kontak-diklat" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/10 border border-white/20 text-white text-sm font-semibold backdrop-blur hover:bg-white/15 transition">Konsultasi Kurikulum</a>
                </div>
                <div class="mt-7 grid grid-cols-3 gap-3 max-w-[520px]">
                    <div class="rounded-2xl bg-white/10 border border-white/15 backdrop-blur px-4 py-3"><div class="text-[11px] tracking-[0.14em] uppercase text-white/60">Level</div><div class="text-white font-extrabold text-lg leading-none mt-1">1 & 2</div><div class="text-white/60 text-xs mt-1">Taktikal & Stratejik</div></div>
                    <div class="rounded-2xl bg-white/10 border border-white/15 backdrop-blur px-4 py-3"><div class="text-[11px] tracking-[0.14em] uppercase text-white/60">Agenda</div><div class="text-white font-extrabold text-lg leading-none mt-1">5 + 6</div><div class="text-white/60 text-xs mt-1">Pokok + Penunjang</div></div>
                    <div class="rounded-2xl bg-white/10 border border-white/15 backdrop-blur px-4 py-3"><div class="text-[11px] tracking-[0.14em] uppercase text-white/60">Outcome</div><div class="text-white font-extrabold text-lg leading-none mt-1">Proyek</div><div class="text-white/60 text-xs mt-1">Perubahan nyata</div></div>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-[24px] bg-white border border-slate-200 shadow-[0_20px_60px_rgba(15,23,42,0.18)] overflow-hidden">
                    <div class="h-1.5 w-full" style="background:linear-gradient(90deg,#2563EB,#06b6d4)"></div>
                    <div class="p-6 sm:p-7">
                        <div class="inline-flex items-center gap-2 text-[11px] tracking-[0.18em] uppercase font-bold text-[#2563EB]"><span class="w-6 h-[2px] rounded-full" style="background:#2563EB"></span> Kurikulum Inti</div>
                        <h3 class="mt-2 text-[18px] font-extrabold tracking-tight text-[#0f172a]">5 Agenda Pokok + 6 Penunjang</h3>
                        <div class="mt-4 grid grid-cols-1 gap-2 text-sm">
                            <div class="flex gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200"><span class="w-8 h-8 rounded-lg grid place-items-center text-white text-xs font-bold shrink-0" style="background:linear-gradient(135deg,#2563EB,#06b6d4)">1</span><div><div class="font-bold text-[#0f172a]">Self Mastery</div><div class="text-slate-600 text-xs">Penguasaan diri & integritas</div></div></div>
                            <div class="flex gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200"><span class="w-8 h-8 rounded-lg grid place-items-center text-white text-xs font-bold shrink-0" style="background:linear-gradient(135deg,#0ea5e9,#22d3ee)">2</span><div><div class="font-bold text-[#0f172a]">Diagnosa Perubahan</div><div class="text-slate-600 text-xs">Memetakan isu & kebutuhan</div></div></div>
                            <div class="flex gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200"><span class="w-8 h-8 rounded-lg grid place-items-center text-white text-xs font-bold shrink-0" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4)">3</span><div><div class="font-bold text-[#0f172a]">Inovasi • Tim Efektif • Proyek</div><div class="text-slate-600 text-xs">Eksekusi perubahan terukur</div></div></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2 text-[11px] font-semibold">
                            <span class="px-3 py-1.5 rounded-full bg-[#eff6ff] border border-[#bfdbfe] text-[#1d4ed8]">Orientasi Awal & Akhir</span>
                            <span class="px-3 py-1.5 rounded-full bg-white border border-slate-200 text-slate-700">Coaching & Evaluasi</span>
                            <span class="px-3 py-1.5 rounded-full bg-white border border-slate-200 text-slate-700">Lokakarya Penguatan</span>
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block absolute -z-10 -right-6 -bottom-6 w-[220px] h-[220px] rounded-[28px] opacity-60" style="background:radial-gradient(circle at 30% 30%, rgba(37,99,235,0.18), transparent 60%); filter:blur(10px)"></div>
            </div>
        </div>
    </div>
    <style>@keyframes glowFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}</style>
</section>

<section class="max-w-[1120px] mx-auto px-5 sm:px-6 -mt-6 sm:-mt-8 relative z-10">
    <div class="rounded-[20px] bg-white border border-slate-200 shadow-[0_12px_40px_rgba(15,23,42,0.08)] p-6 sm:p-7 grid lg:grid-cols-[1.1fr_0.9fr] gap-6 items-start">
        <div>
            <div class="inline-flex items-center gap-2 text-[11px] tracking-[0.18em] uppercase font-bold text-[#2563EB]"><span class="w-6 h-[2px] rounded-full" style="background:#2563EB"></span> Tentang Program</div>
            <h2 class="mt-2 text-[22px] sm:text-[26px] font-extrabold tracking-tight text-[#0f172a] leading-tight">Diklat yang berorientasi pada <span style="color:#2563EB">dampak</span>, bukan sekadar sertifikat.</h2>
            <p class="mt-3 text-[13.5px] leading-6 text-slate-600">Denpasar Institute membuka program diklat kepemimpinan untuk meningkatkan kompetensi kepemimpinan pejabat di lembaga pemerintah dan swasta. Kurikulum dirancang tailor-made sesuai kebutuhan klien demi efektivitas & efisiensi.</p>
            <div class="mt-5 grid sm:grid-cols-2 gap-3">
                <div class="rounded-2xl bg-[#f8fafc] border border-slate-200 p-4"><div class="text-xs font-extrabold tracking-wide text-[#0f172a]">Mata Diklat Pokok</div><p class="text-xs leading-5 text-slate-600 mt-1">Self mastery, diagnosa perubahan, inovasi, tim efektif, proyek perubahan.</p></div>
                <div class="rounded-2xl bg-[#f8fafc] border border-slate-200 p-4"><div class="text-xs font-extrabold tracking-wide text-[#0f172a]">Mata Diklat Penunjang</div><p class="text-xs leading-5 text-slate-600 mt-1">Orientasi, pembimbingan, evaluasi, lokakarya penguatan kompetensi bidang tugas.</p></div>
            </div>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-gradient-to-br from-[#eff6ff] to-white p-5">
            <div class="text-[11px] tracking-[0.16em] uppercase font-bold text-slate-500">Cocok Untuk</div>
            <ul class="mt-3 space-y-2.5 text-sm">
                <li class="flex gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#2563EB] shrink-0"></span><span class="text-slate-700"><b class="text-[#0f172a]">Pejabat Eselon & Manajer</b> — yang memimpin unit / departemen</span></li>
                <li class="flex gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#2563EB] shrink-0"></span><span class="text-slate-700"><b class="text-[#0f172a]">Instansi Pemerintah & BUMN</b> — penguatan reformasi birokrasi</span></li>
                <li class="flex gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#2563EB] shrink-0"></span><span class="text-slate-700"><b class="text-[#0f172a]">Korporasi Swasta</b> — pipeline leadership & succession</span></li>
            </ul>
            <div class="mt-4 rounded-xl bg-white border border-slate-200 p-3 flex items-center gap-3">
                <span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#2563EB,#06b6d4)">◈</span>
                <div class="text-xs leading-5 text-slate-600"><b class="text-[#0f172a]">Tailor-made</b> — fokus program disesuaikan permintaan klien.</div>
            </div>
        </div>
    </div>
</section>

<section id="level" class="max-w-[1120px] mx-auto px-5 sm:px-6 mt-8">
    <div class="flex items-end justify-between gap-4 flex-wrap">
        <div>
            <div class="inline-flex items-center gap-2 text-[11px] tracking-[0.18em] uppercase font-bold text-[#2563EB]"><span class="w-6 h-[2px] rounded-full" style="background:#2563EB"></span> Jenjang Diklat</div>
            <h2 class="mt-2 text-[24px] sm:text-[28px] font-extrabold tracking-tight text-[#0f172a]">Level 1 — Taktikal & Level 2 — Taktikal + Stratejik</h2>
        </div>
        <p class="text-sm text-slate-500 max-w-[420px]">Pilih jenjang sesuai peran. Keduanya bermuara pada proyek perubahan yang dipresentasikan & dievaluasi.</p>
    </div>
    <div class="mt-6 grid lg:grid-cols-2 gap-5">
        <div class="rounded-[20px] bg-white border border-slate-200 shadow-[0_10px_30px_rgba(15,23,42,0.06)] overflow-hidden">
            <div class="h-1 w-full" style="background:linear-gradient(90deg,#2563EB,#06b6d4)"></div>
            <div class="p-6 sm:p-7">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#eff6ff] border border-[#bfdbfe] text-[#1d4ed8] text-xs font-bold">LEVEL 1 • Taktikal</div>
                <h3 class="mt-3 text-[18px] font-extrabold text-[#0f172a]">Kepemimpinan Taktikal</h3>
                <p class="mt-1.5 text-[13px] leading-6 text-slate-600">Fokus pada eksekusi — menerjemahkan visi menjadi program yang efektif & efisien di level unit.</p>
                <div class="mt-5 space-y-3">
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center text-white text-xs font-bold shrink-0" style="background:#0f172a">1</span><p class="text-[13px] leading-6 text-slate-700"><b class="text-[#0f172a]">Integritas & etika publik</b> — karakter, kepatuhan regulasi, tanggung jawab memimpin unit.</p></div>
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center text-white text-xs font-bold shrink-0" style="background:#0f172a">2</span><p class="text-[13px] leading-6 text-slate-700"><b class="text-[#0f172a]">Menjabarkan visi–misi</b> secara implementatif ke rencana kerja & indikator.</p></div>
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center text-white text-xs font-bold shrink-0" style="background:#0f172a">3</span><p class="text-[13px] leading-6 text-slate-700"><b class="text-[#0f172a]">Kolaborasi internal & eksternal</b> untuk efektivitas–efisiensi program.</p></div>
                </div>
            </div>
        </div>
        <div class="rounded-[20px] bg-[#0f172a] border border-white/10 shadow-[0_20px_50px_rgba(15,23,42,0.28)] overflow-hidden relative">
            <div class="absolute inset-0 opacity-20" style="background:radial-gradient(600px 300px at 80% 0%, #3b82f6 0%, transparent 60%)"></div>
            <div class="relative p-6 sm:p-7">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-white text-xs font-bold backdrop-blur">LEVEL 2 • Taktikal + Stratejik</div>
                <h3 class="mt-3 text-[18px] font-extrabold text-white">Kepemimpinan Stratejik</h3>
                <p class="mt-1.5 text-[13px] leading-6 text-white/70">Naik kelas — merumuskan strategi kebijakan & inovasi agar organisasi lebih adaptif.</p>
                <div class="mt-5 space-y-3">
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center bg-white text-[#0f172a] text-xs font-bold shrink-0">1</span><p class="text-[13px] leading-6 text-white/85"><b class="text-white">Integritas sesuai kepentingan pemerintah / perusahaan</b> — etika & akuntabilitas pada skala organisasi.</p></div>
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center bg-white text-[#0f172a] text-xs font-bold shrink-0">2</span><p class="text-[13px] leading-6 text-white/85"><b class="text-white">Merumuskan strategi kebijakan</b> yang efektif untuk mewujudkan visi organisasi.</p></div>
                    <div class="flex gap-3"><span class="w-7 h-7 rounded-full grid place-items-center bg-white text-[#0f172a] text-xs font-bold shrink-0">3</span><p class="text-[13px] leading-6 text-white/85"><b class="text-white">Inovasi bidang tugas</b> guna mewujudkan strategi yang lebih efektif & efisien.</p></div>
                </div>
                <div class="mt-5 rounded-xl bg-white/10 border border-white/15 backdrop-blur p-3 text-xs leading-5 text-white/80">Rekomendasi untuk pejabat yang menyiapkan <b class="text-white">portofolio kebijakan & inovasi</b> lintas unit.</div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-[1120px] mx-auto px-5 sm:px-6 mt-8">
    <div class="rounded-[20px] bg-white border border-slate-200 shadow-[0_10px_30px_rgba(15,23,42,0.06)] p-6 sm:p-7">
        <div class="grid lg:grid-cols-2 gap-8">
            <div>
                <h3 class="text-[15px] font-extrabold tracking-tight text-[#0f172a]">Mata Diklat — Pokok (5 Agenda)</h3>
                <div class="mt-4 grid gap-3">
                    <div class="flex gap-3 p-3 rounded-xl border border-slate-200 bg-[#f8fafc]"><span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#2563EB,#06b6d4)">①</span><div><div class="text-sm font-bold text-[#0f172a]">Self Mastery</div><div class="text-xs text-slate-600">Penguasaan diri, integritas, etika publik.</div></div></div>
                    <div class="flex gap-3 p-3 rounded-xl border border-slate-200 bg-[#f8fafc]"><span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#0ea5e9,#22d3ee)">②</span><div><div class="text-sm font-bold text-[#0f172a]">Diagnosa Perubahan</div><div class="text-xs text-slate-600">Analisis isu, stakeholder, & peluang.</div></div></div>
                    <div class="flex gap-3 p-3 rounded-xl border border-slate-200 bg-[#f8fafc]"><span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#8b5cf6,#06b6d4)">③</span><div><div class="text-sm font-bold text-[#0f172a]">Inovasi</div><div class="text-xs text-slate-600">Gagasan baru yang implementatif.</div></div></div>
                    <div class="flex gap-3 p-3 rounded-xl border border-slate-200 bg-[#f8fafc]"><span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#f59e0b,#f43f5e)">④</span><div><div class="text-sm font-bold text-[#0f172a]">Tim Efektif</div><div class="text-xs text-slate-600">Kolaborasi & kepemimpinan tim.</div></div></div>
                    <div class="flex gap-3 p-3 rounded-xl border border-slate-200 bg-[#f8fafc]"><span class="w-9 h-9 rounded-xl grid place-items-center text-white shrink-0" style="background:linear-gradient(135deg,#10b981,#06b6d4)">⑤</span><div><div class="text-sm font-bold text-[#0f172a]">Proyek Perubahan</div><div class="text-xs text-slate-600">Implementasi & evaluasi dampak.</div></div></div>
                </div>
            </div>
            <div>
                <h3 class="text-[15px] font-extrabold tracking-tight text-[#0f172a]">Mata Diklat — Penunjang (6 Komponen)</h3>
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Orientasi Awal</div><div class="text-xs text-slate-600 mt-1">Penyamaan persepsi & ekspektasi.</div></div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Orientasi Akhir</div><div class="text-xs text-slate-600 mt-1">Reviu capaian & rencana tindak lanjut.</div></div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Pembimbingan</div><div class="text-xs text-slate-600 mt-1">Coaching proyek perubahan.</div></div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Evaluasi</div><div class="text-xs text-slate-600 mt-1">Asesmen kompetensi & dampak.</div></div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Lokakarya Penguatan</div><div class="text-xs text-slate-600 mt-1">Penguatan kompetensi bidang tugas.</div></div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4"><div class="text-xs font-bold text-[#0f172a]">Seminar / Presentasi</div><div class="text-xs text-slate-600 mt-1">Diseminasi proyek perubahan.</div></div>
                </div>
                <div class="mt-4 rounded-xl bg-[#0f172a] text-white p-4 flex gap-3 items-start">
                    <span class="w-8 h-8 rounded-lg bg-white text-[#0f172a] grid place-items-center shrink-0 font-bold">✦</span>
                    <p class="text-xs leading-5 text-white/85">Kurikulum dikembangkan <b class="text-white">sesuai permintaan klien</b> — fokus & durasi dapat disesuaikan untuk efektivitas & efisiensi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontak-diklat" class="max-w-[1120px] mx-auto px-5 sm:px-6 mt-8 mb-10">
    <div class="rounded-[24px] overflow-hidden border border-slate-200 shadow-[0_20px_60px_rgba(15,23,42,0.12)] bg-white">
        <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-0">
            <div class="p-7 sm:p-8">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900 text-white text-xs font-semibold">Konsultasi Kurikulum • Gratis Need Assessment</div>
                <h3 class="mt-4 text-[22px] sm:text-[26px] font-extrabold tracking-tight leading-tight" style="color:#000">Siap merancang diklat yang <span style="color:#2563EB">berdampak?</span></h3>
                <p class="mt-2 text-sm leading-6" style="color:#000">Ceritakan jenjang, jumlah peserta, dan fokus isu organisasi Anda. Tim kami akan menyusun opsi kurikulum & timeline.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="mailto:halo@denpasarinstitute.com" class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-bold shadow hover:shadow-lg transition" style="background:#0f172a;color:#fff !important">Email Kami <span>✉</span></a>
                    <a href="tel:+62218189896" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white border border-slate-200 text-sm font-semibold hover:bg-slate-50 transition" style="color:#000 !important">Telepon (62) 21 8189 896</a>
                </div>
                <div class="mt-6 flex flex-wrap gap-2 text-[11px] font-semibold">
                    <span class="px-3 py-1.5 rounded-full bg-slate-100 border border-slate-200" style="color:#000">Tailor-made</span>
                    <span class="px-3 py-1.5 rounded-full bg-slate-100 border border-slate-200" style="color:#000">Proyek Perubahan</span>
                    <span class="px-3 py-1.5 rounded-full bg-slate-100 border border-slate-200" style="color:#000">Evaluasi Dampak</span>
                </div>
            </div>
            <div class="p-7 sm:p-8 bg-slate-50 border-t lg:border-t-0 lg:border-l border-slate-200">
                <div class="rounded-2xl bg-white border border-slate-200 p-5">
                    <div class="text-xs font-extrabold tracking-wide" style="color:#000">Alur Singkat</div>
                    <ol class="mt-3 space-y-3 text-sm">
                        <li class="flex gap-3"><span class="w-7 h-7 rounded-full bg-[#0f172a] text-white grid place-items-center text-xs font-bold shrink-0">1</span><span style="color:#000"><b style="color:#000">Need assessment</b> & penentuan level</span></li>
                        <li class="flex gap-3"><span class="w-7 h-7 rounded-full bg-[#0f172a] text-white grid place-items-center text-xs font-bold shrink-0">2</span><span style="color:#000"><b style="color:#000">Penyusunan kurikulum</b> & jadwal</span></li>
                        <li class="flex gap-3"><span class="w-7 h-7 rounded-full bg-[#0f172a] text-white grid place-items-center text-xs font-bold shrink-0">3</span><span style="color:#000"><b style="color:#000">Pelaksanaan & coaching</b> proyek</span></li>
                        <li class="flex gap-3"><span class="w-7 h-7 rounded-full bg-[#0f172a] text-white grid place-items-center text-xs font-bold shrink-0">4</span><span style="color:#000"><b style="color:#000">Evaluasi & lokakarya</b> penguatan</span></li>
                    </ol>
                </div>
                <p class="mt-4 text-xs leading-5" style="color:#000">Butuh in-house di kantor Anda? Kami bisa fasilitasi di lokasi klien maupun venue Denpasar Institute.</p>
            </div>
        </div>
    </div>
</section>

<footer class="relative overflow-hidden bg-[#020617] border-t border-white/10">
    <div class="absolute inset-0 -z-10">
        <div class="absolute -top-24 -left-24 w-[520px] h-[520px] rounded-full opacity-20" style="background:radial-gradient(circle at 30% 30%, #3b82f6 0%, transparent 60%); filter:blur(30px)"></div>
        <div class="absolute -bottom-24 -right-24 w-[520px] h-[520px] rounded-full opacity-15" style="background:radial-gradient(circle at 70% 70%, #06b6d4 0%, transparent 60%); filter:blur(30px)"></div>
    </div>
    <div class="max-w-[1120px] mx-auto px-5 sm:px-6 pt-10 pb-8">
        <div class="grid lg:grid-cols-[1.4fr_0.7fr_0.7fr_1fr] gap-8">
            <div>
                <div class="flex items-center gap-3">
                    <span class="w-11 h-11 rounded-xl bg-white grid place-items-center overflow-hidden shrink-0"><img src="{{ asset('images/logoDI.png') }}" alt="DI" class="w-8 h-8 object-contain"></span>
                    <div><div class="text-white font-extrabold tracking-tight leading-none">DENPASAR INSTITUTE</div><div class="text-[11px] tracking-[0.16em] font-bold" style="color:#60a5fa">PUSAT KAJIAN PUBLIK — SEJAK 2017</div></div>
                </div>
                <p class="mt-4 text-sm leading-6 text-white/65 max-w-[420px]">Lembaga riset independen untuk kebijakan publik berbasis bukti — mendukung pembangunan Indonesia berkelanjutan.</p>
                <div class="mt-5 flex gap-2">
                    <a href="#" aria-label="Facebook" class="w-9 h-9 rounded-full bg-white/10 border border-white/15 grid place-items-center text-white/80 hover:bg-white hover:text-[#0f172a] transition">f</a>
                    <a href="#" aria-label="Twitter" class="w-9 h-9 rounded-full bg-white/10 border border-white/15 grid place-items-center text-white/80 hover:bg-white hover:text-[#0f172a] transition">𝕏</a>
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 border border-white/15 grid place-items-center text-white/80 hover:bg-white hover:text-[#0f172a] transition">◎</a>
                    <a href="#" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white/10 border border-white/15 grid place-items-center text-white/80 hover:bg-white hover:text-[#0f172a] transition">in</a>
                </div>
            </div>
            <div><div class="text-white font-bold text-sm">Navigasi</div><div class="mt-3 space-y-2 text-sm text-white/65"><a href="/" class="block hover:text-white transition">Beranda</a><a href="/#tentang-kami" class="block hover:text-white transition">Tentang</a><a href="/#program" class="block hover:text-white transition">Program</a><a href="/#galeri" class="block hover:text-white transition">Galeri</a></div></div>
            <div><div class="text-white font-bold text-sm">Program</div><div class="mt-3 space-y-2 text-sm text-white/65"><a href="/sop" class="block hover:text-white transition">SOP</a><a href="/interview" class="block hover:text-white transition">Interview Coaching</a><a href="/diklat" class="block hover:text-white transition">Diklat Jabatan</a><a href="/karier dosen" class="block hover:text-white transition">Karir Dosen</a><a href="/lokakarya" class="block hover:text-white transition">Lokakarya SDM</a></div></div>
            <div><div class="text-white font-bold text-sm">Kontak</div><div class="mt-3 space-y-3 text-sm text-white/70"><div class="flex gap-2.5"><span class="mt-0.5">📍</span><span>Jl. Genetri IV, Tonja, Denpasar</span></div><div class="flex gap-2.5"><span>☎</span><span>(62) 21 8189 896</span></div><div class="flex gap-2.5"><span>✉</span><span>halo@denpasarinstitute.com</span></div></div></div>
        </div>
        <div class="mt-8 pt-6 border-t border-white/10 flex flex-col sm:flex-row gap-3 justify-between items-center text-xs text-white/55">
            <div>© 2026 Denpasar Institute. All rights reserved.</div>
            <div class="flex gap-4"><a href="#" class="hover:text-white transition">Kebijakan Privasi</a><a href="#" class="hover:text-white transition">Syarat Layanan</a></div>
        </div>
    </div>
</footer>

<script>
(function(){
  const nav=document.getElementById('navbar'), toggle=document.getElementById('navToggle'), mobile=document.getElementById('navMobile');
  if(toggle && mobile){
    toggle.addEventListener('click', ()=>{
      const open=mobile.classList.toggle('open');
      toggle.classList.toggle('open',open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      nav.classList.toggle('menu-open', open);
    });
    mobile.querySelectorAll('a').forEach(a=>a.addEventListener('click', ()=>{
      mobile.classList.remove('open'); toggle.classList.remove('open'); toggle.setAttribute('aria-expanded','false'); nav.classList.remove('menu-open');
    }));
  }
  const onScroll=()=>{ if(window.scrollY>10) nav.classList.add('scrolled'); else nav.classList.remove('scrolled'); };
  window.addEventListener('scroll', onScroll, {passive:true}); onScroll();
})();
</script>
</body>
</html>