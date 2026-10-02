@php
    $title = 'Diklat SDM';
    $description = 'Program Pendidikan Vokasi untuk lulusan SMA/SMK dan karyawan yang ingin menempuh studi lanjut bidang vokasi, dirancang sesuai SKKNI.';
    $hero = 'hero-8.png';
    $page = 'sdm';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="hero">
        <div class="hero-inner">
            <div class="judul">
                <h1>DIKLAT <span class="warna1">SDM</span></h1>
                <p>Program Pendidikan Vokasi untuk lulusan SMA/SMK/Sederajat dan karyawan yang ingin menempuh studi lanjut bidang vokasi.</p>
            </div>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap">
            <div class="foto">
                <img src="{{ asset('images/logoSDM.png') }}" alt="Logo program Diklat SDM Denpasar Institute" loading="lazy">
            </div>

            <div class="prose">
                <h2>Program Pendidikan Vokasi</h2>
                <p>Disamping program pelatihan berbasis Need Analysis dan Research Survey untuk karyawan perusahaan, Denpasar Institute juga menyelenggarakan Program Pendidikan Vokasi untuk lulusan SMA/SMK/Sederajat dan karyawan yang ingin menempuh studi lanjut bidang vokasi.</p>

                <h3>Program Vokasi Bidang</h3>
                <ul>
                    <li>Public Digital Communication</li>
                    <li>Computer System Administrator</li>
                    <li>Data Science Program</li>
                    <li>Millennial Web Programmer</li>
                    <li>Mobile App Developer</li>
                    <li>German Speaking Guide</li>
                    <li>English Speaking Guide</li>
                    <li>English for Hospitality &amp; Tourism</li>
                    <li>Online Tour &amp; Travel</li>
                </ul>

                <p>Program pendidikan vokasi kami rancang dengan menggunakan SKKNI sesuai peraturan pemerintah.</p>
                <p>Rincian biaya dapat diperoleh dengan menghubungi tim kami.</p>
                <p class="cta-line">Hubungi kami untuk mengembangkan potensi Anda dan untuk kerjasama lebih lanjut.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
