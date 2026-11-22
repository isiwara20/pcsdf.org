<?php
$page_title = "About Us — Leadership, Patrons & Governance";
require_once __DIR__ . '/includes/header.php';

$patrons = getPatrons();
$board = getBoardMembers();
$advisors = getAdvisors();
$partners = getEntityPartners();
?>

<!-- ==========================================================================
     ABOUT HERO SECTION — RED & BLACK DIPLOMATIC INSTITUTIONAL PROFILE
     ========================================================================== -->
<section class="hero-section" style="padding: 3.25rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Institutional Profile</span>
            <span class="badge badge-gold">Constitutional Governance</span>
            <span class="badge badge-primary">Singapore CLG</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            About PCSDF, Leadership &amp; Governance
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            A global network-of-networks pioneering the world’s first peace-led constitutional framework holding climate, peace, planetary boundaries, human dignity, and frontier technologies together as one living whole.
        </p>
        <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">
            Incorporated as a Company Limited by Guarantee in Singapore on 24 December 2021 &bull; Global E-Launch: 7 June 2022
        </div>
    </div>
</section>

<!-- ==========================================================================
     VISION & MISSION DUAL CARDS
     ========================================================================== -->
<section class="section" id="vision-mission">
    <div class="container">
        <div class="grid-2col">
            <!-- Vision -->
            <div class="feature-card" style="border-top: 3px solid var(--primary);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                    <span class="badge badge-primary">Our Vision</span>
                    <span style="font-size: 0.725rem; font-weight: 700; color: var(--text-muted);">All Systems &bull; All Generations</span>
                </div>
                <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem; font-family: var(--font-display); font-weight: 800;">
                    Regenerative Flourishing Across All Systems &amp; Commons
                </h2>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.85rem;">
                    Peace-led stewardship that fosters the flourishing and regeneration of interconnected systems—human and non-human—across societies, ecosystems, planetary boundaries, the shared global commons, and outer space as part of our broader cosmic commons.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.6; border-top: 1px solid var(--border-subtle); padding-top: 0.75rem;">
                    Guided by peace, ethical stewardship, faith traditions, Indigenous wisdom, scientific knowledge, and respect for human dignity across all life.
                </p>
            </div>

            <!-- Mission -->
            <div class="feature-card" style="border-top: 3px solid #111827;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                    <span class="badge badge-gold">Our Mission</span>
                    <span style="font-size: 0.725rem; font-weight: 700; color: var(--text-muted);">Governance &bull; Polycrisis</span>
                </div>
                <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem; font-family: var(--font-display); font-weight: 800;">
                    Advancing Interconnected Systemic Governance
                </h2>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.85rem;">
                    Advancing peace-led, faith- and Indigenous-inspired, climate-friendly, and regenerative approaches to sustainability and governance in response to the interconnected challenges of the global polycrisis.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.6; border-top: 1px solid var(--border-subtle); padding-top: 0.75rem;">
                    Through high-level dialogue, entity partnerships, policy architecture, and financial innovation, PCSDF strengthens resilience across environmental, social, economic, technological, cultural, and digital systems.
                </p>
            </div>
        </div>

        <!-- Founder Quote Card -->
        <div class="quote-highlight" style="margin-top: 2rem;">
            <p style="font-size: 0.95rem; line-height: 1.7; color: var(--text-main); font-style: italic; margin-bottom: 0.5rem;">
                “Our framework is more than a model—it is a living covenant for humanity and all life: peace-led in spirit, faith- and Indigenous-inspired in wisdom, climate-friendly in action, regenerative in purpose, and intergenerational in responsibility. By integrating all systems—human, ecological, economic, digital, planetary, and beyond—it lights a path where ancient knowledge and future innovation unite for a just, thriving, and shared destiny.”
            </p>
            <div style="font-size: 0.825rem; font-weight: 800; color: var(--primary);">
                — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect of PFICF-RSSDF
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     JEAN AYOUB SPOTLIGHT SECTION — RESOLVING FONTCOLOR ISSUE
     ========================================================================== -->
<section class="section section-alt" id="ayoub">
    <div class="container">
        <div class="spotlight-card" style="margin: 0;">
            <div style="text-align: center;">
                <div class="person-photo-frame" style="width: 100px; height: 100px; margin: 0 auto 1rem auto;">
                    <img src="<?= BASE_URL ?>/assets/images/people/IMG_2132.jpeg" alt="Jean Ayoub" class="person-photo-img" onerror="this.onerror=null; this.src='<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg';">
                </div>
                <span class="badge badge-primary" style="margin-bottom: 0.35rem;">Patron &amp; Senior Advisor</span>
                <h3 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.2rem; font-family: var(--font-display); font-weight: 800;">
                    Jean Ayoub
                </h3>
                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; margin-bottom: 0.85rem;">Geneva, Switzerland</p>
                <div>
                    <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        LinkedIn Profile &rarr;
                    </a>
                </div>
            </div>

            <div>
                <span class="badge badge-gold" style="margin-bottom: 0.5rem; font-size: 0.68rem;">Foundational Diplomatic Pillar</span>
                <h2 style="font-size: 1.45rem; color: var(--text-main); margin-bottom: 0.85rem; font-family: var(--font-display); font-weight: 800;">
                    Jean Ayoub — Foundational Contribution &amp; Diplomatic Stewardship
                </h2>
                <p style="color: var(--text-body); font-size: 0.95rem; line-height: 1.75; margin-bottom: 0.85rem;">
                    Jean Ayoub’s elevation recognises his foundational contribution to PCSDF and his distinguished international diplomatic leadership. During his <strong>17 years heading International Social Service (ISS)</strong>, Jean stewarded a global network extending across 120+ countries defending child rights, cross-border social justice, and humanitarian law.
                </p>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.75; margin-bottom: 0.5rem;">
                    As Senior Advisor, Jean guides multilateral institutional governance, linking PCSDF’s constitutional framework to global diplomatic missions, multilateral bodies, and international humanitarian forums.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HEADING 1: Patrons and Senior Advisors
     ========================================================================== -->
<section class="section" id="patrons">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Multilateral Wisdom</span>
            <h2 class="section-title">Patrons and Senior Advisors</h2>
            <p class="section-subtitle">
                Eminent diplomats, former heads of international bodies, economists, and ethical leaders guiding PCSDF’s intergenerational mission.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($patrons as $p): ?>
                <div class="team-card">
                    <div class="person-photo-frame">
                        <?php if (!empty($p['image']) && file_exists(__DIR__ . '/' . $p['image'])): ?>
                            <img src="<?= BASE_URL ?>/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>" class="person-photo-img">
                        <?php else: ?>
                            <div class="team-avatar-placeholder">
                                <?= strtoupper(substr($p['name'], 0, 1)) . (strpos($p['name'], ' ') !== false ? strtoupper(substr(explode(' ', $p['name'])[1], 0, 1)) : '') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($p['is_featured'])): ?>
                        <span class="badge badge-primary" style="margin-bottom: 0.35rem; align-self: flex-start; font-size: 0.65rem;">Foundational Patron</span>
                    <?php endif; ?>
                    <h3 class="team-name"><?= htmlspecialchars($p['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($p['title_role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($p['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <?php if (!empty($p['linkedin']) && $p['linkedin'] !== '#'): ?>
                            <a href="<?= htmlspecialchars($p['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="person-linkedin-btn">
                                LinkedIn Profile &rarr;
                            </a>
                        <?php else: ?>
                            <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Distinguished Record</span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HEADING 2: Board Members
     ========================================================================== -->
<section class="section section-alt" id="board-members">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Fiduciary &amp; Constitutional Oversight</span>
            <h2 class="section-title">Board Members</h2>
            <p class="section-subtitle">
                Governing PCSDF’s constitutional architecture, institutional roadmap, and fiduciary integrity.
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
                    <div class="team-role"><?= htmlspecialchars($member['role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($member['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <a href="<?= htmlspecialchars($member['linkedin'] ?? URL_FACEBOOK) ?>" target="_blank" rel="noopener noreferrer" class="person-linkedin-btn">
                            LinkedIn Profile &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HEADING 3: Entity partners and focal pints
     ========================================================================== -->
<section class="section" id="entity-partners">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Global Coalitions</span>
            <h2 class="section-title">Entity partners and focal pints</h2>
            <p class="section-subtitle">
                Official institutional partners, think tanks, UN NGOs, feminist alliances, and research foundations collaborating with PCSDF.
            </p>
        </div>

        <div class="partners-grid">
            <?php foreach ($partners as $partner): ?>
                <div class="partner-card">
                    <div class="partner-logo-frame">
                        <?php if (!empty($partner['logo']) && file_exists(__DIR__ . '/' . $partner['logo'])): ?>
                            <img src="<?= BASE_URL ?>/<?= htmlspecialchars($partner['logo']) ?>" alt="<?= htmlspecialchars($partner['name']) ?>" class="partner-logo-img">
                        <?php else: ?>
                            <div class="partner-avatar-placeholder">
                                <?= strtoupper(substr($partner['name'], 0, 2)) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <span class="partner-category"><?= htmlspecialchars($partner['category']) ?></span>
                    <h3 class="partner-name"><?= htmlspecialchars($partner['name']) ?></h3>
                    
                    <div class="focal-point-box">
                        <div class="focal-point-label">Official Focal Point</div>
                        <div class="focal-point-name"><?= htmlspecialchars($partner['focal_point']) ?></div>
                    </div>

                    <?php if (!empty($partner['description'])): ?>
                        <p class="partner-desc"><?= htmlspecialchars($partner['description']) ?></p>
                    <?php endif; ?>

                    <div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 0.72rem; color: var(--text-muted); font-weight: 600;">Status: Active Entity</span>
                        <a href="<?= BASE_URL ?>/network.php#partner-<?= $partner['id'] ?>" style="font-size: 0.75rem; font-weight: 700; color: var(--primary);">
                            Full Dossier &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top: 2rem;">
            <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline btn-sm">
                View Full Entity Partners &amp; Focal Points Directory &rarr;
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HEADING 4: Advisors
     ========================================================================== -->
<section class="section section-alt" id="advisors">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2.25rem;">
            <span class="badge badge-primary">Technical &amp; Subject Matter Expertise</span>
            <h2 class="section-title">Advisors</h2>
            <p class="section-subtitle">
                Technical specialists, scholars, and practitioners contributing deep subject matter knowledge across the 30 framework systems.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($advisors as $adv): ?>
                <div class="team-card">
                    <div class="person-photo-frame">
                        <?php if (!empty($adv['image']) && file_exists(__DIR__ . '/' . $adv['image'])): ?>
                            <img src="<?= BASE_URL ?>/<?= htmlspecialchars($adv['image']) ?>" alt="<?= htmlspecialchars($adv['name']) ?>" class="person-photo-img">
                        <?php else: ?>
                            <div class="team-avatar-placeholder">
                                <?= strtoupper(substr($adv['name'], 0, 1)) . (strpos($adv['name'], ' ') !== false ? strtoupper(substr(explode(' ', $adv['name'])[1], 0, 1)) : '') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="team-name"><?= htmlspecialchars($adv['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($adv['title_role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($adv['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <?php if (!empty($adv['linkedin']) && $adv['linkedin'] !== '#'): ?>
                            <a href="<?= htmlspecialchars($adv['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="person-linkedin-btn">
                                LinkedIn Profile &rarr;
                            </a>
                        <?php else: ?>
                            <a href="<?= BASE_URL ?>/contact.php" class="person-linkedin-btn">
                                Inquire / Connect &rarr;
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     HISTORIC MORAL ANTECEDENTS (Clean Red & Black)
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2rem;">
            <span class="badge badge-gold">Historic Precedents</span>
            <h2 class="section-title">Moral &amp; Institutional Antecedents</h2>
        </div>

        <div class="grid-2col">
            <div class="feature-card" style="border-left: 3px solid var(--primary);">
                <h4 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800;">
                    The Creation of the United Nations (1950)
                </h4>
                <p style="font-style: italic; color: var(--text-body); font-size: 0.9rem; line-height: 1.7; margin-bottom: 0.75rem;">
                    “The United Nations was born out of an agony of war—the most terrible war in history. Those who drew up the charter really had less to do with the creation of the United Nations than the millions who fought and died in that war.”
                </p>
                <div style="font-size: 0.8rem; font-weight: 800; color: var(--primary);">
                    — Harry S. Truman, Address to UN General Assembly
                </div>
            </div>

            <div class="feature-card" style="border-left: 3px solid #111827;">
                <h4 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800;">
                    Universal Declaration of Human Rights (1948)
                </h4>
                <p style="font-style: italic; color: var(--text-body); font-size: 0.9rem; line-height: 1.7; margin-bottom: 0.75rem;">
                    “All human beings are born free and equal in dignity and rights. They are endowed with reason and conscience and should act towards one another in a spirit of brotherhood.”
                </p>
                <div style="font-size: 0.8rem; font-weight: 800; color: var(--primary);">
                    — Article 1, Universal Declaration of Human Rights
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
