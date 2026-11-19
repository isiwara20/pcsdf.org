<?php
$page_title = "Global Network & 22 Entity Partners";
require_once __DIR__ . '/includes/header.php';

$partners = getEntityPartners();
?>

<!-- Network Hero -->
<section class="hero-section" style="padding: 2.8rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Network of Networks</span>
            <span class="badge badge-gold">Global Footprint</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            Global Network-of-Networks &amp; 22 Entity Partners
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            A network of networks supporting all 193 UN member countries, two non-voting observer states (the Vatican and Palestine), and ten dependent territories.
        </p>
    </div>
</section>

<!-- Footprint Metrics Strip -->
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
                <div class="desc">Ensuring vulnerable small island states have an equal voice.</div>
            </div>
            <div class="metric-card">
                <div class="num">22</div>
                <div class="title">Institutional Partners</div>
                <div class="desc">Strategic think tanks, defense councils, and civil alliances.</div>
            </div>
        </div>
    </div>
</div>

<!-- 22 Entity Partners Section -->
<section class="section" id="partners">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Institutional Affiliates</span>
            <h2 class="section-title">Entity Partners, Focal Points &amp; Advisors</h2>
            <p class="section-subtitle">
                Institutional collaborators committed to peacebuilding, sustainable development, humanitarian cooperation, climate action, and systemic regeneration.
            </p>
        </div>

        <!-- Filter Controls (Horizontally Scrollable on Mobile) -->
        <div class="filter-pill-container">
            <button class="btn filter-btn active btn-sm" data-filter="all" style="background: var(--text-main); color: #FFF; border-radius: var(--radius-full);">All 22 Partners</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Peace & Security" style="border-radius: var(--radius-full);">Peace &amp; Security</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Finance" style="border-radius: var(--radius-full);">Regenerative Finance</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Youth & Women" style="border-radius: var(--radius-full);">Women &amp; Youth</button>
            <button class="btn filter-btn btn-sm btn-outline" data-filter="Indigenous & Frontier" style="border-radius: var(--radius-full);">Indigenous &amp; Space</button>
        </div>

        <!-- Partners Grid -->
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
                <div class="partner-card partner-card-item" data-category="<?= $cat_filter ?>">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.4rem;">
                        <span class="partner-num-badge">Partner #<?= sprintf('%02d', $partner['id'] ?? ($index + 1)) ?></span>
                        <span style="font-size: 0.68rem; font-weight: 600; color: var(--text-muted);"><?= htmlspecialchars($partner['category'] ?? 'Institutional') ?></span>
                    </div>
                    
                    <h3 class="partner-name"><?= htmlspecialchars($partner['name']) ?></h3>
                    
                    <div class="partner-focal">
                        <strong>Focal Point:</strong> <?= htmlspecialchars($partner['focal_point']) ?>
                    </div>
                    
                    <p class="partner-desc">
                        <?= htmlspecialchars($partner['description'] ?? '') ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Call to Affiliate -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 2rem; margin-top: 3rem; text-align: center; box-shadow: var(--shadow-card);">
            <h3 style="font-size: 1.3rem; color: var(--text-main); margin-bottom: 0.5rem;">
                Become an Institutional Focal Point or Partner
            </h3>
            <p style="max-width: 620px; margin: 0 auto 1.25rem auto; color: var(--text-body); font-size: 0.9rem; line-height: 1.65;">
                Does your institution, think tank, indigenous council, or youth network share our commitment to peace-led, climate-friendly planetary stewardship? We invite you to join our network.
            </p>
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm">Submit Affiliation Inquiry &rarr;</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
