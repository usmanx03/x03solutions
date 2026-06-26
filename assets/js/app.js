// ============================================================
// X03 Solutions — Main Application Script
// ============================================================

// ── Navigation ───────────────────────────────────────────────
const initNav = () => {
    const nav = document.getElementById('main-nav');
    if (!nav) return;

    // Scroll shadow
    const onScroll = () => {
        nav.classList.toggle('scrolled', window.scrollY > 8);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-menu-open');
    const iconClose = document.getElementById('icon-menu-close');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            btn.setAttribute('aria-expanded', isOpen);
            if (iconOpen) iconOpen.classList.toggle('hidden', isOpen);
            if (iconClose) iconClose.classList.toggle('hidden', !isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });
    }

    // Close mobile menu on escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menu && menu.classList.contains('open')) {
            menu.classList.remove('open');
            if (iconOpen) iconOpen.classList.remove('hidden');
            if (iconClose) iconClose.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });

    // Highlight active page link
    const path = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('[data-page]').forEach(el => {
        if (el.dataset.page === path || (path === '' && el.dataset.page === 'index.html')) {
            el.classList.add('active');
        }
    });

    // Mobile accordion for sub-links
    document.querySelectorAll('.mobile-accordion-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const target = document.getElementById(btn.dataset.target);
            const isOpen = target.classList.toggle('hidden');
            btn.querySelector('.mobile-acc-chevron')?.classList.toggle('rotate-180', !isOpen);
        });
    });
};

// ── Scroll Reveal ────────────────────────────────────────────
const initScrollReveal = () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const delay = parseInt(el.dataset.revealDelay || 0);
            setTimeout(() => el.classList.add('is-visible'), delay);
            observer.unobserve(el);
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });

    document.querySelectorAll('[data-reveal]').forEach(el => observer.observe(el));
};

// ── Stagger children reveal ──────────────────────────────────
const initStagger = () => {
    const groups = document.querySelectorAll('[data-stagger]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const children = entry.target.querySelectorAll('[data-stagger-item]');
            children.forEach((child, i) => {
                setTimeout(() => child.classList.add('is-visible'), i * 80);
            });
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.06, rootMargin: '0px 0px -24px 0px' });

    groups.forEach(g => observer.observe(g));
};

// ── Contact form ─────────────────────────────────────────────
const initContactForm = () => {
    const form = document.getElementById('contact-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('[type="submit"]');
        const original = btn.innerHTML;

        btn.disabled = true;
        btn.innerHTML = `
            <svg class="animate-spin" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
            </svg>
            Sending...
        `;

        setTimeout(() => {
            btn.innerHTML = `
                <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Message sent — we'll be in touch.
            `;
            btn.style.background = '#059669';
        }, 1400);
    });
};

// ── Typed headline ───────────────────────────────────────────
const initTyped = () => {
    const el = document.getElementById('typed-word');
    if (!el) return;

    const words = ['Cloud Systems', 'AI Workflows', 'Custom Software', 'Enterprise Platforms', 'Business Automation'];
    let wi = 0, ci = 0, deleting = false, paused = false;

    const tick = () => {
        const word = words[wi];

        if (paused) {
            paused = false;
            deleting = true;
            setTimeout(tick, 1800);
            return;
        }

        if (!deleting) {
            el.textContent = word.slice(0, ci + 1);
            ci++;
            if (ci === word.length) { paused = true; setTimeout(tick, 100); }
            else setTimeout(tick, 72);
        } else {
            el.textContent = word.slice(0, ci - 1);
            ci--;
            if (ci === 0) {
                deleting = false;
                wi = (wi + 1) % words.length;
                setTimeout(tick, 320);
            } else {
                setTimeout(tick, 38);
            }
        }
    };

    setTimeout(tick, 600);
};

// ── Smooth anchor scroll with offset ─────────────────────────
const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const id = a.getAttribute('href').slice(1);
            const target = document.getElementById(id);
            if (!target) return;
            e.preventDefault();
            const top = target.getBoundingClientRect().top + window.scrollY - 80;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });
};

// ── Init ─────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    initNav();
    initScrollReveal();
    initStagger();
    initContactForm();
    initTyped();
    initSmoothScroll();
});
