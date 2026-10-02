/* Navbar toggle. Only runs on pages that actually have the nav. */
(function () {
    var toggle = document.querySelector('[data-nav-toggle]');
    var menu = document.querySelector('[data-nav-menu]');
    if (!toggle || !menu) return;

    function setOpen(open) {
        menu.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.querySelector('.sr-only').textContent = open
            ? 'Tutup menu navigasi'
            : 'Buka menu navigasi';
    }

    toggle.addEventListener('click', function () {
        setOpen(!menu.classList.contains('open'));
    });

    menu.addEventListener('click', function (e) {
        if (e.target.closest('a')) setOpen(false);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && menu.classList.contains('open')) {
            setOpen(false);
            toggle.focus();
        }
    });

    document.addEventListener('click', function (e) {
        if (menu.classList.contains('open') && !menu.contains(e.target) && !toggle.contains(e.target)) {
            setOpen(false);
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) setOpen(false);
    });
})();

/*
 * Show/hide password on the auth forms. Kept separate from the nav block above
 * because that one returns early when the nav is absent, and the auth pages have
 * no nav. Plain script rather than a framework, since this project has no
 * JavaScript bundler in use on these pages.
 */
(function () {
    var buttons = document.querySelectorAll('[data-password-toggle-button]');
    if (!buttons.length) return;

    Array.prototype.forEach.call(buttons, function (button) {
        button.addEventListener('click', function () {
            var field = document.getElementById(button.getAttribute('data-password-toggle-button') || button.getAttribute('aria-controls'));
            if (!field) return;

            var showing = field.type === 'text';
            field.type = showing ? 'password' : 'text';
            button.textContent = showing ? 'Lihat' : 'Sembunyikan';
            button.setAttribute('aria-label', showing ? 'Tampilkan kata sandi' : 'Sembunyikan kata sandi');
        });
    });
})();
