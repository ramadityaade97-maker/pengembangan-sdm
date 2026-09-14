// Gallery Slider Implementation
document.addEventListener('DOMContentLoaded', function() {
    const galleryWrapper = document.querySelector('.gallery-wrapper');
    const galleryContainer = document.getElementById('galleryContainer');
    const prevBtn = document.getElementById('galleryPrev');
    const nextBtn = document.getElementById('galleryNext');

    if (!galleryWrapper || !galleryContainer) return;

    // Configuration
    const autoSlideSpeed = 1; // px per frame
    const scrollAmount = 300; // px per click
    let isPaused = false;
    let autoSlideInterval;
    
    // Add placeholder images if empty
    if (galleryContainer.children.length === 0) {
        for (let i = 1; i <= 8; i++) {
            const item = document.createElement('div');
            item.className = 'gallery-item';
            const img = document.createElement('img');
            img.src = '/images/gallery_placeholder.jpg';
            img.alt = 'Gallery ' + i;
            item.appendChild(img);
            galleryContainer.appendChild(item);
        }
    }

    // Clone items for infinite loop
    const items = Array.from(galleryContainer.children);
    items.forEach(item => {
        const clone = item.cloneNode(true);
        galleryContainer.appendChild(clone);
    });

    // Auto Sliding logic
    function startAutoSlide() {
        autoSlideInterval = requestAnimationFrame(slide);
    }

    function slide() {
        if (!isPaused) {
            galleryWrapper.scrollLeft += autoSlideSpeed;
            // Check if we reached the middle (the start of the cloned items)
            if (galleryWrapper.scrollLeft >= (galleryContainer.scrollWidth / 2)) {
                galleryWrapper.scrollLeft = 0;
            }
        }
        autoSlideInterval = requestAnimationFrame(slide);
    }

    // Pause on Hover
    galleryWrapper.addEventListener('mouseenter', () => isPaused = true);
    galleryWrapper.addEventListener('mouseleave', () => isPaused = false);

    if (prevBtn) {
        prevBtn.addEventListener('mouseenter', () => isPaused = true);
        prevBtn.addEventListener('mouseleave', () => isPaused = false);
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('mouseenter', () => isPaused = true);
        nextBtn.addEventListener('mouseleave', () => isPaused = false);
    }

    // Navigation Buttons
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            galleryWrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            galleryWrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }

    // Start auto slide
    startAutoSlide();
});

// Elegant Navbar — toggle, scrolled, active link
document.addEventListener('DOMContentLoaded', function(){
  const navbar = document.getElementById('navbar');
  const toggle = document.getElementById('navToggle');
  const mobile = document.getElementById('navMobile');
  const links = document.querySelectorAll('.nav-link, .nav-mobile-link');

  if(toggle && mobile){
    toggle.addEventListener('click', ()=>{
      const open = mobile.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
    });
    // close on link click
    mobile.querySelectorAll('a').forEach(a=>{
      a.addEventListener('click', ()=>{
        mobile.classList.remove('open');
        toggle.setAttribute('aria-expanded','false');
        document.body.style.overflow='';
      });
    });
    // close on outside click
    document.addEventListener('click', (e)=>{
      if(!navbar.contains(e.target) && mobile.classList.contains('open')){
        mobile.classList.remove('open');
        toggle.setAttribute('aria-expanded','false');
        document.body.style.overflow='';
      }
    });
  }

  if(navbar){
    const onScroll = ()=> {
      if(window.scrollY > 12) navbar.classList.add('scrolled');
      else navbar.classList.remove('scrolled');
    };
    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();
  }

  // active link on scroll via IntersectionObserver
  const sections = ['','tentang-kami','galeri','program'].map(id=>{
    if(!id) return {id:'', el: document.documentElement};
    const el=document.getElementById(id);
    return el ? {id, el} : null;
  }).filter(Boolean);

  function setActive(hash){
    document.querySelectorAll('.nav-link').forEach(a=>{
      const href=a.getAttribute('href');
      a.classList.toggle('active', href===hash || (hash==='#' && href==='#') || (hash==='' && href==='#'));
    });
    document.querySelectorAll('.nav-mobile-link').forEach(a=>{
      const href=a.getAttribute('href');
      a.classList.toggle('active', href===hash || (hash==='#' && href==='#'));
    });
  }

  // click active immediately
  links.forEach(a=>{
    a.addEventListener('click', ()=> setActive(a.getAttribute('href')));
  });

  if('IntersectionObserver' in window){
    const obs = new IntersectionObserver((entries)=>{
      entries.forEach(entry=>{
        if(entry.isIntersecting){
          const id=entry.target.id;
          const hash = id ? '#'+id : '#';
          // prefer non-empty hash near top
          if(entry.intersectionRatio > 0.3) setActive(hash);
        }
      });
    }, {threshold:[0.3,0.6], rootMargin:'-18% 0px -62% 0px'});
    ['tentang-kami','galeri','program'].forEach(id=>{
      const el=document.getElementById(id);
      if(el) obs.observe(el);
    });
    // also observe top to reset to Beranda
    const hero=document.querySelector('.section-1');
    if(hero) obs.observe(hero);
  }
});

