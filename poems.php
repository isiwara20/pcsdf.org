<?php
$page_title = "Poems & Reflections — Inspiration for Future Generations";
require_once __DIR__ . '/includes/header.php';

$poems = getPoems();
?>

<!-- ==========================================================================
     POEMS & INSPIRATION HERO (Red & Black Literary Elegance)
     ========================================================================== -->
<section class="hero-section" style="padding: 3.5rem 0;">
    <div class="container text-center">
        <div class="hero-badge-wrap" style="justify-content: center;">
            <span class="badge badge-primary">Planetary Consciousness</span>
            <span class="badge badge-gold">Voices Across All Life</span>
            <span class="badge badge-primary">Literary Diplomacy</span>
        </div>
        
        <h1 class="display-title hero-title" style="max-width: 900px; margin: 0 auto 1rem auto;">
            Poems, Reflections &amp; <span class="gradient-fire">Intergenerational Inspiration</span>
        </h1>
        
        <p class="hero-lead container-narrow" style="margin: 0 auto 1.5rem auto;">
            Honouring the voices of future generations, non-human life, and our living planet through contemplative literature, poetry, and ethical reflection.
        </p>

        <!-- Signature Inscription -->
        <div class="quote-highlight" style="max-width: 820px; margin: 1.5rem auto 0 auto; text-align: left; background: var(--bg-card); border-left: 3px solid var(--primary); padding: 1.5rem 1.85rem;">
            <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--primary); margin-bottom: 0.5rem;">
                Official Inscription &amp; Dedication
            </div>
            <p style="font-size: 0.95rem; line-height: 1.75; color: var(--text-main); font-style: italic; margin-bottom: 0.65rem;">
                “For the dreamers, the doers, and the gentle guardians of the Earth—for those who plant even when the soil is tired, who clean rivers others forget, and who believe that love can be policy. For every child who looks at the sky and wonders how blue it will be tomorrow, and every heart that still dares to keep the world green. This is for you—for choosing compassion as the true currency of development, and care as the architecture of progress.”
            </p>
            <div style="font-size: 0.8rem; font-weight: 800; color: var(--primary);">
                — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect of PFICF-RSSDF
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     POETRY SHOWCASE (Inspiring Red & Black Editorial Layout)
     ========================================================================== -->
<section class="section" style="padding-top: 1rem;">
    <div class="container container-compact">
        <?php foreach ($poems as $idx => $poem): ?>
            <article class="poem-card" style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-top: 3px solid var(--primary); padding: 2.5rem 2rem; margin-bottom: 2.5rem; box-shadow: var(--shadow-card);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; border-bottom: 1px solid var(--border-subtle); padding-bottom: 0.75rem;">
                    <span class="badge badge-primary" style="font-size: 0.7rem;">
                        Poem <?= sprintf('%02d', $idx + 1) ?> &bull; <?= htmlspecialchars($poem['theme'] ?? 'Intergenerational Reflection') ?>
                    </span>
                    <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 700;">
                        PFICF Literary Archive
                    </span>
                </div>

                <h2 style="font-size: 1.65rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800; margin-bottom: 0.35rem; line-height: 1.25;">
                    <?= htmlspecialchars($poem['title']) ?>
                </h2>

                <div style="font-size: 0.85rem; color: var(--primary); font-weight: 800; margin-bottom: 1.75rem; text-transform: uppercase; letter-spacing: 0.04em;">
                    By <?= htmlspecialchars($poem['author']) ?>
                </div>

                <?php if (!empty($poem['dedication'])): ?>
                    <div style="background: rgba(185, 28, 28, 0.04); border-left: 2px solid var(--primary); padding: 0.85rem 1.15rem; margin-bottom: 1.75rem; font-size: 0.85rem; line-height: 1.65; color: var(--text-body); font-style: italic;">
                        <strong>Dedication:</strong> <?= htmlspecialchars($poem['dedication']) ?>
                    </div>
                <?php endif; ?>

                <div class="poem-body" style="font-size: 0.98rem; line-height: 1.95; color: var(--text-body); white-space: pre-line; border-left: 3px solid #111827; padding-left: 1.75rem; margin-bottom: 1.75rem; font-family: 'Plus Jakarta Sans', Georgia, serif;">
                    <?= htmlspecialchars($poem['content']) ?>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-subtle); padding-top: 1rem; font-size: 0.75rem; color: var(--text-muted);">
                    <span>The Peace-Led Climate-Friendly Sustainable Development Forum</span>
                    <span style="font-weight: 700; color: var(--primary);">Singapore CLG &bull; Keong Saik Road</span>
                </div>
            </article>
        <?php endforeach; ?>

        <!-- Cultural & Poetic Diplomacy Partner Spotlight -->
        <div class="feature-card" style="text-align: center; border: 1px solid var(--border-subtle); border-top: 3px solid #111827; padding: 2.25rem 1.75rem; margin-top: 2rem;">
            <div class="partner-logo-frame" style="width: 120px; height: 75px; margin: 0 auto 1rem auto;">
                <img src="<?= BASE_URL ?>/assets/images/partners/IMG_0628.jpeg" alt="Munir Mezyed Foundation Logo" class="partner-logo-img">
            </div>
            
            <span class="badge badge-primary" style="margin-bottom: 0.5rem;">Cultural &amp; Literary Diplomacy Partner</span>
            <h3 style="font-size: 1.25rem; color: var(--text-main); font-family: var(--font-display); font-weight: 800; margin-bottom: 0.5rem;">
                Munir Mezyed Foundation for Arts &amp; Culture
            </h3>
            <p style="font-size: 0.9rem; color: var(--text-body); max-width: 620px; margin: 0 auto 1.25rem auto; line-height: 1.7;">
                In formal collaboration with the <strong>Munir Mezyed Foundation for Arts &amp; Culture</strong> (Romania / Transnational), PCSDF champions poetic expression, artistic dialogue, and intercultural storytelling as indispensable constitutional instruments for world peace and ecological stewardship.
            </p>
            <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap;">
                <a href="<?= BASE_URL ?>/network.php#partner-10" class="btn btn-outline btn-sm">
                    View Foundation Profile &rarr;
                </a>
                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm">
                    Submit a Poem / Creative Work &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
