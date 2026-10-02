@php
    $navLinks = [
        ['url' => '/', 'label' => 'Beranda', 'match' => '/'],
        ['url' => '/#tentang-kami', 'label' => 'Tentang', 'match' => 'tentang'],
        ['url' => '/#program', 'label' => 'Program', 'match' => 'program'],
        ['url' => '/kolaborasi', 'label' => 'Kolaborasi', 'match' => 'kolaborasi'],
    ];
@endphp

<nav class="nav" aria-label="Navigasi utama">
    <a class="logonama" href="/">
        <img class="logo" src="{{ asset('images/logoDI.png') }}" alt="Logo Denpasar Institute" width="48" height="48">
        <span>Denpasar Institute</span>
    </a>

    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-links" data-nav-toggle>
        <span aria-hidden="true"></span>
        <span class="sr-only">Buka menu navigasi</span>
    </button>

    <ul class="nav-links" id="nav-links" data-nav-menu>
        @foreach ($navLinks as $link)
            <li>
                <a href="{{ $link['url'] }}"
                   class="{{ $page === $link['match'] ? 'is-current' : '' }}"
                   @if ($page === $link['match']) aria-current="page" @endif>{{ $link['label'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
