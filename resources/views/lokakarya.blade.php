@php
    $title = 'Lokakarya SDM';
    $description = 'Program lokakarya SDM Denpasar Institute untuk meningkatkan keterampilan dan keahlian SDM dalam organisasi.';
    $hero = 'hero-6.png';
    $page = 'lokakarya';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="hero">
        <div class="hero-inner">
            <div class="judul">
                <h1><span class="warna1">LOKAKARYA</span> SDM</h1>
                <p>Pengembangan SDM by Denpasar Institute merupakan salah satu wujud kolaborasi dengan clients and partners dalam membentuk SDM yang berkualitas.</p>
            </div>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap">
            <div class="foto">
                <img src="{{ asset('images/logoSDM.png') }}" alt="Logo program Lokakarya SDM Denpasar Institute" loading="lazy">
            </div>

            <div class="prose">
                <h2>Tujuan Kolaborasi</h2>
                <p>Denpasar Institute sebagai Lembaga Riset dan Pengembangan SDM terus berkolaborasi dengan lembaga pemerintah dan lembaga swasta untuk meningkatkan keterampilan dan keahlian SDM dalam organisasi tersebut. Tujuan utama dari kolaborasi ini adalah untuk melahirkan perubahan sikap pegawai yang positif.</p>
                <p>Secara garis besar, tujuan pengembangan SDM by Denpasar Institute adalah untuk meningkatkan kualitas para pekerja melalui program pendidikan dan pelatihan demi kemajuan perusahaan atau lembaga mitra.</p>

                <h3>Manfaat Lokakarya</h3>
                <ol>
                    <li>Meningkatkan produktivitas pegawai dalam bekerja</li>
                    <li>Mengurangi konflik internal perusahaan</li>
                    <li>Meningkatkan efektifitas dan efisiensi pekerjaan</li>
                    <li>Meningkatkan sikap kepemimpinan</li>
                    <li>Memberikan tingkat pelayanan yang baik kepada konsumen</li>
                    <li>Menciptakan moral yang baik bagi pegawai</li>
                </ol>

                <h3>Bidang Kerjasama</h3>
                <p>Denpasar Institute siap menyelenggarakan lokakarya SDM di bidang berikut:</p>
                <p>Bidang akademik, mencakup:</p>
                <ul>
                    <li>Teknik Mengajar</li>
                    <li>Teknik Penulisan Proposal Penelitian</li>
                    <li>Teknik Penulisan Karya Ilmiah</li>
                    <li>Teknik Penulisan Buku Ajar</li>
                </ul>
                <p>Dan teknik lainnya sesuai kebutuhan clients and partners.</p>

                <p>Bidang non akademik, mencakup:</p>
                <ul>
                    <li>Statistik untuk Perusahaan</li>
                    <li>Statistik untuk Marketing Perusahaan</li>
                    <li>Capacity Building</li>
                    <li>Marketing Digital</li>
                </ul>
                <p>Dan kegiatan non akademik lainnya sesuai kesepakatan kerja sama.</p>

                <p class="cta-line">Hubungi kami untuk program kerjasama bidang seminar dan lokakarya SDM untuk lembaga Anda.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
