body {
    margin: 0;
    padding: 0;
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
}

/* =========================================
   HERO PARTICLES
========================================= */

.hero-particles {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    z-index: 2;

    pointer-events: none;

    overflow: hidden;
}


/* =========================================
   PARTICLE DASAR
========================================= */

.particle {
    position: absolute;

    display: block;

    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #ffffff;

    box-shadow:
        0 0 8px rgba(255, 255, 255, 0.8),
        0 0 20px rgba(59, 130, 246, 0.7);

    opacity: 0.7;

    animation:
        floatingParticle
        6s ease-in-out infinite;
}


/* =========================================
   PARTICLE 1
========================================= */

.p1 {
    top: 18%;
    left: 12%;

    width: 5px;
    height: 5px;

    animation-delay: 0s;
}


/* =========================================
   PARTICLE 2
========================================= */

.p2 {
    top: 28%;
    left: 42%;

    width: 8px;
    height: 8px;

    background: #1680ff;

    box-shadow:
        0 0 10px #1680ff,
        0 0 30px rgba(22, 128, 255, 0.8);

    animation-delay: 1s;
}


/* =========================================
   PARTICLE 3
========================================= */

.p3 {
    top: 68%;
    left: 18%;

    width: 4px;
    height: 4px;

    animation-delay: 2s;
}


/* =========================================
   PARTICLE 4
========================================= */

.p4 {
    top: 22%;
    right: 24%;

    width: 7px;
    height: 7px;

    background: #ff7a00;

    box-shadow:
        0 0 10px #ff7a00,
        0 0 30px rgba(255, 122, 0, 0.8);

    animation-delay: 1.5s;
}


/* =========================================
   PARTICLE 5
========================================= */

.p5 {
    bottom: 20%;
    right: 34%;

    width: 5px;
    height: 5px;

    animation-delay: 3s;
}


/* =========================================
   PARTICLE 6
========================================= */

.p6 {
    top: 48%;
    right: 12%;

    width: 4px;
    height: 4px;

    background: #1680ff;

    box-shadow:
        0 0 8px #1680ff,
        0 0 20px rgba(22, 128, 255, 0.7);

    animation-delay: 2.5s;
}


/* =========================================
   PARTICLE 7
========================================= */

.p7 {
    bottom: 28%;
    left: 45%;

    width: 6px;
    height: 6px;

    background: #ff7a00;

    box-shadow:
        0 0 8px #ff7a00,
        0 0 25px rgba(255, 122, 0, 0.7);

    animation-delay: 4s;
}


/* =========================================
   PARTICLE 8
========================================= */

.p8 {
    top: 15%;
    right: 8%;

    width: 3px;
    height: 3px;

    animation-delay: 4.5s;
}


/* =========================================
   ANIMATION
========================================= */

@keyframes floatingParticle {

    0% {
        transform:
            translate3d(0, 0, 0)
            scale(1);

        opacity: 0.3;
    }

    25% {
        transform:
            translate3d(10px, -15px, 0)
            scale(1.1);

        opacity: 0.7;
    }

    50% {
        transform:
            translate3d(-5px, -30px, 0)
            scale(1.25);

        opacity: 1;
    }

    75% {
        transform:
            translate3d(-15px, -15px, 0)
            scale(1.1);

        opacity: 0.7;
    }

    100% {
        transform:
            translate3d(0, 0, 0)
            scale(1);

        opacity: 0.3;
    }

}

.hero-sparkles {
    position: absolute;

    inset: 0;

    z-index: 2;

    pointer-events: none;
}

.hero-sparkles span {
    position: absolute;

    color: #ffffff;

    font-size: 18px;

    text-shadow:
        0 0 10px rgba(255,255,255,0.8),
        0 0 25px rgba(59,130,246,0.8);

    animation:
        sparkle 3s ease-in-out infinite;
}

.hero-sparkles span:nth-child(1) {
    top: 20%;
    right: 16%;
}

.hero-sparkles span:nth-child(2) {
    top: 65%;
    right: 28%;

    font-size: 12px;

    animation-delay: 1s;
}

.hero-sparkles span:nth-child(3) {
    top: 35%;
    left: 38%;

    font-size: 10px;

    animation-delay: 2s;
}


@keyframes sparkle {

    0%,
    100% {
        opacity: 0.2;

        transform:
            scale(0.7)
            rotate(0deg);
    }

    50% {
        opacity: 1;

        transform:
            scale(1.3)
            rotate(45deg);
    }

}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

/* =====================================================
   NAVBAR
===================================================== */

nav {
    position: fixed;

    top: 18px;
    left: 5%;
    right: 5%;

    height: 70px;

    padding: 0 22px;

    display: flex;
    align-items: center;

    /*
       Logo di kiri
       Menu di tengah/kanan
    */
    justify-content: space-between;

    box-sizing: border-box;

    z-index: 1000;

    background: rgba(255, 255, 255, 0.90);

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    border: 1px solid rgba(255, 255, 255, 0.7);

    border-radius: 18px;

    box-shadow:
        0 10px 35px rgba(15, 23, 42, 0.08);

    transition:
        top 0.4s ease,
        background 0.4s ease,
        box-shadow 0.4s ease;
}


/* =====================================================
   LOGONAMA
===================================================== */

.logonama {
    display: flex;

    align-items: center;

    gap: 10px;

    /*
       PENTING

       Area logo dibuat tetap.
       Jadi ketika tulisan mengetik/menghapus,
       menu tidak ikut bergeser.
    */

    width: 260px;

    min-width: 260px;

    height: 100%;

    flex-shrink: 0;
}


/* =====================================================
   LOGO
===================================================== */

.logonama .logo {
    width: 43px;

    height: 43px;

    object-fit: contain;

    flex-shrink: 0;

    transition:
        transform 0.4s ease,
        filter 0.4s ease;
}


/* Efek hover logo */

.logonama:hover .logo {
    transform:
        scale(1.08)
        rotate(-5deg);

    filter:
        drop-shadow(
            0 5px 10px
            rgba(22, 119, 255, 0.25)
        );
}


/* =====================================================
   DENPASAR INSTITUTE
===================================================== */

.logonama h2 {

    font-family: 'poppins';

    margin: 0;

    padding: 0;

    font-size: 17px;

    font-weight: 700;

    color: #0f172a;

    line-height: 1;

    white-space: nowrap;

    /*
       UKURAN TETAP

       Jangan gunakan width: 0.
       Kalau width berubah, menu navbar
       bisa ikut bergerak.
    */

    width: 18ch;

    min-width: 18ch;

    max-width: 18ch;

    overflow: hidden;

    display: block;

    /*
       Cursor typing
    */

    border-right: 2px solid #1677ff;

    padding-right: 4px;

    box-sizing: content-box;

    /*
       Animasi hanya pada tulisan ini
    */

    animation:
        denpasarTyping 8s steps(18, end) infinite,
        denpasarCursor 0.7s step-end infinite;
}


/* =====================================================
   ANIMASI TYPING
===================================================== */

@keyframes denpasarTyping {

    /* Mulai kosong */

    0% {
        clip-path: inset(
            0 100% 0 0
        );
    }


    /* Sedang mengetik */

    30% {
        clip-path: inset(
            0 0 0 0
        );
    }


    /* Berhenti setelah selesai */

    55% {
        clip-path: inset(
            0 0 0 0
        );
    }


    /* Mulai menghapus */

    85% {
        clip-path: inset(
            0 100% 0 0
        );
    }


    /* Selesai menghapus */

    100% {
        clip-path: inset(
            0 100% 0 0
        );
    }
}


/* =====================================================
   CURSOR BERKEDIP
===================================================== */

@keyframes denpasarCursor {

    0%,
    100% {
        border-color: #1677ff;
    }

    50% {
        border-color: transparent;
    }
}


/* =====================================================
   MENU UL
===================================================== */

nav ul {
    margin: 0;

    padding: 0;

    list-style: none;

    display: flex;

    align-items: center;

    flex-shrink: 0;
}


/* =====================================================
   MENU LI
===================================================== */

nav ul li {
    margin: 0;

    padding: 0;

    display: flex;

    align-items: center;

    gap: 5px;
}


/* =====================================================
   MENU LINK
===================================================== */

nav ul li a {

    font-family: 'poppins';

    position: relative;

    display: block;

    padding: 10px 15px;

    color: #475569;

    text-decoration: none;

    font-size: 14px;

    font-weight: 500;

    border-radius: 10px;

    width: auto;

    white-space: nowrap;

    transition:
        color 0.3s ease,
        background 0.3s ease,
        transform 0.3s ease;
}


/* =====================================================
   HOVER MENU
===================================================== */

nav ul li a:hover {

    color: #1677ff;

    background:
        rgba(22, 119, 255, 0.07);

    transform:
        translateY(-2px);
}


/* =====================================================
   GARIS BAWAH MENU
===================================================== */

nav ul li a::after {

    content: "";

    position: absolute;

    left: 50%;

    bottom: 4px;

    width: 0;

    height: 2px;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            #1677ff,
            #ff7a00
        );

    transform:
        translateX(-50%);

    transition:
        width 0.35s ease;
}


/* Garis muncul saat hover */

nav ul li a:hover::after {

    width: 55%;
}


/* =====================================================
   GARIS CAHAYA NAVBAR
===================================================== */

nav::before {

    content: "";

    position: absolute;

    top: 0;

    left: 10%;

    width: 80%;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(22, 119, 255, 0.5),
            rgba(255, 122, 0, 0.5),
            transparent
        );

    opacity: 0.8;

    pointer-events: none;
}


/* =====================================================
   NAVBAR SAAT SCROLL
===================================================== */

nav.scrolled {

    top: 10px;

    background:
        rgba(255, 255, 255, 0.96);

    box-shadow:
        0 15px 40px
        rgba(15, 23, 42, 0.13);
}

nav .nav-cta {
    text-decoration: none !important;
    padding: 10px 20px;
    border-radius: 10px;
    color: white;
    font-family: 'poppins';
    background-color: #006BFF;
    transition: 0.4s ease;
}

nav .nav-cta:hover {
    text-decoration: none !important;
    transform: scale(1.05);
}

.logo {
    width: 80px;
    height: 80px;
}

.section-1 {
    min-height: 100vh;
}

.section-3 {
    min-height: 100vh;
    scroll-margin-top: 80px;
}

.section-2 {
    position: relative;
    max-width: 1300px;
    min-height: 650px;
    margin: 30px auto;
    background-image: url('/images/Group 21.png');
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    margin-top: -50px;
}

.hero {
    position: relative;
    background-image: url('/images/Group 25.png');
    width: 100%;
    height: 800px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    margin-top: 80px;
    overflow: hidden;
    isolation: isolate;
    margin-top: -100px;
}

.hero::before {
    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(5, 15, 30, 0.92) 0%,
            rgba(5, 15, 30, 0.70) 40%,
            rgba(5, 15, 30, 0.35) 70%,
            rgba(5, 15, 30, 0.55) 100%
        );

    z-index: 1;

    pointer-events: none;
}


.foto img {
    width: min(520px, 40vw);
    height: auto;

    object-fit: contain;

    display: block;

    filter:
        drop-shadow(
            0 20px 40px rgba(0, 0, 0, 0.25)
        );

    animation: logoFloating 5s ease-in-out infinite;
}

@keyframes logoFloating {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-12px);
    }
}

.judul {
    color: white;
    font-family: 'poppins';
    padding-left: 120px;
    margin-top: 60px;
    position: relative;
    z-index: 2;
}

.judul-atas {
    margin-bottom: -30px;
    color: #006BFF;
    font-family: 'poppins';
}

.sub-judul {
    font-size: 48px;
    margin-bottom: -5px;
    line-height: 50px;
    font-family: 'poppins';
}

.judul-bawah {
    margin-bottom: 40px;
    font-family: 'poppins';
    color: #c8c8c8;
}

.warna1 {
    color: #006BFF;
}

.jelajahi {
    background-color: #006BFF;
    padding: 10px 20px;
    z-index: 1;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    font-family: 'poppins';
    margin-right: 20px;
    transition: color 0.4s ease;
    display: inline-block;
    color: white;
    text-decoration: none;
}

.jelajahi span {
    position: relative;
    z-index: 1;
}

.jelajahi::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: #c8c8c8;
    z-index: -1;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.45s cubic-bezier(0.65, 0, 0.35,1);
    border-radius: 10px;
}

.jelajahi:hover::before {
    transform: scaleX(1);
    transform-origin: left;
    border-radius: 10px;
}

.jelajahi:hover {
    color: #006BFF;
}

.tentangkami {
    padding: 10px 20px;
    border-radius: 10px;
    z-index: 1;
    position: relative;
    overflow: hidden;
    background-color: #006BFF;
    transition: color 0.4s ease;
    display: inline-block;
    color: white;
    text-decoration: none;
}

.tentangkami::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: #c8c8c8;
    z-index: -1;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.45s cubic-bezier(0.65, 0, 0.35,1);
    border-radius: 10px;
}

.tentangkami:hover {
    color: #006BFF;
    
}

.tentangkami:hover::before {
    transform: scaleX(1);
    transform-origin: left;
    border-radius: 10px;
}

.document-section {
    width: 100%;
    max-width: 100%;
    padding: 100px 6%;
    overflow: hidden;
    background: #f8fafc;
}


/* =========================
   HEADER
========================= */

.section-header {
    max-width: 650px;
    margin-bottom: 50px;
}

.section-label {
    display: inline-block;

    color: #3b82f6;

    font-size: 13px;
    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 10px;

    font-family: 'poppins';
}

.section-header h2 {
    margin: 0 0 15px;

    color: #0f172a;

    font-size: 48px;
    font-weight: 700;
    font-family: 'poppins';
}

.section-header p {
    margin: 0;

    color: #64748b;

    line-height: 1.7;

    font-family: 'poppins';
}


/* =========================
   SLIDER
========================= */

.slider-wrapper {
    width: 100%;

    overflow: hidden;

    position: relative;

    cursor: grab;

    user-select: none;
    max-width: 100%;
}

.slider-wrapper:active {
    cursor: grabbing;
}


/* =========================
   CARD CONTAINER
========================= */

.card-slider {
    display: flex;
    
    padding: 20px 30px;

    gap: 24px;

    width: max-content;

    transform: translateX(0);

    will-change: transform;
    max-width: none;
    flex-shrink: 0;
}


/* =========================
   CARD
========================= */

.info-card-1 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 2.png');

    font-family: 'poppins';
}

.info-card-2 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 3.png');

    font-family: 'poppins';
}

.info-card-3 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 4.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-4 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 5.png');

    font-family: 'poppins';
}

.info-card-5 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 6.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-6 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 7.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-7 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 8.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-8 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 9.png');

    background-position: center;

    font-family: 'poppins';
}


/* =========================
   BACKGROUND CIRCLE
========================= */

.info-card-1::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-1:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-1:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-2::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-2:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-2:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-3::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-3:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-3:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-4::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-4:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-4:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-5::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-5:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-5:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-6::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-6:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-6:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-7::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-7:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-7:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-8::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-8:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-8:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}


/* =========================
   ICON
========================= */

.card-icon {
    position: relative;

    width: 55px;
    height: 55px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin-bottom: 35px;

    border-radius: 16px;

    background: #eff6ff;

    font-size: 25px;

    transition: 0.3s ease;
}

.info-card:hover .card-icon {
    transform: rotate(-8deg) scale(1.1);
}


/* =========================
   NUMBER
========================= */

.card-number {
    position: absolute;

    top: 28px;
    right: 28px;

    font-size: 13px;

    font-weight: 700;

    color: #94a3b8;
}


/* =========================
   TITLE
========================= */

.info-card h3 {
    position: relative;

    margin: 0 0 12px;

    font-size: 24px;
}


/* =========================
   DESCRIPTION
========================= */

.info-card p {
    position: relative;

    margin: 0;

    max-width: 210px;

    color: #64748b;

    font-size: 14px;

    line-height: 1.6;
}


/* =========================
   ARROW
========================= */

.card-arrow {
    position: absolute;

    right: 25px;
    bottom: 25px;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #006BFF;

    color: white;

    font-size: 18px;

    transition: 0.3s ease;
}

.info-card:hover .card-arrow {
    background: #3b82f6;

    transform:
        translate(4px, -4px);
}

.slider-controls {
    display: flex;

    justify-content: flex-end;

    gap: 12px;

    margin-top: 25px;
}


.slider-btn {
    width: 48px;
    height: 48px;

    border: none;

    border-radius: 50%;

    background: #0f172a;

    color: white;

    font-size: 20px;

    cursor: pointer;

    display: flex;

    align-items: center;
    justify-content: center;

    transition: all 0.3s ease;
}


.slider-btn:hover {
    background: #3b82f6;

    transform: translateY(-3px);
}


.slider-btn:active {
    transform: scale(0.9);
}


.hero-bawah {
    display: flex;
    margin-top: -80px;
    gap: 30px;
    margin-left: 120px;
    margin-top: -180px;
}

.bwh-1 {
    padding: 20px 30px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 18px;
    transition: 0.3s ease;
}

.bwh-1:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.14);
}

.bwh-1 p {
    margin-top: -20px
}

.bwh-1 h2 {
    display: block;
    font-size: 32px;
    color: #1680ff;
    font-weight: 800;
}

.content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    padding: 20px 30px;
}

.content1,
.content2,
.content3 {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.program-card {
    position: relative;
    width: 100%;
    height: 100px;
    border: 1px solid #d5d5d5;
    border-radius: 10px;
    background: #fff;
    overflow: hidden;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 10px 20px;
    box-sizing: border-box;
    cursor: pointer;
    transition:
        transform 0.4s ease,
        box-shadow 0.4s ease;
    z-index: 1;
}

.program-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: url('/images/Group 25.png');
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1);
    transition:
        opacity 0.4s ease,
        transform 0.6s ease;
    z-index: 0;
}

.program-card .logo {
    position: relative;
    width: 65px;
    height: 65px;
    object-fit: contain;
    z-index: 2;
    transition: transform 0.4s ease;
}

.program-card .research {
    position: relative;
    z-index: 2;
}

.program-card .research p {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    color: #111;
    transition: color 0.4s ease;
}

.program-card:hover {
    transform: scale(1.04);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    z-index: 10;
}

.program-card:hover::before {
    opacity: 1;
    transform: scale(1.08);
}

.program-card:hover .logo {
    transform: scale(1.08);
}

.research p:hover {
    color: #006BFF;
}

.research p {
    font-family: 'poppins';
}

.hero-content h2 {
    margin-left: 40px;
    margin-top: 40px;
    color: white;
    font-family: 'poppins';
}

.content-bawah {
    display: flex;
    justify-content: space-between;
    padding: 40px 60px;
}

.content-bawah-1 {
    background-color: white;
    padding: 10px 20px;
    height: 210px;
    width: 170px;
    border-radius: 10px;
    border: 1px solid rgba(0, 107, 255, 0.5);
    box-shadow:
        0 0 6px rgba(0, 107, 255, 0.7),
        0 0 15px rgba(0, 107, 255, 0.35),
        0 0 30px rgba(0, 107, 255, 0.15);
    transition: 0.4s ease;
}

.content-bawah-1:hover {
    border-color: #006BFF;
    box-shadow:
        0 0 8px #006BFF,
        0 0 20px rgba(0, 107, 255, 0.7),
        0 0 40px rgba(0, 107, 255, 0.4);
    transform: translateY(-3px);
}

.research-bawah {
    display: flex;
    margin-bottom: -10px;
    margin-top: -10px;
}

.research-bawah img {
    width: 20px;
    height: 20px;
    margin-top: 15px;
    margin-right: 5px;
    margin-left: 10px;
}

.research-bawah-1 {
    margin-left: 10px;
}

.research-bawah-1 img {
    object-fit: cover;
    width: 160px;
    height: 100px;
    border-radius: 10px;
}

.research-bawah-1 p {
    font-size: 10px;
    font-family: 'poppins';
}

.h41 {
    font-size: 12px;
    font-family: 'poppins';
}

.h42 {
    font-size: 11px;
    font-family: 'poppins';
}

.h43 {
    margin-top: 18px;
    margin-bottom: 13px;
    font-size: 9px;
    font-family: 'poppins';
}

.h44 {
    margin-bottom: 13px;
    font-size: 11px;
    font-family: 'poppins';
}

.h45 {
    margin-top: 16px;
    margin-bottom: 15px;
    font-size: 9px;
    font-family: 'poppins';
}

.hero-content-bawah h2 {
    margin-left: 65px;
    margin-bottom: -20px;
    font-family: 'poppins';
}

.king-atas {
    display: flex;
    justify-content: space-evenly;
    margin-top: 100px;
}

.penjelasan {
    margin-top: -26px;
    margin-left: 20px;
    font-family: 'poppins';
}

.penjelasan h2 {
    font-size: 30px;
    color: #006BFF;
}

.penjelasan p {
    margin-top: -20px;
    font-size: 20px;
}
.gambar img {
    width: 500px;
    height: 500px;
    object-fit: cover;
    margin-left: 50px;
    border-radius: 10px;
    transition: 0.4s ease;
}

.gambar img:hover {
    transform: scale(1.03);
    box-shadow:
        0 0 8px #006BFF,
        0 0 20px rgba(0, 107, 255, 0.7),
        0 0 40px rgba(0, 107, 255, 0.4);
}

.king-bawah {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
    margin-bottom: 100px;
}

.king-bawah-1 {
    background-color: white;
    border: 1px solid #006BFF;
    padding: 20px 30px;
    border-radius: 10px;
}

.king-bawah-1 p {
    font-family: 'poppins';
}

.king-bawah h2 {
    text-align: center;
    font-family: 'poppins';
    margin-top: -5px;
    margin-bottom: -5px;
    color: #006BFF;
}

.utama {
    background-color: #c8c8c8;
    padding: 20px 30px;
    border-radius: 10px;
    transition: 0.4s ease;
}

.utama:hover {
    transform: scale(1.03);
    box-shadow:
        0 0 8px #006BFF,
        0 0 20px rgba(0, 107, 255, 0.7),
        0 0 40px rgba(0, 107, 255, 0.4);
}

.footer-utama {
    display: flex;
    justify-content: space-around;
    color: white;
    font-family: 'poppins';
}

.footer-1, .footer-2, .footer-3 {
    display: flex;
    gap: 10px;
}

.logo-footer {
    justify-content: center;
    align-items: center;
}

.secial {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-footer-5 {
    width: 35px;
    height: 35px;
}

.logo-utama {
    display: flex;
    gap: 20px;
    align-items: center;
}

.logopenjelasan {
    display: flex;
}

.logo-footer-atas {
    display: flex;
}

.section-4 {
    background-color: #006BFF;
    padding: 30px 30px;
}

.logo-atas {
    width: 100px;
    height: 100px;
}

.research-kiri {
    margin-bottom: 50px;
}

.research-footer p {
    margin-top: -20px;
    color: black;
    font-size: 15px;
}

body {
    margin: 0;
    padding: 0;
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
}

/* =========================================
   HERO PARTICLES
========================================= */

.hero-particles {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    z-index: 2;

    pointer-events: none;

    overflow: hidden;
}


/* =========================================
   PARTICLE DASAR
========================================= */

.particle {
    position: absolute;

    display: block;

    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #ffffff;

    box-shadow:
        0 0 8px rgba(255, 255, 255, 0.8),
        0 0 20px rgba(59, 130, 246, 0.7);

    opacity: 0.7;

    animation:
        floatingParticle
        6s ease-in-out infinite;
}


/* =========================================
   PARTICLE 1
========================================= */

.p1 {
    top: 18%;
    left: 12%;

    width: 5px;
    height: 5px;

    animation-delay: 0s;
}


/* =========================================
   PARTICLE 2
========================================= */

.p2 {
    top: 28%;
    left: 42%;

    width: 8px;
    height: 8px;

    background: #1680ff;

    box-shadow:
        0 0 10px #1680ff,
        0 0 30px rgba(22, 128, 255, 0.8);

    animation-delay: 1s;
}


/* =========================================
   PARTICLE 3
========================================= */

.p3 {
    top: 68%;
    left: 18%;

    width: 4px;
    height: 4px;

    animation-delay: 2s;
}


/* =========================================
   PARTICLE 4
========================================= */

.p4 {
    top: 22%;
    right: 24%;

    width: 7px;
    height: 7px;

    background: #ff7a00;

    box-shadow:
        0 0 10px #ff7a00,
        0 0 30px rgba(255, 122, 0, 0.8);

    animation-delay: 1.5s;
}


/* =========================================
   PARTICLE 5
========================================= */

.p5 {
    bottom: 20%;
    right: 34%;

    width: 5px;
    height: 5px;

    animation-delay: 3s;
}


/* =========================================
   PARTICLE 6
========================================= */

.p6 {
    top: 48%;
    right: 12%;

    width: 4px;
    height: 4px;

    background: #1680ff;

    box-shadow:
        0 0 8px #1680ff,
        0 0 20px rgba(22, 128, 255, 0.7);

    animation-delay: 2.5s;
}


/* =========================================
   PARTICLE 7
========================================= */

.p7 {
    bottom: 28%;
    left: 45%;

    width: 6px;
    height: 6px;

    background: #ff7a00;

    box-shadow:
        0 0 8px #ff7a00,
        0 0 25px rgba(255, 122, 0, 0.7);

    animation-delay: 4s;
}


/* =========================================
   PARTICLE 8
========================================= */

.p8 {
    top: 15%;
    right: 8%;

    width: 3px;
    height: 3px;

    animation-delay: 4.5s;
}


/* =========================================
   ANIMATION
========================================= */

@keyframes floatingParticle {

    0% {
        transform:
            translate3d(0, 0, 0)
            scale(1);

        opacity: 0.3;
    }

    25% {
        transform:
            translate3d(10px, -15px, 0)
            scale(1.1);

        opacity: 0.7;
    }

    50% {
        transform:
            translate3d(-5px, -30px, 0)
            scale(1.25);

        opacity: 1;
    }

    75% {
        transform:
            translate3d(-15px, -15px, 0)
            scale(1.1);

        opacity: 0.7;
    }

    100% {
        transform:
            translate3d(0, 0, 0)
            scale(1);

        opacity: 0.3;
    }

}

.hero-sparkles {
    position: absolute;

    inset: 0;

    z-index: 2;

    pointer-events: none;
}

.hero-sparkles span {
    position: absolute;

    color: #ffffff;

    font-size: 18px;

    text-shadow:
        0 0 10px rgba(255,255,255,0.8),
        0 0 25px rgba(59,130,246,0.8);

    animation:
        sparkle 3s ease-in-out infinite;
}

.hero-sparkles span:nth-child(1) {
    top: 20%;
    right: 16%;
}

.hero-sparkles span:nth-child(2) {
    top: 65%;
    right: 28%;

    font-size: 12px;

    animation-delay: 1s;
}

.hero-sparkles span:nth-child(3) {
    top: 35%;
    left: 38%;

    font-size: 10px;

    animation-delay: 2s;
}


@keyframes sparkle {

    0%,
    100% {
        opacity: 0.2;

        transform:
            scale(0.7)
            rotate(0deg);
    }

    50% {
        opacity: 1;

        transform:
            scale(1.3)
            rotate(45deg);
    }

}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

/* =====================================================
   NAVBAR
===================================================== */

nav {
    position: fixed;

    top: 18px;
    left: 5%;
    right: 5%;

    height: 70px;

    padding: 0 22px;

    display: flex;
    align-items: center;

    /*
       Logo di kiri
       Menu di tengah/kanan
    */
    justify-content: space-between;

    box-sizing: border-box;

    z-index: 1000;

    background: rgba(255, 255, 255, 0.90);

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    border: 1px solid rgba(255, 255, 255, 0.7);

    border-radius: 18px;

    box-shadow:
        0 10px 35px rgba(15, 23, 42, 0.08);

    transition:
        top 0.4s ease,
        background 0.4s ease,
        box-shadow 0.4s ease;
}


/* =====================================================
   LOGONAMA
===================================================== */

.logonama {
    display: flex;

    align-items: center;

    gap: 10px;

    /*
       PENTING

       Area logo dibuat tetap.
       Jadi ketika tulisan mengetik/menghapus,
       menu tidak ikut bergeser.
    */

    width: 260px;

    min-width: 260px;

    height: 100%;

    flex-shrink: 0;
}

.logonama .logo {
    width: 43px;

    height: 43px;

    object-fit: contain;

    flex-shrink: 0;

    transition:
        transform 0.4s ease,
        filter 0.4s ease;
}


/* Efek hover logo */

.logonama:hover .logo {
    transform:
        scale(1.08)
        rotate(-5deg);

    filter:
        drop-shadow(
            0 5px 10px
            rgba(22, 119, 255, 0.25)
        );
}


/* =====================================================
   DENPASAR INSTITUTE
===================================================== */

.logonama h2 {

    font-family: 'poppins';

    margin: 0;

    padding: 0;

    font-size: 17px;

    font-weight: 700;

    color: #0f172a;

    line-height: 1;

    white-space: nowrap;

    /*
       UKURAN TETAP

       Jangan gunakan width: 0.
       Kalau width berubah, menu navbar
       bisa ikut bergerak.
    */

    width: 18ch;

    min-width: 18ch;

    max-width: 18ch;

    overflow: hidden;

    display: block;

    /*
       Cursor typing
    */

    border-right: 2px solid #1677ff;

    padding-right: 4px;

    box-sizing: content-box;

    /*
       Animasi hanya pada tulisan ini
    */

    animation:
        denpasarTyping 8s steps(18, end) infinite,
        denpasarCursor 0.7s step-end infinite;
}


/* =====================================================
   ANIMASI TYPING
===================================================== */

@keyframes denpasarTyping {

    /* Mulai kosong */

    0% {
        clip-path: inset(
            0 100% 0 0
        );
    }


    /* Sedang mengetik */

    30% {
        clip-path: inset(
            0 0 0 0
        );
    }


    /* Berhenti setelah selesai */

    55% {
        clip-path: inset(
            0 0 0 0
        );
    }


    /* Mulai menghapus */

    85% {
        clip-path: inset(
            0 100% 0 0
        );
    }


    /* Selesai menghapus */

    100% {
        clip-path: inset(
            0 100% 0 0
        );
    }
}


/* =====================================================
   CURSOR BERKEDIP
===================================================== */

@keyframes denpasarCursor {

    0%,
    100% {
        border-color: #1677ff;
    }

    50% {
        border-color: transparent;
    }
}


/* =====================================================
   MENU UL
===================================================== */

nav ul {
    margin: 0;

    padding: 0;

    list-style: none;

    display: flex;

    align-items: center;

    flex-shrink: 0;
}


/* =====================================================
   MENU LI
===================================================== */

nav ul li {
    margin: 0;

    padding: 0;

    display: flex;

    align-items: center;

    gap: 5px;
}


/* =====================================================
   MENU LINK
===================================================== */

nav ul li a {

    font-family: 'poppins';

    position: relative;

    display: block;

    padding: 10px 15px;

    color: #475569;

    text-decoration: none;

    font-size: 14px;

    font-weight: 500;

    border-radius: 10px;

    width: auto;

    white-space: nowrap;

    transition:
        color 0.3s ease,
        background 0.3s ease,
        transform 0.3s ease;
}


/* =====================================================
   HOVER MENU
===================================================== */

nav ul li a:hover {

    color: #1677ff;

    background:
        rgba(22, 119, 255, 0.07);

    transform:
        translateY(-2px);
}


/* =====================================================
   GARIS BAWAH MENU
===================================================== */

nav ul li a::after {

    content: "";

    position: absolute;

    left: 50%;

    bottom: 4px;

    width: 0;

    height: 2px;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            #1677ff,
            #ff7a00
        );

    transform:
        translateX(-50%);

    transition:
        width 0.35s ease;
}


/* Garis muncul saat hover */

nav ul li a:hover::after {

    width: 55%;
}


/* =====================================================
   GARIS CAHAYA NAVBAR
===================================================== */

nav::before {

    content: "";

    position: absolute;

    top: 0;

    left: 10%;

    width: 80%;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(22, 119, 255, 0.5),
            rgba(255, 122, 0, 0.5),
            transparent
        );

    opacity: 0.8;

    pointer-events: none;
}


/* =====================================================
   NAVBAR SAAT SCROLL
===================================================== */

nav.scrolled {

    top: 10px;

    background:
        rgba(255, 255, 255, 0.96);

    box-shadow:
        0 15px 40px
        rgba(15, 23, 42, 0.13);
}

nav .nav-cta {
    text-decoration: none !important;
    padding: 10px 20px;
    border-radius: 10px;
    color: white;
    font-family: 'poppins';
    background-color: #006BFF;
    transition: 0.4s ease;
}

nav .nav-cta:hover {
    text-decoration: none !important;
    transform: scale(1.05);
}

.logo {
    width: 80px;
    height: 80px;
}

.section-1 {
    min-height: 100vh;
}

.section-3 {
    min-height: 100vh;
    scroll-margin-top: 80px;
}

.section-2 {
    position: relative;
    max-width: 1300px;
    min-height: 650px;
    margin: 30px auto;
    background-image: url('/images/Group 21.png');
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    margin-top: -50px;
}

.hero {
    position: relative;
    background-image: url('/images/Group 25.png');
    width: 100%;
    height: 800px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    margin-top: 80px;
    overflow: hidden;
    isolation: isolate;
    margin-top: -100px;
}

.hero::before {
    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(5, 15, 30, 0.92) 0%,
            rgba(5, 15, 30, 0.70) 40%,
            rgba(5, 15, 30, 0.35) 70%,
            rgba(5, 15, 30, 0.55) 100%
        );

    z-index: 1;

    pointer-events: none;
}


.foto img {
    position: relative;
    z-index: 2;
    width: min(520px, 40vw);
    height: auto;
    margin-top: 120px;
    object-fit: contain;

    display: block;

    filter:
        drop-shadow(
            0 20px 40px rgba(0, 0, 0, 0.25)
        );

    animation: logoFloating 5s ease-in-out infinite;
}

@keyframes logoFloating {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-12px);
    }
}

.judul {
    color: white;
    font-family: 'poppins';
    padding-left: 120px;
    margin-top: 60px;
    position: relative;
    z-index: 2;
}

.judul-atas {
    margin-bottom: -30px;
    color: #006BFF;
    font-family: 'poppins';
}

.sub-judul {
    font-size: 48px;
    margin-bottom: -5px;
    line-height: 50px;
    font-family: 'poppins';
}

.judul-bawah {
    margin-bottom: 40px;
    font-family: 'poppins';
    color: #c8c8c8;
}

.warna1 {
    color: #006BFF;
}

.jelajahi {
    background-color: #006BFF;
    padding: 10px 20px;
    z-index: 1;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    font-family: 'poppins';
    margin-right: 20px;
    transition: color 0.4s ease;
    display: inline-block;
    color: white;
    text-decoration: none;
}

.jelajahi span {
    position: relative;
    z-index: 1;
}

.jelajahi::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: #c8c8c8;
    z-index: -1;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.45s cubic-bezier(0.65, 0, 0.35,1);
    border-radius: 10px;
}

.jelajahi:hover::before {
    transform: scaleX(1);
    transform-origin: left;
    border-radius: 10px;
}

.jelajahi:hover {
    color: #006BFF;
}

.tentangkami {
    padding: 10px 20px;
    border-radius: 10px;
    z-index: 1;
    position: relative;
    overflow: hidden;
    background-color: #006BFF;
    transition: color 0.4s ease;
    display: inline-block;
    color: white;
    text-decoration: none;
}

.tentangkami::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: #c8c8c8;
    z-index: -1;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.45s cubic-bezier(0.65, 0, 0.35,1);
    border-radius: 10px;
}

.tentangkami:hover {
    color: #006BFF;
    
}

.tentangkami:hover::before {
    transform: scaleX(1);
    transform-origin: left;
    border-radius: 10px;
}

.document-section {
    width: 100%;
    max-width: 100%;
    padding: 100px 6%;
    overflow: hidden;
    background: #f8fafc;
}


/* =========================
   HEADER
========================= */

.section-header {
    max-width: 650px;
    margin-bottom: 50px;
}

.section-label {
    display: inline-block;

    color: #3b82f6;

    font-size: 13px;
    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 10px;

    font-family: 'poppins';
}

.section-header h2 {
    margin: 0 0 15px;

    color: #0f172a;

    font-size: 48px;
    font-weight: 700;
    font-family: 'poppins';
}

.section-header p {
    margin: 0;

    color: #64748b;

    line-height: 1.7;

    font-family: 'poppins';
}


/* =========================
   SLIDER
========================= */

.slider-wrapper {
    width: 100%;

    overflow: hidden;

    position: relative;

    cursor: grab;

    user-select: none;
    max-width: 100%;
}

.slider-wrapper:active {
    cursor: grabbing;
}


/* =========================
   CARD CONTAINER
========================= */

.card-slider {
    display: flex;
    
    padding: 20px 30px;

    gap: 24px;

    width: max-content;

    transform: translateX(0);

    will-change: transform;
    max-width: none;
    flex-shrink: 0;
}


/* =========================
   CARD
========================= */

.info-card-1 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 2.png');

    font-family: 'poppins';
}

.info-card-2 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 3.png');

    font-family: 'poppins';
}

.info-card-3 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 4.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-4 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 5.png');

    font-family: 'poppins';
}

.info-card-5 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 6.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-6 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 7.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-7 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 8.png');

    background-position: center;

    font-family: 'poppins';
}

.info-card-8 {

    flex-shrink: 0;

    position: relative;

    flex: 0 0 280px;

    height: 320px;

    padding: 30px;

    box-sizing: border-box;

    background: #ffffff;

    border-radius: 24px;

    border: 1px solid #e2e8f0;

    text-decoration: none;

    color: white;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    
    background-image: url('/images/hero 9.png');

    background-position: center;

    font-family: 'poppins';
}


/* =========================
   BACKGROUND CIRCLE
========================= */

.info-card-1::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-1:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-1:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-2::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-2:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-2:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-3::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-3:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-3:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-4::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-4:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-4:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-5::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-5:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-5:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-6::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-6:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-6:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-7::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-7:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-7:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}

.info-card-8::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -90px;
    right: -90px;

    border-radius: 50%;

    background: rgba(59, 130, 246, 0.08);

    transition: transform 0.4s ease;
}

.info-card-8:hover::before {
    transform: scale(1.5);
}


/* =========================
   HOVER
========================= */

.info-card-8:hover {
    transform: translateY(-10px);

    box-shadow:
        0 20px 45px rgba(15, 23, 42, 0.12);
}


/* =========================
   ICON
========================= */

.card-icon {
    position: relative;

    width: 55px;
    height: 55px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin-bottom: 35px;

    border-radius: 16px;

    background: #eff6ff;

    font-size: 25px;

    transition: 0.3s ease;
}

.info-card:hover .card-icon {
    transform: rotate(-8deg) scale(1.1);
}


/* =========================
   NUMBER
========================= */

.card-number {
    position: absolute;

    top: 28px;
    right: 28px;

    font-size: 13px;

    font-weight: 700;

    color: #94a3b8;
}


/* =========================
   TITLE
========================= */

.info-card h3 {
    position: relative;

    margin: 0 0 12px;

    font-size: 24px;
}


/* =========================
   DESCRIPTION
========================= */

.info-card p {
    position: relative;

    margin: 0;

    max-width: 210px;

    color: #64748b;

    font-size: 14px;

    line-height: 1.6;
}


/* =========================
   ARROW
========================= */

.card-arrow {
    position: absolute;

    right: 25px;
    bottom: 25px;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #006BFF;

    color: white;

    font-size: 18px;

    transition: 0.3s ease;
}

.info-card:hover .card-arrow {
    background: #3b82f6;

    transform:
        translate(4px, -4px);
}

.slider-controls {
    display: flex;

    justify-content: flex-end;

    gap: 12px;

    margin-top: 25px;
}


.slider-btn {
    width: 48px;
    height: 48px;

    border: none;

    border-radius: 50%;

    background: #0f172a;

    color: white;

    font-size: 20px;

    cursor: pointer;

    display: flex;

    align-items: center;
    justify-content: center;

    transition: all 0.3s ease;
}


.slider-btn:hover {
    background: #3b82f6;

    transform: translateY(-3px);
}


.slider-btn:active {
    transform: scale(0.9);
}


.hero-bawah {
    display: flex;
    margin-top: -80px;
    gap: 30px;
    margin-left: 120px;
    margin-top: -200px;
}

.bwh-1 {
    padding: 20px 30px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 18px;
    transition: 0.3s ease;
}

.bwh-1:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.14);
}

.bwh-1 p {
    color: white;
    font-family: 'poppins';
    margin-top: -20px;
}

.bwh-1 h2 {
    display: block;
    font-size: 32px;
    color: #1680ff;
    font-weight: 800;
}

.content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    padding: 20px 30px;
}

.content1,
.content2,
.content3 {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.program-card {
    position: relative;
    width: 100%;
    height: 100px;
    border: 1px solid #d5d5d5;
    border-radius: 10px;
    background: #fff;
    overflow: hidden;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 10px 20px;
    box-sizing: border-box;
    cursor: pointer;
    transition:
        transform 0.4s ease,
        box-shadow 0.4s ease;
    z-index: 1;
}

.program-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: url('/images/Group 25.png');
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1);
    transition:
        opacity 0.4s ease,
        transform 0.6s ease;
    z-index: 0;
}

.program-card .logo {
    position: relative;
    width: 65px;
    height: 65px;
    object-fit: contain;
    z-index: 2;
    transition: transform 0.4s ease;
}

.program-card .research {
    position: relative;
    z-index: 2;
}

.program-card .research p {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    color: #111;
    transition: color 0.4s ease;
}

.program-card:hover {
    transform: scale(1.04);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    z-index: 10;
}

.program-card:hover::before {
    opacity: 1;
    transform: scale(1.08);
}

.program-card:hover .logo {
    transform: scale(1.08);
}

.research p:hover {
    color: #006BFF;
}

.research p {
    font-family: 'poppins';
}

.hero-content h2 {
    margin-left: 40px;
    margin-top: 40px;
    color: white;
    font-family: 'poppins';
}

.content-bawah {
    display: flex;
    justify-content: space-between;
    padding: 40px 60px;
}

.content-bawah-1 {
    background-color: white;
    padding: 10px 20px;
    height: 210px;
    width: 170px;
    border-radius: 10px;
    border: 1px solid rgba(0, 107, 255, 0.5);
    box-shadow:
        0 0 6px rgba(0, 107, 255, 0.7),
        0 0 15px rgba(0, 107, 255, 0.35),
        0 0 30px rgba(0, 107, 255, 0.15);
    transition: 0.4s ease;
}

.content-bawah-1:hover {
    border-color: #006BFF;
    box-shadow:
        0 0 8px #006BFF,
        0 0 20px rgba(0, 107, 255, 0.7),
        0 0 40px rgba(0, 107, 255, 0.4);
    transform: translateY(-3px);
}

.research-bawah {
    display: flex;
    margin-bottom: -10px;
    margin-top: -10px;
}

.research-bawah img {
    width: 20px;
    height: 20px;
    margin-top: 15px;
    margin-right: 5px;
    margin-left: 10px;
}

.research-bawah-1 {
    margin-left: 10px;
}

.research-bawah-1 img {
    object-fit: cover;
    width: 160px;
    height: 100px;
    border-radius: 10px;
}

.research-bawah-1 p {
    font-size: 10px;
    font-family: 'poppins';
}

.h41 {
    font-size: 12px;
    font-family: 'poppins';
}

.h42 {
    font-size: 11px;
    font-family: 'poppins';
}

.h43 {
    margin-top: 18px;
    margin-bottom: 13px;
    font-size: 9px;
    font-family: 'poppins';
}

.h44 {
    margin-bottom: 13px;
    font-size: 11px;
    font-family: 'poppins';
}

.h45 {
    margin-top: 16px;
    margin-bottom: 15px;
    font-size: 9px;
    font-family: 'poppins';
}

.hero-content-bawah h2 {
    margin-left: 65px;
    margin-bottom: -20px;
    font-family: 'poppins';
}

.king-atas {
    display: flex;
    justify-content: space-evenly;
    margin-top: 100px;
}

.penjelasan {
    margin-top: -26px;
    margin-left: 20px;
    font-family: 'poppins';
}

.penjelasan h2 {
    font-size: 30px;
    color: #006BFF;
}

.penjelasan p {
    margin-top: -20px;
    font-size: 20px;
}
.gambar img {
    width: 500px;
    height: 500px;
    object-fit: cover;
    margin-left: 50px;
    border-radius: 10px;
    transition: 0.4s ease;
}

.gambar img:hover {
    transform: scale(1.12) rotate(2deg);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15), 0 0 30px #006BFF;
    filter: brightness(1.1) contrast(1.15);
}

.king-bawah {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
    margin-bottom: 100px;
}

.king-bawah-1 {
    background-color: white;
    border: 1px solid #006BFF;
    padding: 20px 30px;
    border-radius: 10px;
}

.king-bawah-1 p {
    font-family: 'poppins';
}

.king-bawah h2 {
    text-align: center;
    font-family: 'poppins';
    margin-top: -5px;
    margin-bottom: -5px;
    color: #006BFF;
}

.utama {
    background-color: #c8c8c8;
    padding: 20px 30px;
    border-radius: 10px;
    transition: 0.4s ease;
}

.utama:hover {
    transform: scale(1.03);
    box-shadow:
        0 0 8px #006BFF,
        0 0 20px rgba(0, 107, 255, 0.7),
        0 0 40px rgba(0, 107, 255, 0.4);
}

.footer-utama {
    display: flex;
    justify-content: space-around;
    color: white;
    font-family: 'poppins';
}

.footer-1, .footer-2, .footer-3 {
    display: flex;
    gap: 10px;
}

.logo-footer {
    justify-content: center;
    align-items: center;
}

.secial {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-footer-5 {
    width: 35px;
    height: 35px;
}

.logo-utama {
    display: flex;
    gap: 20px;
    align-items: center;
}

.logopenjelasan {
    display: flex;
}

.logo-footer-atas {
    display: flex;
}

.section-4 {
    background-color: #006BFF;
    padding: 30px 30px;
}

.logo-atas {
    width: 100px;
    height: 100px;
}

.research-kiri {
    margin-bottom: 50px;
}

.research-footer p {
    margin-top: -20px;
    color: black;
    font-size: 15px;
}