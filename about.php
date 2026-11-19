<?php
$page_title = "About Us — Leadership, Patrons & Vision";
require_once __DIR__ . '/includes/header.php';

$board = getBoardMembers();
$patrons = getPatrons();
?>

<!-- About Hero -->
<section class="hero-section" style="padding: 2.8rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Institutional Profile</span>
            <span class="badge badge-gold">Governance &amp; Oversight</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            About PCSDF, Leadership &amp; Distinguished Patrons
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            A global network-of-networks pioneering constitutional governance architectures for sustainability, human rights, and systemic resilience in an era of polycrisis.
        </p>
    </div>
</section>

<!-- Vision & Mission Grid -->
<section class="section">
    <div class="container">
        <div class="grid-2col">
            <!-- Vision -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-top: 3px solid var(--primary); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-card);">
                <span class="badge badge-primary" style="margin-bottom: 0.85rem;">Our Vision</span>
                <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem;">
                    Regenerative Flourishing Across All Systems &amp; Commons
                </h2>
                <p style="color: var(--text-body); font-size: 0.9rem; line-height: 1.68; margin-bottom: 0.75rem;">
                    Peace-led stewardship that fosters the flourishing and regeneration of interconnected systems—human and non-human—across societies, ecosystems, planetary boundaries, the shared global commons, and outer space as part of our broader cosmic commons.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.6;">
                    Guided by peace, ethical stewardship, faith traditions, Indigenous wisdom, scientific knowledge, and respect for human dignity.
                </p>
            </div>

            <!-- Mission -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-top: 3px solid var(--blue); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-card);">
                <span class="badge badge-gold" style="margin-bottom: 0.85rem;">Our Mission</span>
                <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem;">
                    Advancing Interconnected Systemic Governance
                </h2>
                <p style="color: var(--text-body); font-size: 0.9rem; line-height: 1.68; margin-bottom: 0.75rem;">
                    Advancing peace-led, faith- and Indigenous-inspired, climate-friendly, and regenerative approaches to sustainability and governance in response to the interconnected challenges of the global polycrisis.
                </p>
                <p style="color: var(--text-muted); font-size: 0.85rem; line-height: 1.6;">
                    Through dialogue, partnerships, policy innovation, and financial innovation, PCSDF strengthens resilience across environmental, social, economic, technological, cultural, and digital systems.
                </p>
            </div>
        </div>

        <!-- Founder Quote Card -->
        <div class="quote-highlight" style="margin-top: 2rem; padding: 1.25rem 1.5rem; font-size: 0.9rem; line-height: 1.65;">
            “Our framework is more than a model—it is a living covenant for humanity and all life: peace-led in spirit, faith- and Indigenous-inspired in wisdom, climate-friendly in action, regenerative in purpose, and intergenerational in responsibility. By integrating all systems—human, ecological, economic, digital, planetary, and beyond—it lights a path where ancient knowledge and future innovation unite for a just, thriving, and shared destiny.”
            <div style="font-size: 0.8rem; font-weight: 700; color: var(--primary); margin-top: 0.5rem; font-style: normal;">
                — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect of PFICF-RSSDF
            </div>
        </div>
    </div>
</section>

<!-- Jean Ayoub Spotlight Section -->
<section class="section section-alt" id="ayoub">
    <div class="container">
        <div class="spotlight-card" style="margin: 0;">
            <div style="text-align: center;">
                <div class="team-avatar-placeholder" style="width: 80px; height: 80px; margin: 0 auto 1rem auto; font-size: 1.85rem;">
                    JA
                </div>
                <span class="badge badge-primary" style="margin-bottom: 0.35rem;">Patron &amp; Senior Advisor</span>
                <h3 style="font-size: 1.3rem; color: var(--text-main); margin-bottom: 0.2rem;">Jean Ayoub</h3>
                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 600;">Geneva, Switzerland</p>
                <div style="margin-top: 0.85rem;">
                    <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        LinkedIn Profile &rarr;
                    </a>
                </div>
            </div>

            <div>
                <span class="badge badge-gold" style="margin-bottom: 0.5rem; font-size: 0.68rem;">Foundational Pillar</span>
                <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem;">
                    Jean Ayoub — Professional Profile &amp; Foundational Role
                </h2>
                <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.68; margin-bottom: 0.75rem;">
                    Jean’s elevation recognises his foundational contribution to PCSDF and his distinguished international experience, including his <strong>17 years as Secretary-General and CEO of International Social Service (ISS)</strong>, whose global network extended across more than 120 countries.
                </p>
                <p style="color: var(--text-body); font-size: 0.88rem; line-height: 1.65;">
                    As Patron and Senior Advisor to PCSDF, Jean brings institutional wisdom to our governance mechanisms, facilitating strategic relationships with international multilateral bodies, diplomatic missions, and humanitarian networks worldwide.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Board of Directors -->
<section class="section" id="board">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Fiduciary &amp; Strategic Oversight</span>
            <h2 class="section-title">Board of Directors</h2>
            <p class="section-subtitle">
                Guiding PCSDF’s constitutional roadmap, institutional integrity, and strategic execution.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($board as $director): ?>
                <div class="team-card">
                    <div class="team-avatar-placeholder">
                        <?= strtoupper(substr($director['name'], 0, 1)) . (strpos($director['name'], ' ') !== false ? strtoupper(substr(explode(' ', $director['name'])[1], 0, 1)) : '') ?>
                    </div>
                    <h3 class="team-name"><?= htmlspecialchars($director['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($director['role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($director['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <a href="<?= htmlspecialchars($director['linkedin'] ?? URL_FACEBOOK) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.775rem; font-weight: 600;">
                            Connect on Social &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Distinguished Patrons (11 Leaders) -->
<section class="section section-alt" id="patrons">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Advisory Council</span>
            <h2 class="section-title">Distinguished Patrons</h2>
            <p class="section-subtitle">
                Diplomats, economists, scientists, and moral authorities stewarding PCSDF’s intergenerational covenant.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($patrons as $patron): ?>
                <div class="team-card">
                    <div class="team-avatar-placeholder" style="<?= !empty($patron['is_featured']) ? 'border-color: var(--primary);' : '' ?>">
                        <?= strtoupper(substr($patron['name'], 0, 1)) . (strpos($patron['name'], ' ') !== false ? strtoupper(substr(explode(' ', $patron['name'])[1], 0, 1)) : '') ?>
                    </div>
                    <?php if (!empty($patron['is_featured'])): ?>
                        <span class="badge badge-primary" style="margin-bottom: 0.35rem; align-self: flex-start; font-size: 0.65rem;">Senior Advisor</span>
                    <?php endif; ?>
                    <h3 class="team-name"><?= htmlspecialchars($patron['name']) ?></h3>
                    <div class="team-role"><?= htmlspecialchars($patron['title_role']) ?></div>
                    <p class="team-bio"><?= htmlspecialchars($patron['bio'] ?? '') ?></p>
                    <div class="team-card-footer">
                        <?php if (!empty($patron['linkedin']) && $patron['linkedin'] !== '#'): ?>
                            <a href="<?= htmlspecialchars($patron['linkedin']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.775rem; font-weight: 600;">
                                LinkedIn Profile &rarr;
                            </a>
                        <?php else: ?>
                            <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.775rem; font-weight: 600; color: var(--text-muted);">
                                Institutional Record &rarr;
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Historic Precedents -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-gold">Historic Antecedents</span>
            <h2 class="section-title">Moral &amp; Institutional Precedents</h2>
        </div>

        <div class="grid-2col" style="margin-top: 1.5rem;">
            <div style="background: var(--bg-card); border-left: 3px solid var(--blue); padding: 1.5rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; box-shadow: var(--shadow-subtle); border-top: 1px solid var(--border-subtle); border-right: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
                <h4 style="font-size: 1.05rem; margin-bottom: 0.5rem; color: var(--text-main);">
                    The Creation of the United Nations
                </h4>
                <p style="font-style: italic; color: var(--text-body); font-size: 0.88rem; line-height: 1.65; margin-bottom: 0.65rem;">
                    “The United Nations was born out of an agony of war—the most terrible war in history. Those who drew up the charter really had less to do with the creation of the United Nations than the millions who fought and died in that war.”
                </p>
                <div style="font-size: 0.775rem; font-weight: 700; color: var(--primary);">
                    — Harry S. Truman, Address to UN General Assembly (1950)
                </div>
            </div>

            <div style="background: var(--bg-card); border-left: 3px solid var(--primary); padding: 1.5rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; box-shadow: var(--shadow-subtle); border-top: 1px solid var(--border-subtle); border-right: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
                <h4 style="font-size: 1.05rem; margin-bottom: 0.5rem; color: var(--text-main);">
                    Universal Declaration of Human Rights
                </h4>
                <p style="font-style: italic; color: var(--text-body); font-size: 0.88rem; line-height: 1.65; margin-bottom: 0.65rem;">
                    “All human beings are born free and equal in dignity and rights. They are endowed with reason and conscience and should act towards one another in a spirit of brotherhood.”
                </p>
                <div style="font-size: 0.775rem; font-weight: 700; color: var(--primary);">
                    — Article 1, Universal Declaration of Human Rights (1948)
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
