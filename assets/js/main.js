/**
 * PCSDF - Responsive & Mobile UI Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle with Body Scroll Lock
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

        // Close drawer when a link is clicked
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

    // 2. Sticky Header Elevation on Scroll
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }
    }, { passive: true });

    // 3. Animated Number Counters
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

    // 4. Partner Category Filter (Scrollable on Mobile)
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
                btn.style.color = '#FFFFFF';

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
});
