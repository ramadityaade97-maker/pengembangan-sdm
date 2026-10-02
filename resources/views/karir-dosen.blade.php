@php
    $title = 'Karir Dosen';
    $description = 'Pendampingan kenaikan jabatan akademik dosen: DUPAK, PAK, dan konsultasi LLDIKTI bersama Denpasar Institute.';
    $hero = 'hero-3.png';
    $page = 'karir-dosen';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="hero">
        <div class="hero-inner">
            <div class="judul">
                <h1>KARIR <span class="warna1">DOSEN</span></h1>
                <p>Dosen berkewajiban menjadi pendidik profesional dan ilmuwan dengan tugas utama mengembangkan serta menyebarkan ilmu pengetahuan.</p>
            </div>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap">
            <div class="foto">
                <img src="{{ asset('images/logoSDM.png') }}" alt="Logo program Karir Dosen Denpasar Institute" loading="lazy">
            </div>

            <div class="prose">
                <h2>Dasar Hukum</h2>
                <p>Undang-Undang No. 14 Tahun 2005 tentang Guru dan Dosen mewajibkan dosen menjadi pendidik profesional dan ilmuwan dengan tugas utama mentransformasikan, mengembangkan, dan menyebarkan ilmu pengetahuan, teknologi, dan seni melalui pendidikan dan pengajaran, penelitian, serta pengabdian kepada masyarakat.</p>
                <p>Undang-undang ini mengisyaratkan dosen wajib menjadi tenaga profesional dengan jenjang karier yang jelas melalui kenaikan jabatan akademik dosen dan kenaikan pangkat atau golongan.</p>
                <p>Dasar dan mekanisme kenaikan jabatan akademik dosen dengan filosofi pemberian penghargaan sudah dirumuskan secara adil, akuntabel, dan bertanggung jawab. Ketentuan ini tertuang dalam Permenpan dan RB RI Nomor 46 Tahun 2013 tentang Jabatan Dosen dan Angka Kreditnya, dengan penilaian melalui DUPAK.</p>

                <h3>DUPAK dan PAK</h3>
                <p><strong>DUPAK</strong> (Daftar Pengusul Penetapan Angka Kredit) adalah formulir yang berisi keterangan perorangan dosen dan butir kegiatan yang dinilai, wajib diisi oleh dosen pengusul jabatan fungsional dalam rangka penetapan angka kredit.</p>
                <p><strong>PAK</strong> (Penetapan Angka Kredit) adalah formulir yang berisi keterangan perorangan dosen dan satuan nilai dari hasil penilaian butir kegiatan, atau akumulasi nilai butir kegiatan yang telah dicapai dan ditetapkan oleh pejabat yang berwenang.</p>

                <h3>Hal yang Perlu Diperhatikan</h3>
                <ol>
                    <li>Dosen disarankan melihat pengumuman secara rutin, atau berkonsultasi mengenai informasi terkini seputar DUPAK, PAK, dan jadwal usulan kenaikan jenjang jabatan akademik dosen di LLDIKTI wilayahnya masing-masing. Bagi Dosen Tetap Yayasan dan DPK, pengajuan dilakukan pada Perguruan Tinggi masing-masing.</li>
                    <li>Ketidakcukupan waktu dan tantangan syarat administratif dalam mengumpulkan dokumen, pemenuhan kriteria penilaian, pemeriksaan plagiarisme, serta kewajiban dokumen tertelusur secara daring melalui repositori dan website resmi, sering membuat dosen enggan mengajukan kenaikan jabatan secara berkala.</li>
                </ol>

                <h3>Program Pendampingan</h3>
                <p>Denpasar Institute sebagai Lembaga Riset dan Pengembangan SDM rutin melakukan sharing sesi usulan kenaikan jabatan akademik dosen. Pendampingan mencakup informasi, motivasi, serta asistensi pengisian DUPAK untuk jenjang Asisten Ahli, Lektor, Lektor Kepala, dan Guru Besar.</p>
                <p>Kendala umum bagi dosen untuk naik jenjang jabatan akademiknya terletak pada persoalan publikasi dan ketertiban administrasi, dua hal yang menjadi fokus pendampingan kami.</p>
                <p>Bagi perguruan tinggi yang ingin meningkatkan profesionalisme dan kinerja pegawai, aplikasi Mobile Performance List (MPL) dapat digunakan sebagai instrumen Key Performance Indicators menuju kejelasan merit system, dengan slogan &ldquo;my professional diary&rdquo;.</p>
                <p>Saling menginspirasi dan memotivasi, bertumbuh bersama di berbagai profesi.</p>

                <p class="cta-line">Untuk informasi lebih lanjut, hubungi Denpasar Institute melalui WhatsApp <a href="https://wa.me/6287865309966">0878-6530-9966</a>.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
