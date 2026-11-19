<?php
require_once __DIR__ . '/config.php';
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div>
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.85rem;">
                    <div style="height: 38px; width: 38px; border-radius: 6px; background: #FFF; padding: 2px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Dove Logo" style="height: 100%; width: 100%; object-fit: contain;">
                    </div>
                    <div>
                        <div style="font-family: var(--font-display); font-size: 1.05rem; font-weight: 700; color: #FFF;">PC-SDF</div>
                        <div style="font-size: 0.7rem; color: #94A3B8;">Peace-Led Sustainable Development</div>
                    </div>
                </div>
                <p class="footer-brand-desc">
                    World’s first peace-led, faith- and Indigenous-inspired constitutional framework for sustainability across all systems, all life, and all generations.
                </p>
                <div style="display: flex; gap: 0.5rem; margin-top: 0.75rem;">
                    <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white btn-sm">
                        Facebook
                    </a>
                    <a href="<?= URL_LINKEDIN ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white btn-sm">
                        LinkedIn
                    </a>
                </div>
            </div>

            <!-- Framework & Architecture -->
            <div>
                <h4 class="footer-heading">Architecture</h4>
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
                <h4 class="footer-heading">Governance</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/about.php#board">Board of Directors</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#patrons">Distinguished Patrons</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php#ayoub">Spotlight: Jean Ayoub</a></li>
                    <li><a href="<?= BASE_URL ?>/network.php">22 Entity Partners</a></li>
                    <li><a href="<?= BASE_URL ?>/peace-tracker.php">Conflict &amp; Peace Tracker</a></li>
                </ul>
            </div>

            <!-- Headquarters & Contact -->
            <div>
                <h4 class="footer-heading">Singapore Secretariat</h4>
                <p style="font-size: 0.775rem; color: #CBD5E1; line-height: 1.5; margin-bottom: 0.65rem;">
                    <strong>The Peace-Led Climate-Friendly Sustainable Development Forum</strong><br>
                    <?= htmlspecialchars(CONTACT_ADDRESS) ?>
                </p>
                <p style="font-size: 0.775rem; color: #CBD5E1; margin-bottom: 0.35rem;">
                    <strong>Email:</strong> <a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>" style="color: #F87171;"><?= htmlspecialchars(CONTACT_EMAIL) ?></a>
                </p>
                <p style="font-size: 0.775rem; color: #CBD5E1; margin-bottom: 0.85rem;">
                    <strong>WhatsApp:</strong> <a href="https://wa.me/6580701667" target="_blank" style="color: #34D399; font-weight: 600;"><?= htmlspecialchars(CONTACT_PHONE) ?></a>
                </p>
                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm" style="width: 100%;">
                    Inquire / Schedule Call
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
                <a href="<?= BASE_URL ?>/admin/index.php" style="color: #94A3B8;">Admin &amp; DB</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= BASE_URL ?>/assets/js/main.js"></script>
</body>
</html>
