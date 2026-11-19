/**
 * PCSDF - Responsive, Mobile UI & Dual-Button Theme Switcher
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Dual-Button Theme Switcher (Light & Dark buttons)
    const themeButtons = document.querySelectorAll('.theme-segment-btn');

    function updateActiveThemeButtons(activeTheme) {
        themeButtons.forEach(btn => {
            const btnVal = btn.getAttribute('data-theme-val');
            if (btnVal === activeTheme) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // Set initial active state based on document attribute
    const initialTheme = document.documentElement.getAttribute('data-theme') || 'dark';
    updateActiveThemeButtons(initialTheme);

    // Click handler for theme buttons
    themeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetTheme = btn.getAttribute('data-theme-val');
            if (targetTheme) {
                document.documentElement.setAttribute('data-theme', targetTheme);
                updateActiveThemeButtons(targetTheme);
                try {
                    localStorage.setItem('pcsdf-theme', targetTheme);
                } catch (e) {}
            }
        });
    });

    // 2. Mobile Menu Toggle with Body Scroll Lock
    const mobileBtn = document.getElementById('mobileMenuToggle');
    const mobileNav = document.getElementById('mobileNavDrawer');
    
    if (mobileBtn && mobileNav) {
        mobileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileNav.classList.toggle('open');
            const isOpen = mobileNav.classList.contains('open');
            mobileBtn.setAttribute('aria-expanded', isOpen);
            mobileBtn.innerHTML = isOpen ? '&#x2715;' : '&#9776;';
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close drawer when link clicked
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('open');
                mobileBtn.innerHTML = '&#9776;';
                document.body.style.overflow = '';
            });
        });

        // Close drawer on tap outside
        document.addEventListener('click', (e) => {
            if (mobileNav.classList.contains('open') && !mobileNav.contains(e.target) && !mobileBtn.contains(e.target)) {
                mobileNav.classList.remove('open');
                mobileBtn.innerHTML = '&#9776;';
                document.body.style.overflow = '';
            }
        });
    }

    // 3. Sticky Header Scroll Elevation
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }
    }, { passive: true });

    // 4. Animated Number Counters
    const counters = document.querySelectorAll('.counter-anim');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-target') || '0', 10);
                    animateValue(entry.target, 0, target, 1400);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        counters.forEach(counter => observer.observe(counter));
    } else {
        counters.forEach(c => c.textContent = c.getAttribute('data-target'));
    }

    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // 5. Partner Category Filter (Scrollable on Mobile)
    const filterBtns = document.querySelectorAll('.filter-btn');
    const partnerCards = document.querySelectorAll('.partner-card-item');

    if (filterBtns.length > 0 && partnerCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('active');
                    b.style.background = '';
                    b.style.color = '';
                });
                btn.classList.add('active');
                btn.style.background = 'var(--text-main)';
                btn.style.color = 'var(--bg-canvas)';

                const cat = btn.getAttribute('data-filter');

                partnerCards.forEach(card => {
                    if (cat === 'all' || card.getAttribute('data-category') === cat) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 6. Top Scroll Progress Indicator
    const progressBar = document.getElementById('scrollProgressBar');
    const updateScrollProgress = () => {
        if (!progressBar) return;
        const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
        progressBar.style.width = scrolled + '%';
    };
    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();

    // 7. Scroll-to-Top Floating Button
    const scrollTopBtn = document.getElementById('scrollToTopBtn');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 350) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        }, { passive: true });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 8. Modern Scroll Reveal Animations (IntersectionObserver-Powered)
    const autoRevealSelectors = [
        '.section-title',
        '.section-subtitle',
        '.bento-card',
        '.spotlight-card',
        '.pillar-card',
        '.team-card',
        '.partner-card-item',
        '.accord-card',
        '.quote-highlight',
        '.counter-card',
        '.stat-pill',
        '.hero-card'
    ];

    const elementsToReveal = [];
    autoRevealSelectors.forEach(selector => {
        document.querySelectorAll(selector).forEach(el => {
            if (!el.classList.contains('scroll-reveal')) {
                el.classList.add('scroll-reveal');
                elementsToReveal.push(el);
            }
        });
    });

    // Tag container grids for staggered cascades
    const gridSelectors = [
        '.bento-grid',
        '.pillars-grid',
        '.team-grid',
        '.partners-grid'
    ];
    gridSelectors.forEach(sel => {
        document.querySelectorAll(sel).forEach(grid => {
            grid.classList.add('reveal-stagger');
        });
    });

    // Animate on scroll
    if ('IntersectionObserver' in window && elementsToReveal.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -30px 0px'
        });

        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        elementsToReveal.forEach(el => {
            const rect = el.getBoundingClientRect();
            // If already above or well inside the viewport, reveal immediately
            if (rect.top < viewportHeight * 0.95 && rect.bottom > 0) {
                el.classList.add('is-revealed');
            } else {
                revealObserver.observe(el);
            }
        });
    } else {
        elementsToReveal.forEach(el => el.classList.add('is-revealed'));
    }
});
