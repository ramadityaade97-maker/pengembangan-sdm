@php
    $title = 'In-House Training';
    $description = 'Program In-House Training Denpasar Institute dengan waktu, tempat, dan materi pelatihan yang disesuaikan dengan kebutuhan perusahaan.';
    $hero = 'hero-7.png';
    $page = 'training';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="hero">
        <div class="hero-inner">
            <div class="judul">
                <h1>IN-HOUSE <span class="warna1">TRAINING</span></h1>
                <p>Waktu, tempat, dan materi pelatihan yang disesuaikan dengan permintaan clients dan partners.</p>
            </div>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap">
            <div class="foto">
                <img src="{{ asset('images/logoSDM.png') }}" alt="Logo program In-House Training Denpasar Institute" loading="lazy">
            </div>

            <div class="prose">
                <h2>Keunggulan Program</h2>
                <p>Denpasar Institute sebagai Lembaga Riset dan Pengembangan SDM menyelenggarakan program In-House Training dengan waktu, tempat, dan materi pelatihan yang disesuaikan dengan permintaan clients dan partners.</p>
                <p>Program ini dilakukan berdasarkan Need Analysis Survey dan memiliki beberapa keunggulan dibandingkan program sejenis, karena:</p>
                <ol>
                    <li>Memfokuskan kualitas SDM yang menjadi eksekutor atas ide, rencana, dan kegiatan perusahaan</li>
                    <li>Mengutamakan kenyamanan waktu dan tempat pelaksanaan sehingga efektif dan efisien bagi perusahaan</li>
                    <li>Menyiapkan materi spesifik yang berkaitan langsung dengan bidang kerja tertentu</li>
                    <li>Menciptakan interaksi antarpeserta untuk meningkatkan solidaritas tim</li>
                    <li>Meningkatkan motivasi dan budaya belajar di kalangan peserta sehingga target perusahaan lebih mudah dicapai</li>
                    <li>Mengutamakan outcome dibandingkan output dari program in-house training</li>
                    <li>Bersifat acuan pada visi, misi, dan target perusahaan ketika melaksanakan program</li>
                    <li>Menugaskan expert trainer dari kalangan akademisi dan praktisi</li>
                    <li>Mengoptimalkan ketersediaan biaya dengan memanfaatkan resources yang dimiliki</li>
                </ol>

                <h3>Pilihan Program</h3>
                <ul>
                    <li>Cross Functional Training</li>
                    <li>Team Training</li>
                    <li>Creativity Training</li>
                    <li>Skill Training</li>
                    <li>Capacity Building</li>
                    <li>Outbound</li>
                    <li>Tailor-Made Program</li>
                    <li>Seminar dan Lokakarya SDM</li>
                </ul>

                <p class="cta-line">Hubungi kami dan ceritakan training need perusahaan Anda.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
