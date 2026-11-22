<?php
$page_title = "Entity Partners & Focal Points — Global Network";
require_once __DIR__ . '/includes/header.php';

$partners = getEntityPartners();
?>

<!-- ==========================================================================
     ENTITY PARTNERS HERO
     ========================================================================== -->
<section class="hero-section" style="padding: 3.25rem 0;">
    <div class="container text-center">
        <div class="hero-badge-wrap" style="justify-content: center;">
            <span class="badge badge-primary">Network of Networks</span>
            <span class="badge badge-gold">22 Global Entities</span>
            <span class="badge badge-primary">Focal Points</span>
        </div>
        
        <h1 class="display-title hero-title" style="margin-bottom: 0.85rem;">
            Entity Partners and Focal Points
        </h1>
        
        <p class="hero-lead container-narrow" style="margin: 0 auto 1.25rem auto;">
            Collaborating with official institutional partners, international think tanks, UN NGOs, feminist coalitions, space councils, and research foundations across all 193 UN member states, 2 observer states, and 10 territories.
        </p>

        <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">
            Every partner is linked with an officially designated Focal Point to steward mutual alignment with the PFICF-RSSDF constitutional architecture.
        </div>
    </div>
</section>

<!-- ==========================================================================
     FOOTPRINT METRICS STRIP
     ========================================================================== -->
<div class="metrics-strip">
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-card">
                <div class="num">193</div>
                <div class="title">UN Member States</div>
                <div class="desc">Co-creating solutions grounded in Brundtland and the SDGs.</div>
            </div>
            <div class="metric-card">
                <div class="num">2</div>
                <div class="title">UN Observer States</div>
                <div class="desc">Active dialogue with the Holy See (Vatican) and Palestine.</div>
            </div>
            <div class="metric-card">
                <div class="num">10</div>
                <div class="title">Dependent Territories</div>
                <div class="desc">Ensuring small island states and vulnerable commons have an equal voice.</div>
            </div>
            <div class="metric-card">
                <div class="num">22</div>
                <div class="title">Institutional Partners</div>
                <div class="desc">Accredited think tanks, youth councils, and civil society alliances.</div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     22 ENTITY PARTNERS DIRECTORY WITH OFFICIAL LOGOS & FOCAL POINTS
     ========================================================================== -->
<section class="section" id="partners">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Institutional Network</span>
            <h2 class="section-title">Directory of Entity Partners &amp; Focal Points</h2>
            <p class="section-subtitle">
                Institutional collaborators committed to peacebuilding, sustainable development, humanitarian cooperation, climate action, and systemic regeneration.
            </p>
        </div>

        <!-- Category Filter Buttons -->
        <div class="filter-pill-container" style="display: flex; justify-content: center; gap: 0.45rem; flex-wrap: wrap; margin-bottom: 2rem;">
            <button class="btn filter-btn active btn-sm" data-filter="all" style="border-radius: 2px;">All 22 Partners</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Peace & Security" style="border-radius: 2px;">Peace &amp; Security</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Finance" style="border-radius: 2px;">Regenerative Finance</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Youth & Women" style="border-radius: 2px;">Women &amp; Youth</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Indigenous & Frontier" style="border-radius: 2px;">Indigenous &amp; Frontier</button>
        </div>

        <!-- 22 Partners Grid -->
        <div class="partners-grid">
            <?php foreach ($partners as $index => $partner): 
                $c = $partner['category'] ?? '';
                if (stripos($c, 'Peace') !== false || stripos($c, 'Disarmament') !== false || stripos($c, 'Governance') !== false || stripos($c, 'Diplomacy') !== false) {
                    $cat_filter = 'Peace & Security';
                } elseif (stripos($c, 'Finance') !== false || stripos($c, 'Energy') !== false) {
                    $cat_filter = 'Finance';
                } elseif (stripos($c, 'Women') !== false || stripos($c, 'Youth') !== false || stripos($c, 'Civil Society') !== false) {
                    $cat_filter = 'Youth & Women';
                } else {
                    $cat_filter = 'Indigenous & Frontier';
                }
            ?>
                <div class="partner-card partner-card-item" id="partner-<?= $partner['id'] ?? ($index + 1) ?>" data-category="<?= $cat_filter ?>">
                    <!-- Logo Frame (Sharp Rectangular - No Curve) -->
                    <div class="partner-logo-frame">
                        <?php if (!empty($partner['logo']) && file_exists(__DIR__ . '/' . $partner['logo'])): ?>
                            <img src="<?= BASE_URL ?>/<?= htmlspecialchars($partner['logo']) ?>" alt="<?= htmlspecialchars($partner['name']) ?>" class="partner-logo-img">
                        <?php else: ?>
                            <div class="partner-avatar-placeholder">
                                <?= strtoupper(substr($partner['name'], 0, 2)) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.35rem;">
                        <span class="partner-num-badge">Partner #<?= sprintf('%02d', $partner['id'] ?? ($index + 1)) ?></span>
                        <span style="font-size: 0.72rem; font-weight: 700; color: var(--primary);"><?= htmlspecialchars($partner['category'] ?? 'Institutional') ?></span>
                    </div>
                    
                    <h3 class="partner-name"><?= htmlspecialchars($partner['name']) ?></h3>
                    
                    <!-- Focal Point Callout -->
                    <div class="focal-point-box">
                        <div class="focal-point-label">Designated Focal Point</div>
                        <div class="focal-point-name"><?= htmlspecialchars($partner['focal_point']) ?></div>
                    </div>
                    
                    <p class="partner-desc">
                        <?= htmlspecialchars($partner['description'] ?? '') ?>
                    </p>

                    <div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 0.72rem; color: var(--text-muted); font-weight: 600;">Status: Active Entity</span>
                        <a href="<?= BASE_URL ?>/contact.php?partner=<?= urlencode($partner['name']) ?>" style="font-size: 0.75rem; font-weight: 700; color: var(--primary);">
                            Inquire with Partner &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Partnership Track CTA -->
        <div class="feature-card text-center" style="margin-top: 3rem; border-top: 3px solid var(--primary); padding: 2.25rem 1.75rem;">
            <h3 style="font-size: 1.35rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800; margin-bottom: 0.5rem;">
                Become an Accredited Entity Partner
            </h3>
            <p style="font-size: 0.92rem; color: var(--text-body); max-width: 650px; margin: 0 auto 1.25rem auto; line-height: 1.7;">
                PCSDF welcomes global research organizations, diplomatic think tanks, indigenous councils, and civil society alliances to formally join our network-of-networks.
            </p>
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary">Submit Institutional Partnership Inquiry &rarr;</a>
        </div>
    </div>
</section>

<!-- Filter Interactivity Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const partnerCards = document.querySelectorAll('.partner-card-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.classList.add('btn-outline');
            });
            this.classList.add('active');
            this.classList.remove('btn-outline');

            const filter = this.getAttribute('data-filter');

            partnerCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
