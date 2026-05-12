import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const menuToggle = document.querySelector('[data-mobile-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');
    const allAnchorLinks = document.querySelectorAll('a[href^="#"]');
    const revealTargets = document.querySelectorAll('.reveal-up');
    const preferReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const setNavbarState = () => {
        if (!navbar) {
            return;
        }

        if (window.scrollY > 14) {
            navbar.classList.add('bg-slate-950/85', 'border-white/15', 'shadow-[0_10px_40px_rgba(2,6,23,0.35)]');
        } else {
            navbar.classList.remove('bg-slate-950/85', 'border-white/15', 'shadow-[0_10px_40px_rgba(2,6,23,0.35)]');
        }
    };

    setNavbarState();
    window.addEventListener('scroll', setNavbarState, { passive: true });

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            menuToggle.setAttribute('aria-expanded', String(!isHidden));
        });
    }

    mobileLinks.forEach((link) => {
        link.addEventListener('click', () => {
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
            }

            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    });

    allAnchorLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetSelector = link.getAttribute('href');

            if (!targetSelector || targetSelector === '#') {
                return;
            }

            const targetElement = document.querySelector(targetSelector);
            if (!targetElement) {
                return;
            }

            event.preventDefault();
            targetElement.scrollIntoView({ behavior: preferReducedMotion ? 'auto' : 'smooth', block: 'start' });
        });
    });

    if (preferReducedMotion) {
        revealTargets.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.14,
            rootMargin: '0px 0px -40px 0px',
        },
    );

    revealTargets.forEach((target) => observer.observe(target));
});
