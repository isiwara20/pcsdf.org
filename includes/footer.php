<?php
require_once __DIR__ . '/config.php';
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div>
                <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 1rem;">
                    <div style="height: 48px; width: auto; min-width: 90px; max-width: 130px; border-radius: 0; background: #FFF; padding: 3px 6px; display: flex; align-items: center; justify-content: center; border: 1px solid #374151;">
                        <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Dove Logo" style="height: 100%; width: 100%; object-fit: contain; border-radius: 0;">
                    </div>
                    <div>
                        <div style="font-family: var(--font-display); font-size: 1.15rem; font-weight: 800; color: #FFF; letter-spacing: 0.04em;">PC-SDF</div>
                        <div style="font-size: 0.72rem; color: #EF4444; font-weight: 600;">Peace-Led Sustainable Development</div>
                    </div>
                </div>
                <p class="footer-brand-desc">
                    World’s first peace-led, faith- and Indigenous-inspired constitutional framework for sustainability across all systems, all life, and all generations.
                </p>
                <div style="display: flex; gap: 0.5rem; margin-top: 0.75rem;">
                    <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="color: #FFF; border-color: #4B5563;">
                        Facebook
                    </a>
                    <a href="https://www.linkedin.com/in/chaitri-hapugalle" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="color: #FFF; border-color: #4B5563;">
                        LinkedIn
                    </a>
                </div>
            </div>

            <!-- Framework & Architecture -->
            <div>
                <h4 class="footer-heading" style="color: #EF4444; border-bottom: 2px solid #B91C1C; display: inline-block; padding-bottom: 0.25rem;">Architecture</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/framework.php">PFICF-RSSDF Overview</a></li>
                    <li><a href="<?= BASE_URL ?>/framework.php#systems">30-System Architecture</a></li>
                    <li><a href="<?= BASE_URL ?>/framework.php#pillars">9 Regenerative Pillars</a></li>
                    <li><a href="<?= BASE_URL ?>/framework.php#sectors">332-Sector Taxonomy</a></li>
                    <li><a href="<?= BASE_URL ?>/framework.php#finance">Regenerative Finance</a></li>
                </ul>
            </div>

            <!-- Leadership -->
            <div>
                <h4 class="footer-heading" style="color: #EF4444; border-bottom: 2px solid #B91C1C; display: inline-block; padding-bottom: 0.25rem;">Governance</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/about.php#patrons">Patrons &amp; Senior Advisors</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#board">Board Members</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#advisors">Technical Advisors</a></li>
                    <li><a href="<?= BASE_URL ?>/network.php">Entity Partners &amp; Focal Points</a></li>
                    <li><a href="<?= BASE_URL ?>/peace-tracker.php">Peace &amp; Conflict Tracker</a></li>
                </ul>
            </div>

            <!-- Headquarters & Contact (NO Secretariat word used) -->
            <div>
                <h4 class="footer-heading" style="color: #EF4444; border-bottom: 2px solid #B91C1C; display: inline-block; padding-bottom: 0.25rem;">Contact &amp; Registration</h4>
                <p style="font-size: 0.775rem; color: #E5E7EB; line-height: 1.5; margin-bottom: 0.65rem;">
                    <strong>The Peace-Led Climate-Friendly Sustainable Development Forum</strong><br>
                    <?= htmlspecialchars(LEGAL_REGISTRATION) ?><br>
                    <?= htmlspecialchars(CONTACT_ADDRESS) ?>
                </p>
                <p style="font-size: 0.775rem; color: #CBD5E1; margin-bottom: 0.35rem;">
                    <strong>Email:</strong><br>
                    <a href="mailto:chapugalle@pcsdf.org" style="color: #F87171;">chapugalle@pcsdf.org</a><br>
                    <a href="mailto:chaihapugalle@gmail.com" style="color: #F87171;">chaihapugalle@gmail.com</a>
                </p>
                <p style="font-size: 0.775rem; color: #CBD5E1; margin-bottom: 0.85rem;">
                    <strong>Phone / WhatsApp:</strong><br>
                    <a href="https://wa.me/6597240021" target="_blank" style="color: #34D399; font-weight: 700;"><?= htmlspecialchars(CONTACT_PHONE) ?></a>
                </p>
                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm" style="width: 100%; border-radius: 2px;">
                    Inquire / Start a Project &rarr;
                </a>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; <?= date('Y') ?> <strong>PCSDF</strong>. All rights reserved.
            </div>
            <div style="display: flex; gap: 1.25rem;">
                <a href="<?= BASE_URL ?>/disclaimer.php" style="color: #94A3B8;">Disclaimer</a>
                <a href="<?= BASE_URL ?>/privacy-policy.php" style="color: #94A3B8;">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Scroll-to-Top Button -->
<button type="button" class="scroll-to-top" id="scrollToTopBtn" aria-label="Scroll back to top">
    &#8593;
</button>

<!-- Scripts -->
<script src="<?= BASE_URL ?>/assets/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>"></script>
</body>
</html>
