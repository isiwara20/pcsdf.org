<?php
require_once __DIR__ . '/config.php';
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div>
                <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 1rem;">
                    <div style="height: 48px; width: auto; min-width: 90px; max-width: 130px; border-radius: 0; background: #FFF; padding: 3px 6px; display: flex; align-items: center; justify-content: center; border: 1px solid #D1D5DB;">
                        <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Dove Logo" style="height: 100%; width: 100%; object-fit: contain; border-radius: 0;">
                    </div>
                    <div>
                        <div style="font-family: var(--font-display); font-size: 1.15rem; font-weight: 800; background: #B91C1C; color: #FFFFFF; padding: 2px 8px; border-radius: 2px; letter-spacing: 0.04em; display: inline-block;">PC-SDF</div>
                        <div style="font-size: 0.72rem; color: #B91C1C; font-weight: 700; margin-top: 3px;">Peace-Led Sustainable Development</div>
                    </div>
                </div>
                <p class="footer-brand-desc">
                    World’s first peace-led, faith- and Indigenous-inspired constitutional framework for sustainability across all systems, all life, and all generations.
                </p>
                <div style="display: flex; gap: 0.5rem; margin-top: 0.75rem;">
                    <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        Facebook Network
                    </a>
                    <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        LinkedIn
                    </a>
                </div>
            </div>

            <!-- Quick Navigation (Strictly following pcsdf.org) -->
            <div>
                <h4 class="footer-heading">Navigation</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php">About Us</a></li>
                    <li><a href="<?= BASE_URL ?>/contact.php">Call For Action / Journey</a></li>
                    <li><a href="<?= BASE_URL ?>/poems.php">Poems</a></li>
                    <li><a href="<?= BASE_URL ?>/disclaimer.php">Disclaimer</a></li>
                    <li><a href="<?= BASE_URL ?>/privacy-policy.php">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Governance Pillars -->
            <div>
                <h4 class="footer-heading">Governance</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/about.php#board">Board of Directors</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#patrons">Distinguished Patrons and Senior Advisors</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#partners">Entity Partners &amp; Focal Points</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#advisors">Technical Advisors</a></li>
                </ul>
            </div>

            <!-- Contact & Registration (Direct from pcsdf.org) -->
            <div>
                <h4 class="footer-heading">Contact &amp; Registration</h4>
                <p style="font-size: 0.8rem; color: #111827; line-height: 1.5; margin-bottom: 0.65rem;">
                    <strong>The Peace-Led Climate-Friendly Sustainable Development Forum</strong><br>
                    <?= htmlspecialchars(LEGAL_REGISTRATION) ?><br>
                    <?= htmlspecialchars(CONTACT_ADDRESS) ?>
                </p>
                <p style="font-size: 0.8rem; color: #374151; margin-bottom: 0.35rem;">
                    <strong>Direct Email Inquiries:</strong><br>
                    <a href="mailto:chapugalle@pcsdf.org" style="color: #B91C1C; font-weight: 600;">chapugalle@pcsdf.org</a><br>
                    <a href="mailto:chaihapugalle@gmail.com" style="color: #B91C1C; font-weight: 600;">chaihapugalle@gmail.com</a><br>
                    <a href="mailto:tpcsdf@gmail.com" style="color: #B91C1C; font-weight: 600;">tpcsdf@gmail.com</a>
                </p>
                <p style="font-size: 0.8rem; color: #374151; margin-bottom: 0.85rem;">
                    <strong>Phone &amp; WhatsApp:</strong><br>
                    <a href="https://wa.me/6597240021" target="_blank" style="color: #15803D; font-weight: 700;"><?= htmlspecialchars(CONTACT_PHONE) ?></a>
                </p>
                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm" style="width: 100%; border-radius: 2px;">
                    Inquire / Start a Project &rarr;
                </a>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; <?= date('Y') ?> <strong>PC-SDF</strong>. All rights reserved. <a href="https://pcsdf.org" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600;">www.pcsdf.org</a>
            </div>
            <div style="display: flex; gap: 1.25rem;">
                <a href="<?= BASE_URL ?>/disclaimer.php">Disclaimer</a>
                <a href="<?= BASE_URL ?>/privacy-policy.php">Privacy Policy</a>
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
