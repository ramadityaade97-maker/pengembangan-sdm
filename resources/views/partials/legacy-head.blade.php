<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Denpasar Institute</title>
    <meta name="description" content="{{ $description }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/legacy.css') }}">
    @if (isset($hero))
        {{-- Only pages that actually use .hero pass $hero. The collaboration form
             deliberately has no hero image, so the variable is left unset. --}}
        <style>:root { --hero-image: url('{{ asset('images/'.$hero) }}'); }</style>
    @endif
</head>
<body>
    <a class="skip-link" href="#main">Lompat ke konten utama</a>
