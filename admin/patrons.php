<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';

$board = getBoardMembers();
$patrons = getPatrons();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Board &amp; Patrons Directory | PCSDF Admin</title>
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
                    <span style="display: block; font-size: 0.75rem; color: #94A3B8;">Leadership &amp; Patrons Directory</span>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: center;">
                <a href="<?= BASE_URL ?>/admin/index.php" class="btn btn-outline-white" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                    &larr; Admin Overview
                </a>
                <a href="<?= BASE_URL ?>/about.php" class="btn btn-primary" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                    Public Leadership Page &rarr;
                </a>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top: 2.5rem;">
        <!-- Board of Directors -->
        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <div>
                    <h2 style="font-family: var(--font-serif); font-size: 1.5rem; color: var(--secondary-dark);">
                        Board of Directors (5 Members)
                    </h2>
                    <p style="font-size: 0.875rem; color: #64748B;">Strategic and fiduciary directors of the Forum.</p>
                </div>
                <span class="badge badge-primary">Board Oversight</span>
            </div>

            <div class="table-responsive">
                <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Designation / Role</th>
                        <th>Biographical Summary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($board as $idx => $b): ?>
                        <tr>
                            <td><strong><?= sprintf('%02d', $idx + 1) ?></strong></td>
                            <td style="font-weight: 700; color: var(--secondary-dark);"><?= htmlspecialchars($b['name']) ?></td>
                            <td style="color: var(--primary); font-weight: 600;"><?= htmlspecialchars($b['role']) ?></td>
                            <td style="font-size: 0.85rem; color: #64748B; max-width: 400px;"><?= htmlspecialchars($b['bio'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>

        <!-- Distinguished Patrons -->
        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <div>
                    <h2 style="font-family: var(--font-serif); font-size: 1.5rem; color: var(--secondary-dark);">
                        Distinguished Patrons (11 Leaders)
                    </h2>
                    <p style="font-size: 0.875rem; color: #64748B;">Including Senior Advisor Jean Ayoub and international diplomatic leaders.</p>
                </div>
                <span class="badge badge-gold">11 Patrons</span>
            </div>

            <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patron Name</th>
                        <th>Title / Role</th>
                        <th>Background &amp; Contribution</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patrons as $idx => $patron): ?>
                        <tr>
                            <td><strong><?= sprintf('%02d', $idx + 1) ?></strong></td>
                            <td style="font-weight: 700; color: var(--secondary-dark);">
                                <?= htmlspecialchars($patron['name']) ?>
                                <?php if (!empty($patron['is_featured'])): ?>
                                    <span class="badge badge-primary" style="margin-left: 0.4rem; font-size: 0.65rem;">Senior Advisor</span>
                                <?php endif; ?>
                            </td>
                            <td style="color: var(--primary); font-weight: 600;"><?= htmlspecialchars($patron['title_role']) ?></td>
                            <td style="font-size: 0.85rem; color: #64748B; max-width: 400px;"><?= htmlspecialchars($patron['bio'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
