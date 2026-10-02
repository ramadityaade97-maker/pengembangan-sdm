@php
    $programLinks = [
        ['/sop', 'SOP'],
        ['/interview', 'Interview Coaching'],
        ['/diklat', 'Diklat Jabatan'],
        ['/karir-dosen', 'Karir Dosen'],
        ['/lokakarya', 'Lokakarya SDM'],
        ['/training', 'In House Training'],
        ['/sdm', 'Diklat SDM'],
        ['/tailor', 'Tailor-Made'],
    ];
@endphp

<footer class="footer">
    <div class="footer-grid">
        <div class="footer-about">
            <div class="footer-brand">
                <img src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute" width="56" height="56" loading="lazy">
                <div>
                    <strong>Denpasar Institute</strong>
                    <span>Pusat Kajian Publik</span>
                </div>
            </div>
            <p>Lembaga riset independen yang menghasilkan penelitian dan analisis kebijakan publik untuk mendukung pembangunan Indonesia yang berkelanjutan.</p>
        </div>

        <div>
            <h2>Navigasi</h2>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/#tentang-kami">Tentang</a></li>
                <li><a href="/#program">Program</a></li>
                <li><a href="/#galeri">Galeri</a></li>
                <li><a href="/kolaborasi">Ajukan Kolaborasi</a></li>
            </ul>
        </div>

        <div>
            <h2>Program</h2>
            <ul>
                @foreach ($programLinks as [$url, $label])
                    <li><a href="{{ $url }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h2>Kontak Kami</h2>
            <div class="footer-contact">
                <img src="{{ asset('images/location.svg') }}" alt="" aria-hidden="true" width="20" height="20" loading="lazy">
                <a href="https://maps.google.com/?q=Jl.+Genetri+IV+Tonja+Denpasar" rel="noopener">Jl. Genetri IV, Tonja, Denpasar</a>
            </div>
            <div class="footer-contact">
                <img src="{{ asset('images/phone.svg') }}" alt="" aria-hidden="true" width="20" height="20" loading="lazy">
                <a href="tel:+62218189896">(62) 21 8189 896</a>
            </div>
            <div class="footer-contact">
                <img src="{{ asset('images/email.svg') }}" alt="" aria-hidden="true" width="20" height="20" loading="lazy">
                <a href="mailto:halo@denpasarinstitute.com">halo@denpasarinstitute.com</a>
            </div>
        </div>
    </div>
</footer>
