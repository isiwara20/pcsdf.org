<?php
$page_title = "Global Peace & Conflict Tracker — Geopolitical Analysis";
require_once __DIR__ . '/includes/header.php';

$accords = getPeaceAccords();
?>

<!-- Peace Tracker Hero -->
<section class="hero-section" style="padding: 2.8rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Geopolitical Intelligence</span>
            <span class="badge badge-gold">Peace Analytics</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            Global Peace &amp; Conflict Tracker
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            Monitoring violent conflict, human security, fragile states, and multilateral peace diplomacy in an interconnected world where ecological crises and armed violence amplify one another.
        </p>
    </div>
</section>

<!-- The Conflict Indices & Fragile States Analytics -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <span class="badge badge-primary">Empirical Assessment</span>
            <h2 class="section-title">The ACLED Conflict Index &amp; Global Tracking</h2>
            <p class="section-subtitle">
                Assessing conflicts according to four core indicators: deadliness, danger to civilians, geographic diffusion, and armed group fragmentation.
            </p>
        </div>

        <!-- Crisis Flashpoints Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.25rem; margin-top: 1.5rem;">
            <!-- Palestine -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #DC2626; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-primary" style="margin-bottom: 0.45rem; font-size: 0.65rem;">Extreme Geographic Diffusion</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Palestine &amp; West Asia</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    Ranked among the most dangerous places globally, with unprecedented geographic diffusion where ACLED records intense hostilities affecting nearly 70% of Gaza and parts of the West Bank.
                </p>
            </div>

            <!-- Myanmar -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #EA580C; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-gold" style="margin-bottom: 0.45rem; font-size: 0.65rem;">Extreme Fragmentation</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Myanmar</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    The most fragmented armed conflict on Earth, with over 1,200 distinct armed groups and local defense forces active across contested states.
                </p>
            </div>

            <!-- Ukraine -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #2563EB; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-primary" style="margin-bottom: 0.45rem; font-size: 0.65rem;">High Deadliness</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Ukraine &amp; Eastern Europe</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    High-intensity conventional warfare with massive civilian and military casualties, infrastructure destruction, and global food and energy market contagion.
                </p>
            </div>

            <!-- Haiti -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #7C3AED; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-gold" style="margin-bottom: 0.45rem; font-size: 0.65rem;">Severe Civilian Danger</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Haiti</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    Over 4,500 fatalities resulting from acute gang and political violence, combined with state institutional fragility and targeted civilian violence.
                </p>
            </div>

            <!-- Ecuador -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #059669; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-primary" style="margin-bottom: 0.45rem; font-size: 0.65rem;">Rapid Escalation</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Ecuador</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    A sharp surge in lethal political violence and transnational cartel insurgencies, with over 1,000 more fatalities than previous annual baselines.
                </p>
            </div>

            <!-- Pakistan & South Asia -->
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-top: 3px solid #0891B2; border-radius: var(--radius-sm); padding: 1.35rem; box-shadow: var(--shadow-subtle);">
                <span class="badge badge-gold" style="margin-bottom: 0.45rem; font-size: 0.65rem;">Regional Vulnerability</span>
                <h3 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-main);">Pakistan &amp; Regional Security</h3>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.55;">
                    Elevated civilian danger and cross-border tensions, compounded by internal economic strains and shifting geopolitical alignments.
                </p>
            </div>
        </div>

        <!-- External Tracking Resources Links -->
        <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap; margin-top: 2.5rem;">
            <a href="https://acleddata.com/series/acled-conflict-index" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">ACLED Conflict Index &rarr;</a>
            <a href="https://www.cfr.org/global-conflict-tracker" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">CFR Conflict Tracker &rarr;</a>
            <a href="https://warwatch.ch/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">War Watch &rarr;</a>
            <a href="https://fragilestatesindex.org/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">Fragile States Index (FFP) &rarr;</a>
        </div>
    </div>
</section>

<!-- Landmark Historic Peace Accords in Modern History -->
<section class="section section-alt" id="accords">
    <div class="container container-narrow">
        <div class="text-center">
            <span class="badge badge-gold">Diplomatic Milestones</span>
            <h2 class="section-title">Historic Peace Accords</h2>
            <p class="section-subtitle">
                Major diplomatic agreements that ended armed conflicts, normalized relations, and resolved geopolitical fault lines.
            </p>
        </div>

        <div>
            <?php foreach ($accords as $accord): ?>
                <div class="accord-card">
                    <div style="display: flex; justify-content: space-between; align-items: baseline;">
                        <span class="accord-year">Year: <?= htmlspecialchars($accord['year']) ?></span>
                        <?php if (!empty($accord['key_figure'])): ?>
                            <span class="accord-figure"><?= htmlspecialchars($accord['key_figure']) ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <h3 class="accord-title"><?= htmlspecialchars($accord['title']) ?></h3>
                    
                    <p class="accord-desc"><?= htmlspecialchars($accord['summary']) ?></p>

                    <?php if (!empty($accord['link']) && $accord['link'] !== '#'): ?>
                        <div style="margin-top: 0.5rem;">
                            <a href="<?= htmlspecialchars($accord['link']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.775rem; font-weight: 700;">
                                Read Archival Reference &rarr;
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Poverty & Human Security -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-card);">
                <span class="badge badge-primary" style="margin-bottom: 0.5rem;">Development Voice</span>
                <h3 style="font-size: 1.25rem; color: var(--text-main); margin-bottom: 0.35rem;">
                    Spotlight: Dr. Indermit Gill
                </h3>
                <div style="font-size: 0.775rem; color: var(--primary); font-weight: 600; margin-bottom: 0.75rem;">
                    Chief Economist &amp; Senior Vice President, World Bank Group
                </div>
                <p style="font-size: 0.825rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0.85rem;">
                    Leading international economic research on debt distress across developing nations and systemic structural transformations needed to achieve genuine poverty reduction alongside climate resilience.
                </p>
                <a href="https://www.worldbank.org/ext/en/who-we-are/leadership/indermit-gill" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    World Bank Profile &rarr;
                </a>
            </div>

            <!-- Poverty Quote -->
            <div style="background: #FFF9F8; border-left: 3px solid var(--primary); border-radius: 0 var(--radius-md) var(--radius-md) 0; padding: 1.85rem;">
                <h4 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.75rem;">
                    Multidimensional Poverty &amp; Human Security
                </h4>
                <div class="quote-highlight" style="background: transparent; border: none; padding: 0; margin: 0 0 0.75rem 0; font-size: 0.95rem; color: var(--text-main);">
                    “Extreme poverty anywhere is a threat to human security everywhere.”
                </div>
                <div style="font-size: 0.8rem; font-weight: 700; color: var(--primary);">
                    — Kofi Annan, Seventh Secretary-General of the United Nations
                </div>
                <p style="font-size: 0.775rem; color: var(--text-muted); margin-top: 0.75rem; line-height: 1.55;">
                    The PFICF-RSSDF recognises that true peace cannot take root while structural deprivation deprives billions of basic dignity.
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
