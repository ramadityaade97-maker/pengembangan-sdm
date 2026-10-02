@php
    $title = 'Ajukan Kolaborasi';
    $description = 'Kirim ringkasan kebutuhan pelatihan, lokakarya, atau kajian untuk organisasi Anda. Pengajuan dicatat dan dapat kami diskusikan lebih lanjut.';
    $page = 'kolaborasi';
@endphp

@include('partials.legacy-head')

@include('partials.legacy-nav', ['page' => $page])

<main id="main">
    <section class="page-head">
        <div class="wrap-narrow">
            <h1>Ajukan Kolaborasi</h1>
            <p class="page-head-lede">
                Ceritakan kebutuhan pelatihan, lokakarya, atau kajian untuk organisasi Anda.
                Isian di bawah ini dicatat oleh tim kami dan menjadi bahan diskusi awal.
            </p>
        </div>
    </section>

    <section class="section-body">
        <div class="wrap-narrow">

            @if (session('status') === 'sent')
                <div class="notice notice-ok" role="status">
                    <h2>Pengajuan Anda sudah tercatat</h2>
                    <p>
                        Terima kasih. Tim kami akan membaca ringkasan yang Anda kirim dan
                        menindaklanjuti lewat alamat email yang Anda cantumkan.
                    </p>
                    <p class="notice-aside">
                        Kalau ingin lebih cepat, Anda juga bisa langsung menulis ke
                        <a href="mailto:halo@denpasarinstitute.com">halo@denpasarinstitute.com</a>
                        atau menelepon <a href="tel:+62218189896">+62 21 8189 896</a>.
                    </p>
                </div>
            @else
                <div class="kolab-layout">
                    <div class="kolab-form-wrap">
                        @if ($errors->any())
                            <div class="notice notice-error" role="alert">
                                <h2>Ada isian yang belum tepat</h2>
                                <p>{{ $errors->count() }} isian perlu diperbaiki sebelum pengajuan dapat dikirim. Detailnya tercantum di bawah tiap kolom.</p>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('kolaborasi.kirim') }}" novalidate>
                            @csrf

                            {{-- Honeypot. Hidden from people and assistive tech; a filled
                                 value means an automated filler, not a visitor. --}}
                            <div class="hp-field" aria-hidden="true">
                                <label for="website">Jangan diisi</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" value="">
                            </div>

                            <div class="field">
                                <label for="name">Nama Anda <span class="req" aria-hidden="true">*</span></label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    maxlength="120"
                                    autocomplete="name"
                                    @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
                                >
                                @error('name')
                                    <p class="field-error" id="name-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="organisation">Organisasi atau instansi <span class="req" aria-hidden="true">*</span></label>
                                <input
                                    type="text"
                                    id="organisation"
                                    name="organisation"
                                    value="{{ old('organisation') }}"
                                    required
                                    maxlength="160"
                                    autocomplete="organization"
                                    @error('organisation') aria-invalid="true" aria-describedby="organisation-error" @enderror
                                >
                                @error('organisation')
                                    <p class="field-error" id="organisation-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="email">Email <span class="req" aria-hidden="true">*</span></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    maxlength="190"
                                    autocomplete="email"
                                    @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                                >
                                <p class="field-hint" id="email-hint">Balasan dan tindak lanjut kami kirim ke alamat ini.</p>
                                @error('email')
                                    <p class="field-error" id="email-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="phone">Telepon <span class="opt">(opsional)</span></label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    maxlength="40"
                                    autocomplete="tel"
                                    @error('phone') aria-invalid="true" aria-describedby="phone-error" @enderror
                                >
                                @error('phone')
                                    <p class="field-error" id="phone-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="message">Ringkasan kebutuhan <span class="req" aria-hidden="true">*</span></label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    required
                                    minlength="20"
                                    maxlength="5000"
                                    aria-describedby="message-hint"
                                    @error('message') aria-invalid="true" @enderror
                                >{{ old('message') }}</textarea>
                                <p class="field-hint" id="message-hint">Minimal 20 karakter. Sebutkan jenis program, perkiraan jumlah peserta, dan waktu pelaksanaan yang Anda rencanakan.</p>
                                @error('message')
                                    <p class="field-error" id="message-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="actions">
                                <button type="submit" class="btn-primary">Kirim pengajuan</button>
                                <p class="actions-note">
                                    Isian bertanda <span class="req" aria-hidden="true">*</span> wajib diisi.
                                </p>
                            </div>
                        </form>
                    </div>

                    <aside class="kolab-aside" aria-labelledby="aside-heading">
                        <h2 id="aside-heading">Sebelum Anda mengirim</h2>
                        <p>
                            Kami tidak selalu bisa langsung membalas di hari yang sama.
                            Ringkasan yang terarah membuat diskusi pertama jauh lebih cepat.
                        </p>
                        <ul class="aside-list">
                            <li>Ringkasan yang spesifik: topik, jumlah peserta, dan durasi.</li>
                            <li>Program yang relevan, kalau sudah ada: <a href="/#program">lihat daftar program</a>.</li>
                            <li>Target waktu, supaya kami tahu seberapa mendesak.</li>
                        </ul>
                        <p class="aside-contact">
                            Lebih suka bicara langsung?<br>
                            <a href="tel:+62218189896">+62 21 8189 896</a><br>
                            <a href="mailto:halo@denpasarinstitute.com">halo@denpasarinstitute.com</a>
                        </p>
                    </aside>
                </div>
            @endif

        </div>
    </section>
</main>

@include('partials.legacy-footer')

<script src="{{ asset('js/legacy.js') }}"></script>
</body>
</html>
