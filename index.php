<?php
$page_title = "Home — The Peace-Led Climate-Friendly Sustainable Development Forum";
require_once __DIR__ . '/includes/header.php';

$board = getBoardMembers();
$patrons = getPatrons();
$partners = getEntityPartners();
$accords = getPeaceAccords();
global $NINE_PILLARS;
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-badge-wrap">
                    <span class="badge badge-primary">
                        <span class="pulsing-dot"></span>
                        Year of the Horse 2026
                    </span>
                    <span class="badge badge-gold">PFICF-RSSDF Architecture</span>
                </div>
                
                <h1 class="display-title hero-title">
                    Governing Sustainability Across <span class="gradient-fire">All Systems &amp; Generations</span>
                </h1>

                <p class="hero-lead">
                    The world’s first peace-led, faith- and Indigenous-inspired constitutional framework built to steer climate action, human dignity, and planetary boundaries through an era of polycrisis.
                </p>

                <!-- Editorial Quote Card -->
                <div class="quote-highlight">
                    <p style="margin-bottom: 0.35rem; font-style: italic;">
                        “If future generations, nature, and the global commons cannot speak for themselves, who will speak for them?”
                    </p>
                    <div style="font-size: 0.775rem; font-weight: 700; color: #FF8A3D;">
                        — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect
                    </div>
                </div>

                <div class="hero-actions">
                    <a href="<?= BASE_URL ?>/framework.php" class="btn btn-primary">
                        Explore 30 Systems &rarr;
                    </a>
                    <a href="<?= BASE_URL ?>/about.php" class="btn btn-outline">
                        Leadership &amp; Patrons
                    </a>
                    <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline">
                        22 Entity Partners
                    </a>
                </div>
            </div>

            <!-- Hero Visual Card with Verified Dove Insignia -->
            <div>
                <div class="hero-visual-card">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span class="badge badge-gold" style="font-size: 0.65rem;">Official Insignia</span>
                        <span style="font-size: 0.7rem; color: #94A3B8; font-weight: 600;">Singapore Secretariat</span>
                    </div>

                    <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Official Dove Logo" class="hero-logo-display">
                    
                    <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.25rem;">
                        The Peace-Led Climate-Friendly Sustainable Development Forum
                    </h3>
                    <p style="font-size: 0.775rem; color: var(--text-muted); line-height: 1.45;">
                        Constitutional Architecture for Systemic Flourishing
                    </p>

                    <div class="hero-stat-row">
                        <div class="stat-item">
                            <div class="stat-number counter-anim" data-target="193">193</div>
                            <div class="stat-label">UN States</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number counter-anim" data-target="30">30</div>
                            <div class="stat-label">Systems</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number counter-anim" data-target="332">332</div>
                            <div class="stat-label">Sectors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sleek Metrics Strip -->
<div class="metrics-strip">
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-card">
                <div class="num">30</div>
                <div class="title">System Architecture</div>
                <div class="desc">Planetary, ecological, peace, economic, frontier, and risk systems held together.</div>
            </div>
            <div class="metric-card">
                <div class="num">332</div>
                <div class="title">Sector Taxonomy</div>
                <div class="desc">Shared classification taxonomy for regulators, investors, and communities.</div>
            </div>
            <div class="metric-card">
                <div class="num">9</div>
                <div class="title">Regenerative Pillars</div>
                <div class="desc">From Retention and Conservation to Transformation and Climate Justice.</div>
            </div>
            <div class="metric-card">
                <div class="num">22+</div>
                <div class="title">Global Entity Partners</div>
                <div class="desc">Transnational think tanks, UN NGOs, feminist coalitions, and space networks.</div>
            </div>
            <div class="metric-card">
                <div class="num">193+2</div>
                <div class="title">Universal Commons</div>
                <div class="desc">Serving 193 UN Member States, the Vatican, Palestine, and key territories.</div>
            </div>
        </div>
    </div>
</div>

<!-- Bento Grid Framework Showcase -->
<section class="section" id="bento-architecture">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Constitutional Operating System</span>
            <h2 class="section-title">The PFICF-RSSDF Bento Architecture</h2>
            <p class="section-subtitle">
                Moving from managing single targets to governing living systems through an interconnected constitutional framework.
            </p>
        </div>

        <div class="bento-grid">
            <!-- Bento 1: 30 Systems (Col 8) -->
            <div class="bento-card bento-col-8">
                <span class="bento-num">Systemic Foundation</span>
                <h3 class="bento-title">30-System Constitutional Governance</h3>
                <p class="bento-desc">
                    Spanning planetary boundaries, human dignity, multilateral disarmament, regenerative capital, ethical AI, and cosmic commons — holding climate, peace, ecosystems, and technology together as one living whole.
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 0.65rem; margin-top: 1.25rem;">
                    <div style="padding: 0.6rem 0.85rem; background: rgba(255,255,255,0.03); border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); font-size: 0.775rem;">
                        <strong style="color: #FF8A3D;">1. Planetary &amp; Atmosphere:</strong> Biosphere &amp; oceans
                    </div>
                    <div style="padding: 0.6rem 0.85rem; background: rgba(255,255,255,0.03); border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); font-size: 0.775rem;">
                        <strong style="color: #60A5FA;">2. Human &amp; Indigenous:</strong> Rights &amp; sacred guardianship
                    </div>
                    <div style="padding: 0.6rem 0.85rem; background: rgba(255,255,255,0.03); border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); font-size: 0.775rem;">
                        <strong style="color: #34D399;">3. Peace &amp; Multilateral:</strong> Disarmament &amp; treaties
                    </div>
                    <div style="padding: 0.6rem 0.85rem; background: rgba(255,255,255,0.03); border-radius: var(--radius-sm); border: 1px solid var(--border-subtle); font-size: 0.775rem;">
                        <strong style="color: #FBBF24;">4. Frontier &amp; Cosmic:</strong> Orbital law &amp; AI ethics
                    </div>
                </div>
            </div>

            <!-- Bento 2: 9 Pillars (Col 4) -->
            <div class="bento-card bento-col-4">
                <span class="bento-num">Operational Continuum</span>
                <h3 class="bento-title">Nine Regenerative Pillars</h3>
                <p class="bento-desc">
                    From halting degradation to active restoration and justice.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 1rem;">
                    <?php foreach ($NINE_PILLARS as $p): ?>
                        <span class="badge badge-glass" style="font-size: 0.65rem; padding: 0.2rem 0.55rem;"><?= htmlspecialchars($p['name']) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Bento 3: 332 Taxonomy Sectors (Col 4) -->
            <div class="bento-card bento-col-4">
                <span class="bento-num">Shared Dialect</span>
                <h3 class="bento-title">332-Sector Taxonomy</h3>
                <p class="bento-desc">
                    Comprehensive classification uniting agroforestry, deep-sea ecology, quantum cybersecurity, blue economy, and space debris mitigation.
                </p>
                <div style="margin-top: 1rem;">
                    <a href="<?= BASE_URL ?>/framework.php#sectors" class="btn btn-outline btn-sm" style="width: 100%;">View Taxonomy Matrix &rarr;</a>
                </div>
            </div>

            <!-- Bento 4: Intergenerational Finance & Hive (Col 8) -->
            <div class="bento-card bento-col-8">
                <span class="bento-num">Capital &amp; Accountability</span>
                <h3 class="bento-title">The Stewardship "Hive" &amp; 100-Year Finance</h3>
                <p class="bento-desc">
                    Replacing 30-year discount curves with 100-year and 300-year intergenerational discount models. Backed by a decentralized sensory "Hive" providing real-time telemetry across all 30 systems.
                </p>
                <div style="display: flex; gap: 0.75rem; margin-top: 1rem; flex-wrap: wrap;">
                    <span class="badge badge-emerald">Real-time Telemetry</span>
                    <span class="badge badge-gold">Regenerative Green Bonds</span>
                    <span class="badge badge-primary">Sovereign Debt Swaps</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Spotlight: Jean Ayoub -->
<section class="section section-alt">
    <div class="container">
        <div class="spotlight-card">
            <div style="text-align: center;">
                <div class="team-avatar-placeholder" style="width: 80px; height: 80px; margin: 0 auto 1rem auto; font-size: 1.85rem;">
                    JA
                </div>
                <span class="badge badge-primary" style="margin-bottom: 0.4rem;">Patron &amp; Senior Advisor</span>
                <h3 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.2rem;">Jean Ayoub</h3>
                <p style="font-size: 0.775rem; color: var(--primary); font-weight: 600;">17 Yrs Sec-Gen &amp; CEO, International Social Service</p>
                <div style="margin-top: 0.85rem;">
                    <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        LinkedIn Profile &rarr;
                    </a>
                </div>
            </div>

            <div>
                <span class="badge badge-gold" style="margin-bottom: 0.5rem; font-size: 0.68rem;">Foundational Pillar</span>
                <h2 style="font-size: 1.35rem; margin-bottom: 0.75rem; color: var(--text-main);">
                    Foundational Diplomatic Contribution
                </h2>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.68; margin-bottom: 0.75rem;">
                    Jean Ayoub’s elevation recognises his foundational contribution to PCSDF and his distinguished international diplomatic leadership. During his 17 years heading International Social Service (ISS), Jean stewarded a global network extending across 120+ countries defending child rights, cross-border social justice, and humanitarian law.
                </p>
                <p style="color: var(--text-body); font-size: 0.88rem; line-height: 1.65; margin-bottom: 1rem;">
                    As Senior Advisor, Jean guides multilateral institutional governance, linking PCSDF’s constitutional framework to global diplomatic missions.
                </p>
                <a href="<?= BASE_URL ?>/about.php#patrons" class="btn btn-primary btn-sm">View All 11 Distinguished Patrons &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Board of Directors Preview -->
<section class="section" id="board">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Institutional Oversight</span>
            <h2 class="section-title">Board of Directors</h2>
            <p class="section-subtitle">
                Guiding PCSDF's constitutional roadmap, institutional integrity, and strategic execution.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($board as $member): ?>
                <div class="team-card">
                    <div class="team-avatar-placeholder">
                        <?= strtoupper(substr($member['name'], 0, 1)) . (strpos($member['name'], ' ') !== false ? strtoupper(substr(explode(' ', $member['name'])[1], 0, 1)) : '') ?>
                    </div>
                    <h3 class="team-name"><?= htmlspecialchars($member['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($member['role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($member['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <a href="<?= htmlspecialchars($member['linkedin'] ?? URL_FACEBOOK) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.775rem; font-weight: 600; color: #FF8A3D;">
                            View Profile &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top: 2rem;">
            <a href="<?= BASE_URL ?>/about.php" class="btn btn-outline btn-sm">Explore Board, Patrons &amp; Advisors &rarr;</a>
        </div>
    </div>
</section>

<!-- Historic Spotlight: San Francisco 1951 -->
<section class="section section-dark">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 2.5rem; align-items: center;">
            <div>
                <span class="badge badge-glass" style="margin-bottom: 0.75rem;">Diplomatic Precedent</span>
                <h2 style="font-size: 1.65rem; color: #FFFFFF; margin-bottom: 0.75rem;">
                    San Francisco Peace Treaty (1951) &amp; J.R. Jayawardene
                </h2>
                
                <div class="quote-highlight" style="background: rgba(255, 77, 38, 0.08); border-left-color: #FF8A3D; color: #FEF08A; margin: 1rem 0;">
                    “Hatred ceases not by hatred, but by love.”
                    <div style="font-size: 0.75rem; color: #94A3B8; font-style: normal; margin-top: 0.25rem;">
                        — Former President J.R. Jayawardene of Sri Lanka, San Francisco Peace Conference (1951)
                    </div>
                </div>

                <p style="font-size: 0.85rem; color: #94A3B8; line-height: 1.6; margin-bottom: 1.25rem;">
                    When Allied nations met to determine the post-war status of Japan, Sri Lanka renounced war reparations and pleaded for magnanimity and reconciliation. The speech won the enduring gratitude of the Japanese people and remains an emblem of peace-led statecraft.
                </p>

                <div style="display: flex; gap: 0.75rem;">
                    <a href="<?= BASE_URL ?>/peace-tracker.php" class="btn btn-primary btn-sm">Explore Peace Tracker</a>
                    <a href="https://island.lk/jrjs-san-francisco-speech-that-won-japans-eternal-gratitude/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">Speech Archive &rarr;</a>
                </div>
            </div>

            <!-- Compact Accords List -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-card); border-radius: var(--radius-md); padding: 1.25rem;">
                <h4 style="color: #FFFFFF; font-size: 0.95rem; margin-bottom: 0.85rem;">Landmark Accords in Modern History</h4>
                
                <div style="display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.8rem;">
                    <div style="padding-bottom: 0.5rem; border-bottom: 1px solid var(--border-subtle);">
                        <strong style="color: #FF8A3D;">1973: Paris Peace Accords</strong>
                        <div style="color: #94A3B8; font-size: 0.75rem;">Ceasefire and U.S. combat role conclusion in Vietnam.</div>
                    </div>
                    <div style="padding-bottom: 0.5rem; border-bottom: 1px solid var(--border-subtle);">
                        <strong style="color: #FF8A3D;">1978: Camp David Accords</strong>
                        <div style="color: #94A3B8; font-size: 0.75rem;">Landmark peace treaty between Egypt and Israel.</div>
                    </div>
                    <div style="padding-bottom: 0.5rem; border-bottom: 1px solid var(--border-subtle);">
                        <strong style="color: #FF8A3D;">1987: Indo-Lanka Accord</strong>
                        <div style="color: #94A3B8; font-size: 0.75rem;">Provincial devolution in Sri Lanka and peacekeeping.</div>
                    </div>
                    <div>
                        <strong style="color: #FF8A3D;">2016: Colombian Peace Agreement</strong>
                        <div style="color: #94A3B8; font-size: 0.75rem;">Ending 50+ years of armed conflict with FARC.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call for Partnership -->
<section class="section" style="background: radial-gradient(circle at 50% 50%, rgba(255, 77, 38, 0.1), transparent 70%);">
    <div class="container text-center">
        <span class="badge badge-primary">Partnership Portal</span>
        <h2 class="section-title" style="margin-top: 0.4rem;">Ready to Bring Your Vision to Life?</h2>
        <p class="section-subtitle">
            We invite governments, international bodies, sovereign funds, and civil society to collaborate, test, and scale the PFICF-RSSDF framework.
        </p>

        <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap;">
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary">Start a Project / Inquire &rarr;</a>
            <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline">Explore 22 Entity Partners</a>
        </div>

        <div style="margin-top: 2rem; font-size: 0.8rem; color: #64748B;">
            <strong>Secretariat:</strong> <?= htmlspecialchars(CONTACT_ADDRESS) ?> &bull; WhatsApp: <?= htmlspecialchars(CONTACT_PHONE) ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
