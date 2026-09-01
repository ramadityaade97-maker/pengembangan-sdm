document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {

        const target = parseInt(counter.getAttribute("data-target"));
        let count = 0;

        // Kecepatan animasi
        const duration = 5000;

        // Menghitung interval berdasarkan target
        const increment = Math.ceil(target / (duration / 20));

        const updateCounter = () => {

            count += increment;

            if (count < target) {
                counter.innerText = count + "+";
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target + "+";
            }

        };

        updateCounter();

    });

});

document.addEventListener("DOMContentLoaded", function () {

    // =========================================
    // ELEMENT
    // =========================================

    const slider = document.getElementById("cardSlider");
    const wrapper = document.querySelector(".slider-wrapper");

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");


    // =========================================
    // CEK ELEMENT
    // =========================================

    if (!slider || !wrapper) {
        console.log("Slider tidak ditemukan!");
        return;
    }


    // =========================================
    // SIMPAN CARD ASLI
    // =========================================

    const originalCards = Array.from(
        slider.children
    );

    const cardCount = originalCards.length;


    // =========================================
    // CLONE CARD
    // =========================================

    originalCards.forEach(function (card) {

        const clone = card.cloneNode(true);

        slider.appendChild(clone);

    });


    // =========================================
    // VARIABLE
    // =========================================

    let position = 0;

    let speed = 0.5;

    let isPaused = false;

    let isDragging = false;

    let isAnimating = false;

    let startX = 0;

    let startPosition = 0;


    // =========================================
    // HITUNG JARAK 1 SET CARD
    // =========================================

    function getSetWidth() {

        /*
         * Card pertama dari SET 1
         */

        const firstCard = slider.children[0];


        /*
         * Card pertama dari SET 2
         */

        const secondSetFirstCard =
            slider.children[cardCount];


        /*
         * Jarak sebenarnya antara
         * kedua card tersebut.
         */

        return (
            secondSetFirstCard.offsetLeft -
            firstCard.offsetLeft
        );

    }


    // =========================================
    // UPDATE SLIDER
    // =========================================

    function updateSlider() {

        slider.style.transform =
            `translate3d(${position}px, 0, 0)`;

    }


    // =========================================
    // NORMALISASI POSISI
    // =========================================

    function normalizePosition() {

        const setWidth =
            getSetWidth();


        /*
         * Kalau terlalu jauh ke kiri
         */

        while (
            position <= -setWidth
        ) {

            position += setWidth;

        }


        /*
         * Kalau terlalu jauh ke kanan
         */

        while (
            position > 0
        ) {

            position -= setWidth;

        }

    }

    // =========================================
// RANDOM POSISI AWAL
// =========================================

const randomIndex = Math.floor(
    Math.random() * originalCards.length
);

position = -(
    getCardWidth() * randomIndex
);

updateSlider();

    // =========================================
    // AUTO SLIDER
    // =========================================

    function autoSlide() {

        if (
            !isPaused &&
            !isDragging &&
            !isAnimating
        ) {

            position -= speed;

            normalizePosition();

            updateSlider();

        }

        requestAnimationFrame(autoSlide);

    }


    autoSlide();


    // =========================================
    // SMOOTH BUTTON
    // =========================================

    function smoothMove(direction) {

        /*
         * Jangan jalankan animasi kedua
         * sebelum animasi pertama selesai.
         */

        if (isAnimating) {
            return;
        }


        isAnimating = true;

        isPaused = true;


        const distance =
            getCardWidth();


        const start =
            position;


        let target;


        // =====================================
        // NEXT →
        // =====================================

        if (direction === "next") {

            target =
                start - distance;

        }


        // =====================================
        // PREVIOUS ←
        // =====================================

        else {

            target =
                start + distance;

        }


        const duration = 650;

        const startTime =
            performance.now();


        // =====================================
        // ANIMASI
        // =====================================

        function animateMove(currentTime) {

            const elapsed =
                currentTime - startTime;


            let progress =
                Math.min(
                    elapsed / duration,
                    1
                );


            /*
             * Smooth easing
             */

            const eased =
                1 -
                Math.pow(
                    1 - progress,
                    4
                );


            position =
                start +
                (target - start) *
                eased;


            updateSlider();


            // =================================
            // SELESAI
            // =================================

            if (progress >= 1) {

                /*
                 * Rapikan posisi setelah
                 * animasi selesai.
                 */

                normalizePosition();

                updateSlider();


                isAnimating = false;

                isPaused = false;

                return;

            }


            requestAnimationFrame(
                animateMove
            );

        }


        requestAnimationFrame(
            animateMove
        );

    }


    // =========================================
    // HITUNG CARD WIDTH
    // =========================================

    function getCardWidth() {

        const firstCard =
            originalCards[0];


        const secondCard =
            originalCards[1];


        if (!secondCard) {

            return firstCard.offsetWidth;

        }


        return (
            secondCard.offsetLeft -
            firstCard.offsetLeft
        );

    }


    // =========================================
    // NEXT BUTTON
    // =========================================

    if (nextBtn) {

        nextBtn.addEventListener(
            "click",
            function (e) {

                e.preventDefault();

                smoothMove("next");

            }
        );

    }


    // =========================================
    // PREVIOUS BUTTON
    // =========================================

    if (prevBtn) {

        prevBtn.addEventListener(
            "click",
            function (e) {

                e.preventDefault();

                smoothMove("prev");

            }
        );

    }


    // =========================================
    // MOUSE HOVER
    // =========================================

    wrapper.addEventListener(
        "mouseenter",
        function () {

            if (!isAnimating) {

                isPaused = true;

            }

        }
    );


    wrapper.addEventListener(
        "mouseleave",
        function () {

            if (!isDragging) {

                isPaused = false;

            }

        }
    );


    // =========================================
    // MOUSE DRAG START
    // =========================================

    wrapper.addEventListener(
        "mousedown",
        function (e) {

            if (isAnimating) {
                return;
            }


            isDragging = true;

            isPaused = true;


            startX =
                e.clientX;


            startPosition =
                position;


            wrapper.style.cursor =
                "grabbing";

        }
    );


    // =========================================
    // MOUSE DRAG MOVE
    // =========================================

    document.addEventListener(
        "mousemove",
        function (e) {

            if (!isDragging) {
                return;
            }


            const movement =
                e.clientX - startX;


            position =
                startPosition + movement;


            normalizePosition();

            updateSlider();

        }
    );


    // =========================================
    // MOUSE DRAG END
    // =========================================

    document.addEventListener(
        "mouseup",
        function () {

            if (!isDragging) {
                return;
            }


            isDragging = false;

            isPaused = false;


            wrapper.style.cursor =
                "grab";

        }
    );


    // =========================================
    // TOUCH START
    // =========================================

    wrapper.addEventListener(
        "touchstart",
        function (e) {

            if (isAnimating) {
                return;
            }


            isDragging = true;

            isPaused = true;


            startX =
                e.touches[0].clientX;


            startPosition =
                position;

        },
        {
            passive: true
        }
    );


    // =========================================
    // TOUCH MOVE
    // =========================================

    wrapper.addEventListener(
        "touchmove",
        function (e) {

            if (!isDragging) {
                return;
            }


            const movement =
                e.touches[0].clientX -
                startX;


            position =
                startPosition + movement;


            normalizePosition();

            updateSlider();

        },
        {
            passive: true
        }
    );


    // =========================================
    // TOUCH END
    // =========================================

    wrapper.addEventListener(
        "touchend",
        function () {

            isDragging = false;

            isPaused = false;

        }
    );


    // =========================================
    // RESPONSIVE
    // =========================================

    window.addEventListener(
        "resize",
        function () {

            normalizePosition();

            updateSlider();

        }
    );

});