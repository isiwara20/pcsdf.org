<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';

$partners = getEntityPartners();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entity Partners Directory | PCSDF Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body style="background: #F8FAFC; padding-bottom: 4rem;">
    <!-- Admin Header -->
    <header style="background: #0B1323; color: #FFF; padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="Logo" style="height: 38px; border-radius: 4px; background: #FFF; padding: 2px;">
                <div>
                    <span style="font-weight: 700; color: #FFF; font-size: 1.1rem;">PCSDF Admin Portal</span>
                    <span style="display: block; font-size: 0.75rem; color: #94A3B8;">22 Entity Partners &amp; Focal Points</span>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: center;">
                <a href="<?= BASE_URL ?>/admin/index.php" class="btn btn-outline-white" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                    &larr; Admin Overview
                </a>
                <a href="<?= BASE_URL ?>/network.php" class="btn btn-primary" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                    Public Network Page &rarr;
                </a>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top: 2.5rem;">
        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <div>
                    <h2 style="font-family: var(--font-serif); font-size: 1.6rem; color: var(--secondary-dark);">
                        The 22 Institutional Entity Partners
                    </h2>
                    <p style="font-size: 0.875rem; color: #64748B;">Official institutional collaborators, focal points, and advisors across all sectors.</p>
                </div>
                <span class="badge badge-primary">22 Active Partners</span>
            </div>

            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Partner Organisation</th>
                            <th>Focal Point(s)</th>
                            <th>Domain / Category</th>
                            <th>Mission Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners as $idx => $p): ?>
                            <tr>
                                <td><strong><?= sprintf('%02d', $p['id'] ?? ($idx + 1)) ?></strong></td>
                                <td style="font-weight: 700; color: var(--secondary-dark);">
                                    <?= htmlspecialchars($p['name']) ?>
                                </td>
                                <td style="color: var(--primary); font-weight: 600;">
                                    <?= htmlspecialchars($p['focal_point']) ?>
                                </td>
                                <td>
                                    <span class="badge badge-gold" style="font-size: 0.7rem;"><?= htmlspecialchars($p['category'] ?? 'General') ?></span>
                                </td>
                                <td style="font-size: 0.85rem; color: #64748B; max-width: 380px;">
                                    <?= htmlspecialchars($p['description'] ?? '') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
