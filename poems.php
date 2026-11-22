<?php
$page_title = "Poems & Reflections — Inspiration for Future Generations";
require_once __DIR__ . '/includes/header.php';

$poems = getPoems();
?>

<!-- ==========================================================================
     POEMS & INSPIRATION HERO (Clean Light Canvas, Red Block Heading)
     ========================================================================== -->
<section class="section" style="padding: 2.75rem 0 1.5rem 0; background: #FFFFFF;">
    <div class="container text-center">
        <div style="margin-bottom: 1rem;">
            <span class="red-block-heading" style="font-size: 1.5rem; padding: 0.45rem 1.15rem;">
                Poems &amp; Reflections
            </span>
        </div>

        <p class="supporting-fact-text" style="font-size: 1.05rem; max-width: 800px; margin: 0 auto 1.5rem auto;">
            Honouring the voices of future generations, non-human life, and our living planet through contemplative literature, poetry, and ethical reflection.
        </p>

        <!-- Official Inscription & Dedication -->
        <div style="background: #FEF2F2; border-left: 3px solid #B91C1C; padding: 1.5rem 1.85rem; max-width: 820px; margin: 0 auto; text-align: left; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
            <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #B91C1C; margin-bottom: 0.5rem;">
                Official Inscription &amp; Dedication
            </div>
            <p style="font-size: 0.95rem; line-height: 1.75; color: #000000; font-style: italic; margin-bottom: 0.65rem;">
                “For the dreamers, the doers, and the gentle guardians of the Earth—for those who plant even when the soil is tired, who clean rivers others forget, and who believe that love can be policy. For every child who looks at the sky and wonders how blue it will be tomorrow, and every heart that still dares to keep the world green. This is for you—for choosing compassion as the true currency of development, and care as the architecture of progress.”
            </p>
            <div style="font-size: 0.825rem; font-weight: 800; color: #B91C1C;">
                — Chaitri (Chai) N. Hapugalle, Founder &amp; Architect of PFICF-RSSDF
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     POETRY SHOWCASE (Light Background, Black Typography)
     ========================================================================== -->
<section class="section" style="padding: 1.5rem 0 3.5rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB;">
    <div class="container container-compact">
        <?php foreach ($poems as $idx => $poem): ?>
            <article style="background: #FFFFFF; border: 1px solid #E5E7EB; border-top: 3px solid #B91C1C; padding: 2.25rem 2rem; margin-bottom: 2.25rem; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; border-bottom: 1px solid #F3F4F6; padding-bottom: 0.75rem;">
                    <span style="font-size: 0.72rem; font-weight: 800; color: #B91C1C; text-transform: uppercase;">
                        Poem <?= sprintf('%02d', $idx + 1) ?> &bull; <?= htmlspecialchars($poem['theme'] ?? 'Intergenerational Reflection') ?>
                    </span>
                    <span style="font-size: 0.75rem; color: #6B7280; font-weight: 700;">
                        PFICF Literary Archive
                    </span>
                </div>

                <h2 style="font-size: 1.65rem; color: #000000; font-family: var(--font-display); font-weight: 800; margin-bottom: 0.35rem; line-height: 1.25;">
                    <?= htmlspecialchars($poem['title']) ?>
                </h2>

                <div style="font-size: 0.85rem; color: #B91C1C; font-weight: 800; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 0.04em;">
                    By <?= htmlspecialchars($poem['author']) ?>
                </div>

                <?php if (!empty($poem['dedication'])): ?>
                    <div style="background: #F9FAFB; border-left: 2px solid #B91C1C; padding: 0.85rem 1.15rem; margin-bottom: 1.5rem; font-size: 0.88rem; line-height: 1.65; color: #000000; font-style: italic;">
                        <strong>Dedication:</strong> <?= htmlspecialchars($poem['dedication']) ?>
                    </div>
                <?php endif; ?>

                <div style="font-size: 0.98rem; line-height: 1.95; color: #000000; white-space: pre-line; border-left: 3px solid #111827; padding-left: 1.75rem; margin-bottom: 1.75rem; font-family: 'Plus Jakarta Sans', Georgia, serif;">
                    <?= htmlspecialchars($poem['content']) ?>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #E5E7EB; padding-top: 1rem; font-size: 0.75rem; color: #6B7280;">
                    <span>The Peace-Led Climate-Friendly Sustainable Development Forum</span>
                    <span style="font-weight: 700; color: #B91C1C;">Singapore CLG &bull; Keong Saik Road</span>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
