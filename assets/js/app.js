// X03solutions — Main Script

// ── Mega Menu (click-to-open) ─────────────────────────────
const initMegaMenus = () => {
    const navItems = [...document.querySelectorAll('.nav-item')]
        .filter(i => i.querySelector('.mega-menu'));

    let activeItem = null;

    const closeAll = () => {
        if (!activeItem) return;
        activeItem.classList.remove('mega-active');
        activeItem.querySelector('.mega-menu').classList.remove('mega-open');
        activeItem = null;
    };

    navItems.forEach(item => {
        const btn  = item.querySelector('.nav-link');
        const menu = item.querySelector('.mega-menu');

        btn.addEventListener('click', e => {
            e.stopPropagation();
            if (activeItem === item) {
                closeAll();
            } else {
                closeAll();
                activeItem = item;
                item.classList.add('mega-active');
                menu.classList.add('mega-open');
            }
        });
    });

    // Click anywhere outside closes the open menu
    document.addEventListener('click', closeAll);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeAll(); });
};

// ── Navigation ────────────────────────────────────────────
const initNav = () => {
    const nav = document.getElementById('main-nav');
    if (!nav) return;

    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 8);
    }, { passive: true });

    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            btn.setAttribute('aria-expanded', String(isOpen));
            iconOpen?.classList.toggle('hidden', isOpen);
            iconClose?.classList.toggle('hidden', !isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });
    }

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && menu?.classList.contains('open')) {
            menu.classList.remove('open');
            iconOpen?.classList.remove('hidden');
            iconClose?.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });

    // Active page link
    const page = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('[data-page]').forEach(el => {
        if (el.dataset.page === page) el.classList.add('active');
    });
};

// ── Scroll Reveal ─────────────────────────────────────────
const initScrollReveal = () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const delay = parseInt(el.dataset.revealDelay || 0);
            setTimeout(() => el.classList.add('is-visible'), delay);
            observer.unobserve(el);
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -24px 0px' });

    document.querySelectorAll('[data-reveal]').forEach(el => observer.observe(el));
};

// ── Smooth anchor scroll with nav offset ──────────────────
const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const id = a.getAttribute('href').slice(1);
            const target = document.getElementById(id);
            if (!target) return;
            e.preventDefault();
            window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 80, behavior: 'smooth' });
        });
    });
};

// ── Init ──────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    initMegaMenus();
    initNav();
    initScrollReveal();
    initSmoothScroll();
});
