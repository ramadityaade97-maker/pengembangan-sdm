@php
    $title = 'Tailor-Made';
    $description = 'Layanan jasa Denpasar Institute untuk merancang dan melaksanakan program pengembangan SDM berdasarkan analisis kebutuhan.';
    $hero = 'hero-9.png';
    $page = 'tailor';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="hero">
        <div class="hero-inner">
            <div class="judul">
                <h1><span class="warna1">TAILOR</span>-MADE</h1>
                <p>Salah satu layanan jasa Denpasar Institute untuk merancang dan melaksanakan program pengembangan SDM berdasarkan analisis kebutuhan.</p>
            </div>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap">
            <div class="foto">
                <img src="{{ asset('images/logoSDM.png') }}" alt="Logo program Tailor-Made Denpasar Institute" loading="lazy">
            </div>

            <div class="prose">
                <h2>Tailor-made Program</h2>
                <p>Tailor-made Program merupakan salah satu layanan jasa Denpasar Institute untuk merancang dan melaksanakan program pengembangan SDM berdasarkan analisis kebutuhan.</p>

                <h3>Cakupan Program</h3>
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

                <p>Rincian biaya dapat diperoleh dengan menghubungi tim kami.</p>
                <p class="cta-line">Hubungi kami untuk mengembangkan potensi Anda dan pengembangan SDM di perusahaan yang Bapak/Ibu pimpin.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
