<?php
$page_title = "Poems & Reflections — Voices for Future Generations";
require_once __DIR__ . '/includes/header.php';

$poems = getPoems();
?>

<!-- Poems Hero -->
<section class="hero-section" style="padding: 2.8rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Planetary Consciousness</span>
            <span class="badge badge-gold">Voices Across All Life</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            Poems, Reflections &amp; Intergenerational Aspiration
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            Honouring the voices of future generations, non-human life, and our living planet through contemplative literature, poetry, and ethical reflection.
        </p>
    </div>
</section>

<!-- Poems Showcase -->
<section class="section">
    <div class="container container-compact">
        <?php foreach ($poems as $poem): ?>
            <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 2.25rem; box-shadow: var(--shadow-card); margin-bottom: 2rem;">
                <span class="badge badge-gold" style="margin-bottom: 0.75rem; font-size: 0.68rem;"><?= htmlspecialchars($poem['theme'] ?? 'Reflections') ?></span>
                <h2 style="font-size: 1.45rem; color: var(--text-main); margin-bottom: 0.25rem;">
                    <?= htmlspecialchars($poem['title']) ?>
                </h2>
                <div style="font-size: 0.8rem; color: var(--primary); font-weight: 600; margin-bottom: 1.5rem;">
                    By <?= htmlspecialchars($poem['author']) ?>
                </div>

                <div style="font-size: 0.95rem; line-height: 1.85; color: var(--text-body); white-space: pre-line; border-left: 3px solid var(--primary); padding-left: 1.5rem; margin-bottom: 1.5rem;">
                    <?= htmlspecialchars($poem['content']) ?>
                </div>

                <div style="font-size: 0.75rem; color: var(--text-muted); border-top: 1px solid var(--border-subtle); padding-top: 0.75rem;">
                    The Peace-Led Climate-Friendly Sustainable Development Forum &bull; Singapore
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Munir Mezyed Foundation Highlight -->
        <div style="background: #FFFFFF; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.75rem; text-align: center; box-shadow: var(--shadow-card);">
            <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.4rem;">
                Cultural &amp; Poetic Diplomacy Partner
            </h3>
            <p style="font-size: 0.825rem; color: var(--text-muted); max-width: 540px; margin: 0 auto 1rem auto; line-height: 1.55;">
                In collaboration with the <strong>Munir Mezyed Foundation</strong>, PCSDF champions poetry and creative arts as instruments for intercultural dialogue and planetary healing.
            </p>
            <a href="<?= BASE_URL ?>/network.php" class="btn btn-outline btn-sm">View Entity Partner Focal Points &rarr;</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
