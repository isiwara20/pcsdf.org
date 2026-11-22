<?php
$page_title = "Home — The Peace-Led Climate-Friendly Sustainable Development Forum";
require_once __DIR__ . '/includes/header.php';

$board = getBoardMembers();
$patrons = getPatrons();
$partners = getEntityPartners();
$accords = getPeaceAccords();
global $NINE_PILLARS;
?>

<!-- ==========================================================================
     HERO SECTION — UNCURVED FIRST PAGE LOGO, RED & BLACK PALETTE, YEAR OF THE HORSE
     ========================================================================== -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <!-- Year of the Horse & Governance Badges -->
                <div class="hero-badge-wrap">
                    <span class="badge badge-primary">
                        <span class="pulsing-dot"></span>
                        Year of the Horse 2026
                    </span>
                    <span class="badge badge-gold">PFICF-RSSDF Constitutional Framework</span>
                    <span class="badge badge-primary">Singapore CLG</span>
                </div>
                
                <h1 class="display-title hero-title">
                    The Peace-Led Climate-Friendly <span class="gradient-fire">Sustainable Development Forum</span>
                </h1>

                <!-- Official Year of the Horse Message -->
                <div class="year-horse-banner" style="background: rgba(185, 28, 28, 0.06); border-left: 3px solid var(--primary); padding: 0.95rem 1.15rem; margin-bottom: 1.25rem;">
                    <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--primary); margin-bottom: 0.25rem;">
                        Theme for 2026 &bull; Year of the Horse
                    </div>
                    <p style="font-size: 0.9rem; line-height: 1.55; color: var(--text-main); font-weight: 600; margin: 0;">
                        “Inspiring Peace-Led, Faith- and Indigenous-Inspired, Climate-Friendly Regeneration Across All Systems, All Life and All Generations... Exploring life’s intricate tapestry and championing systemic flourishing.”
                    </p>
                </div>

                <p class="hero-lead">
                    Governing sustainability in an era of polycrisis: the world’s first peace-led constitutional framework holding climate, peace, planetary boundaries, human dignity, and frontier technologies together as one living whole.
                </p>

                <!-- Founder's Signature Quotation -->
                <div class="quote-highlight" style="margin: 1.25rem 0;">
                    <p style="margin-bottom: 0.45rem; font-style: italic; font-size: 0.92rem; line-height: 1.65; color: var(--text-main);">
                        “Our framework is more than a model—it is a living covenant for humanity and all life: peace-led in spirit, faith- and Indigenous-inspired in wisdom, climate-friendly in action, regenerative in purpose, and intergenerational in responsibility. By integrating all systems—human, ecological, economic, digital, planetary, and beyond—it lights a path where ancient knowledge and future innovation unite for a just, thriving, and shared destiny.”
                    </p>
                    <div style="font-size: 0.8rem; font-weight: 800; color: var(--primary);">
                        — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect of PFICF-RSSDF
                    </div>
                </div>

                <div class="hero-actions">
                    <a href="<?= BASE_URL ?>/framework.php" class="btn btn-primary">
                        Explore 30-System Framework &rarr;
                    </a>
                    <a href="<?= BASE_URL ?>/about.php" class="btn btn-outline">
                        Leadership &amp; Patrons
                    </a>
                    <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline">
                        Entity Partners &amp; Focal Points
                    </a>
                </div>
            </div>

            <!-- First Page Logo & Institutional Verification Card -->
            <div>
                <div class="hero-visual-card">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; width: 100%;">
                        <span class="badge badge-primary" style="font-size: 0.68rem;">Verified Dove Insignia</span>
                        <span style="font-size: 0.72rem; color: var(--text-muted); font-weight: 700;">Singapore CLG</span>
                    </div>

                    <!-- Strictly Uncurved Logo Display -->
                    <div class="hero-logo-box">
                        <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Official Dove Logo" class="hero-logo-display">
                    </div>
                    
                    <h3 style="font-size: 1.15rem; color: var(--text-main); margin-top: 1rem; margin-bottom: 0.35rem; font-family: var(--font-display); font-weight: 800;">
                        PC-SDF Singapore
                    </h3>
                    <p style="font-size: 0.825rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1.25rem;">
                        Company Limited by Guarantee &bull; Incorporated 24 Dec 2021<br>
                        Keong Saik Road, Chinatown, Singapore
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
                            <div class="stat-label">Taxonomy Sectors</div>
                        </div>
                    </div>

                    <div style="margin-top: 1.25rem; width: 100%;">
                        <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm" style="width: 100%;">
                            Partner With Us &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     METRICS STRIP
     ========================================================================== -->
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

<!-- ==========================================================================
     OUR VISION & MISSION (Strict Red & Black Institutional Dual Cards)
     ========================================================================== -->
<section class="section" id="vision-mission">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Institutional Core</span>
            <h2 class="section-title">Vision &amp; Mission of PCSDF</h2>
            <p class="section-subtitle">
                Rooted in the Brundtland report, universal human rights, Indigenous wisdom, and planetary boundaries.
            </p>
        </div>

        <div class="grid-2col">
            <!-- Vision Card -->
            <div class="feature-card" style="border-top: 3px solid var(--primary);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.85rem;">
                    <span class="badge badge-primary">Our Vision</span>
                    <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 700;">All Systems &bull; All Life</span>
                </div>
                <h3 style="font-size: 1.35rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; font-family: var(--font-display);">
                    Regenerative Flourishing Across All Systems &amp; Commons
                </h3>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.85rem;">
                    Peace-led stewardship that fosters the flourishing and regeneration of interconnected systems—human and non-human—across societies, ecosystems, planetary boundaries, the shared global commons, and outer space as part of our broader cosmic commons.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.65; border-top: 1px solid var(--border-subtle); padding-top: 0.75rem;">
                    <strong>Guiding Tenet:</strong> Guided by peace, ethical stewardship, faith traditions, Indigenous wisdom, scientific knowledge, and respect for human dignity across all generations.
                </p>
            </div>

            <!-- Mission Card -->
            <div class="feature-card" style="border-top: 3px solid #111827;">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.85rem;">
                    <span class="badge badge-gold">Our Mission</span>
                    <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 700;">Governance &bull; Polycrisis</span>
                </div>
                <h3 style="font-size: 1.35rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; font-family: var(--font-display);">
                    Advancing Interconnected Systemic Governance
                </h3>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.85rem;">
                    Advancing peace-led, faith- and Indigenous-inspired, climate-friendly, and regenerative approaches to sustainability and governance in response to the interconnected challenges of the global polycrisis.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.65; border-top: 1px solid var(--border-subtle); padding-top: 0.75rem;">
                    <strong>Operational Approach:</strong> Through high-level dialogue, entity partnerships, policy architecture, and financial innovation, PCSDF strengthens resilience across environmental, social, economic, technological, cultural, and digital systems.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FRAMEWORK INTRODUCTION — GOVERNING SUSTAINABILITY IN AN ERA OF POLYCRISIS
     ========================================================================== -->
<section class="section section-alt" id="framework-intro">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Constitutional Architecture</span>
            <h2 class="section-title">Governing Sustainability in an Era of Polycrisis</h2>
            <p class="section-subtitle">
                Moving beyond single, siloed ESG targets to govern living systems through a holistic 30-system, 332-sector architecture.
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
                    <div style="padding: 0.65rem 0.85rem; background: var(--bg-surface); border-radius: 2px; border: 1px solid var(--border-subtle); font-size: 0.8rem;">
                        <strong style="color: var(--primary);">1. Planetary &amp; Atmosphere:</strong> Biosphere, oceans, climate
                    </div>
                    <div style="padding: 0.65rem 0.85rem; background: var(--bg-surface); border-radius: 2px; border: 1px solid var(--border-subtle); font-size: 0.8rem;">
                        <strong style="color: var(--primary);">2. Human &amp; Indigenous:</strong> Rights &amp; sacred guardianship
                    </div>
                    <div style="padding: 0.65rem 0.85rem; background: var(--bg-surface); border-radius: 2px; border: 1px solid var(--border-subtle); font-size: 0.8rem;">
                        <strong style="color: var(--primary);">3. Peace &amp; Multilateral:</strong> Disarmament &amp; treaties
                    </div>
                    <div style="padding: 0.65rem 0.85rem; background: var(--bg-surface); border-radius: 2px; border: 1px solid var(--border-subtle); font-size: 0.8rem;">
                        <strong style="color: var(--primary);">4. Frontier &amp; Cosmic:</strong> Orbital commons &amp; ethical AI
                    </div>
                </div>
            </div>

            <!-- Bento 2: 9 Pillars (Col 4) -->
            <div class="bento-card bento-col-4">
                <span class="bento-num">Operational Continuum</span>
                <h3 class="bento-title">Nine Regenerative Pillars</h3>
                <p class="bento-desc">
                    From halting degradation to active restoration, systemic transformation, and climate justice.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 1rem;">
                    <?php foreach ($NINE_PILLARS as $p): ?>
                        <span class="badge badge-primary" style="font-size: 0.68rem; padding: 0.25rem 0.55rem;"><?= htmlspecialchars($p['name']) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Bento 3: Sample Taxonomy Sectors (Col 4) - Responsive Apple Phone Safe -->
            <div class="bento-card bento-col-4 taxonomy-card">
                <span class="bento-num">Shared Dialect</span>
                <h3 class="bento-title">Sample Taxonomy Sectors</h3>
                <p class="bento-desc">
                    Clear classification across 332 sectors for regulators, capital allocators, and communities:
                </p>
                <div class="taxonomy-pill-list" style="display: flex; flex-direction: column; gap: 0.45rem; margin-top: 0.85rem; font-size: 0.825rem;">
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Regenerative Agriculture (34 Sectors)
                    </div>
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Clean Energy Trilemma (28 Sectors)
                    </div>
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Blue Economy &amp; Oceans (26 Sectors)
                    </div>
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Peace &amp; Disarmament (22 Sectors)
                    </div>
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Orbital Commons &amp; Space (18 Sectors)
                    </div>
                    <div style="padding: 0.35rem 0.5rem; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-left: 2px solid var(--primary); word-break: break-word;">
                        &bull; Ethical AI &amp; Web (30 Sectors)
                    </div>
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
                    <span class="badge badge-primary">Real-time Telemetry</span>
                    <span class="badge badge-gold">Regenerative Green Bonds</span>
                    <span class="badge badge-primary">Sovereign Debt Swaps</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SPOTLIGHT: JEAN AYOUB
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="spotlight-card">
            <div style="text-align: center;">
                <div class="person-photo-frame" style="width: 100px; height: 100px; margin: 0 auto 1rem auto;">
                    <img src="<?= BASE_URL ?>/assets/images/people/IMG_4243.jpeg" alt="Jean Ayoub" class="person-photo-img" onerror="this.onerror=null; this.src='<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg';">
                </div>
                <span class="badge badge-primary" style="margin-bottom: 0.4rem;">Patron &amp; Senior Advisor</span>
                <h3 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.2rem; font-family: var(--font-display); font-weight: 800;">
                    Jean Ayoub
                </h3>
                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; margin-bottom: 0.75rem;">
                    Geneva, Switzerland
                </p>
                <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    LinkedIn Profile &rarr;
                </a>
            </div>

            <div>
                <span class="badge badge-gold" style="margin-bottom: 0.5rem; font-size: 0.68rem;">Foundational Diplomatic Pillar</span>
                <h2 style="font-size: 1.4rem; margin-bottom: 0.75rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800;">
                    Jean Ayoub’s Foundational Contribution
                </h2>
                <p style="color: var(--text-body); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0.75rem;">
                    Jean Ayoub’s elevation recognises his foundational contribution to PCSDF and his distinguished international diplomatic leadership. During his <strong>17 years heading International Social Service (ISS)</strong>, Jean stewarded a global network extending across 120+ countries defending child rights, cross-border social justice, and humanitarian law.
                </p>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.7; margin-bottom: 1.25rem;">
                    As Senior Advisor, Jean guides multilateral institutional governance, linking PCSDF’s constitutional framework to global diplomatic missions, multilateral bodies, and international humanitarian forums.
                </p>
                <a href="<?= BASE_URL ?>/about.php" class="btn btn-primary btn-sm">
                    View All Patrons &amp; Senior Advisors &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     BOARD OF DIRECTORS PREVIEW
     ========================================================================== -->
<section class="section section-alt" id="board">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Governance &amp; Oversight</span>
            <h2 class="section-title">Board Members</h2>
            <p class="section-subtitle">
                Guiding PCSDF’s constitutional roadmap, institutional integrity, and fiduciary stewardship.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($board as $member): ?>
                <div class="team-card">
                    <div class="person-photo-frame">
                        <?php if (!empty($member['image']) && file_exists(__DIR__ . '/' . $member['image'])): ?>
                            <img src="<?= BASE_URL ?>/<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="person-photo-img">
                        <?php else: ?>
                            <div class="team-avatar-placeholder">
                                <?= strtoupper(substr($member['name'], 0, 1)) . (strpos($member['name'], ' ') !== false ? strtoupper(substr(explode(' ', $member['name'])[1], 0, 1)) : '') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="team-name"><?= htmlspecialchars($member['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($member['role'] ?? $member['title_role'] ?? 'Board Member') ?></div>
                    <p class="team-bio"><?= htmlspecialchars($member['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <a href="<?= htmlspecialchars($member['linkedin'] ?? URL_FACEBOOK) ?>" target="_blank" rel="noopener noreferrer" class="person-linkedin-btn">
                            LinkedIn Profile &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top: 2rem;">
            <a href="<?= BASE_URL ?>/about.php" class="btn btn-outline btn-sm">
                Explore Patrons, Board Members &amp; Advisors &rarr;
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HISTORIC SPOTLIGHT: SAN FRANCISCO 1951 PEACE TREATY (Responsive Apple Safe)
     ========================================================================== -->
<section class="section section-dark">
    <div class="container">
        <div class="historic-grid">
            <div>
                <span class="badge badge-primary" style="margin-bottom: 0.75rem;">Diplomatic Precedent</span>
                <h2 style="font-size: 1.65rem; color: #FFFFFF; margin-bottom: 0.75rem; font-family: var(--font-display); font-weight: 800;">
                    San Francisco Peace Treaty (1951) &amp; J.R. Jayawardene
                </h2>
                
                <div class="quote-highlight" style="background: rgba(185, 28, 28, 0.12); border-left-color: var(--primary); color: #FFFFFF; margin: 1.25rem 0;">
                    <p style="font-size: 1.1rem; font-style: italic; margin-bottom: 0.35rem; color: #FFFFFF;">
                        “Hatred ceases not by hatred, but by love.”
                    </p>
                    <div style="font-size: 0.775rem; color: #D1D5DB; font-style: normal;">
                        — Former President J.R. Jayawardene of Sri Lanka, San Francisco Peace Conference (1951)
                    </div>
                </div>

                <p style="font-size: 0.88rem; color: #D1D5DB; line-height: 1.65; margin-bottom: 1.25rem;">
                    When Allied nations met to determine the post-war status of Japan, Sri Lanka renounced war reparations and pleaded for magnanimity and reconciliation. The speech won the enduring gratitude of the Japanese people and remains an emblem of peace-led statecraft.
                </p>

                <div class="historic-actions">
                    <a href="<?= BASE_URL ?>/peace-tracker.php" class="btn btn-primary btn-sm">Explore Peace Tracker</a>
                    <a href="https://island.lk/jrjs-san-francisco-speech-that-won-japans-eternal-gratitude/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="color: #FFFFFF; border-color: rgba(255,255,255,0.3);">Speech Archive &nearr;</a>
                </div>
            </div>

            <!-- Responsive Accords Card: Formatted Cleanly For Apple Screens -->
            <div class="accords-card">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.85rem; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 0.5rem;">
                    <h4 style="color: #FFFFFF; font-size: 0.95rem; font-family: var(--font-display); font-weight: 800; margin: 0;">
                        Landmark Accords in Modern History
                    </h4>
                    <span style="font-size: 0.65rem; color: var(--primary); font-weight: 700; text-transform: uppercase;">Peace Milestones</span>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.825rem;">
                    <div class="accord-item">
                        <strong style="color: #EF4444;">1973: Paris Peace Accords</strong>
                        <div class="accord-desc">Ceasefire and U.S. combat role conclusion in Vietnam.</div>
                    </div>
                    <div class="accord-item">
                        <strong style="color: #EF4444;">1978: Camp David Accords</strong>
                        <div class="accord-desc">Landmark peace treaty between Egypt and Israel.</div>
                    </div>
                    <div class="accord-item">
                        <strong style="color: #EF4444;">1987: Indo-Lanka Accord</strong>
                        <div class="accord-desc">Provincial devolution in Sri Lanka and peacekeeping.</div>
                    </div>
                    <div class="accord-item">
                        <strong style="color: #EF4444;">2016: Colombian Peace Agreement</strong>
                        <div class="accord-desc">Ending 50+ years of armed conflict with FARC.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CALL FOR PARTNERSHIP (Strictly NO "Secretariat")
     ========================================================================== -->
<section class="section" style="border-top: 1px solid var(--border-subtle);">
    <div class="container text-center">
        <span class="badge badge-primary">Global Collaboration</span>
        <h2 class="section-title" style="margin-top: 0.5rem;">Join PCSDF as a Member, Volunteer, Sponsor or Partner</h2>
        <p class="section-subtitle">
            We invite governments, multilateral bodies, philanthropic organizations, academic institutions, and civil society to engage with the PFICF-RSSDF architecture.
        </p>

        <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap;">
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary">Inquire / Join a Track &rarr;</a>
            <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline">Explore 22 Entity Partners</a>
        </div>

        <div style="margin-top: 2rem; font-size: 0.85rem; color: var(--text-muted);">
            <strong>Headquarters:</strong> <?= htmlspecialchars(CONTACT_ADDRESS) ?> &bull; Phone / WhatsApp: <?= htmlspecialchars(CONTACT_PHONE) ?> &bull; Email: <?= htmlspecialchars(CONTACT_EMAIL) ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
