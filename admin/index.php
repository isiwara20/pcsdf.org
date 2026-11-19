<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';

$is_db_connected = Database::isConnected();
$db_error = Database::getError();

$inquiries = getInquiries();
$board = getBoardMembers();
$patrons = getPatrons();
$partners = getEntityPartners();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin &amp; Database Management | PCSDF</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body style="background: #F8FAFC;">

<!-- Admin Header -->
<header style="background: #0B1323; color: #FFF; padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center; gap: 0.85rem;">
            <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="Logo" style="height: 38px; border-radius: 4px; background: #FFF; padding: 2px;">
            <div>
                <span style="font-weight: 700; color: #FFF; font-size: 1.1rem;">PCSDF Admin Portal</span>
                <span style="display: block; font-size: 0.75rem; color: #94A3B8;">Secretariat &amp; Database Hub</span>
            </div>
        </div>

        <div style="display: flex; gap: 1rem; align-items: center;">
            <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-white" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                &larr; View Live Website
            </a>
            <a href="http://localhost/phpmyadmin/" target="_blank" class="btn btn-primary" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                Open phpMyAdmin &rarr;
            </a>
        </div>
    </div>
</header>

<div class="container" style="padding-top: 2.5rem; padding-bottom: 4rem;">

    <!-- Database Connection Status Banner -->
    <div style="margin-bottom: 2rem;">
        <?php if ($is_db_connected): ?>
            <div class="alert alert-success" style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong>&#9989; MySQL Database Connected:</strong> Connected to <code><?= htmlspecialchars(DB_NAME) ?></code> on <code><?= htmlspecialchars(DB_HOST) ?></code> via PDO. All tables and records are active.
                </div>
                <a href="<?= BASE_URL ?>/admin/setup.php" class="btn btn-outline" style="padding: 0.35rem 0.75rem; font-size: 0.75rem; background: #FFF;">
                    Re-seed Database
                </a>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div>
                    <strong>&#9888; MySQL Database Notice:</strong> MySQL server is currently not responding or database <code><?= htmlspecialchars(DB_NAME) ?></code> is not yet created. The website is currently operating on <strong>High-Reliability Offline Fallback Mode</strong> so all public content continues to display perfectly!
                </div>
                <a href="<?= BASE_URL ?>/admin/setup.php" class="btn btn-primary" style="padding: 0.4rem 1rem; font-size: 0.8rem;">
                    1-Click DB Installer &rarr;
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Quick Stats Metric Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-bottom: 2.5rem;">
        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; box-shadow: var(--shadow-sm);">
            <div style="font-size: 0.8rem; font-weight: 700; color: #64748B; text-transform: uppercase;">Inquiries / Leads</div>
            <div style="font-size: 2.2rem; font-weight: 800; color: var(--primary); margin: 0.35rem 0;"><?= count($inquiries) ?></div>
            <div style="font-size: 0.8rem; color: #94A3B8;">Contact form submissions</div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; box-shadow: var(--shadow-sm);">
            <div style="font-size: 0.8rem; font-weight: 700; color: #64748B; text-transform: uppercase;">Entity Partners</div>
            <div style="font-size: 2.2rem; font-weight: 800; color: #2563EB; margin: 0.35rem 0;"><?= count($partners) ?></div>
            <div style="font-size: 0.8rem; color: #94A3B8;">Global focal points</div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; box-shadow: var(--shadow-sm);">
            <div style="font-size: 0.8rem; font-weight: 700; color: #64748B; text-transform: uppercase;">Distinguished Patrons</div>
            <div style="font-size: 2.2rem; font-weight: 800; color: #D97706; margin: 0.35rem 0;"><?= count($patrons) ?></div>
            <div style="font-size: 0.8rem; color: #94A3B8;">Including Jean Ayoub</div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; box-shadow: var(--shadow-sm);">
            <div style="font-size: 0.8rem; font-weight: 700; color: #64748B; text-transform: uppercase;">Board of Directors</div>
            <div style="font-size: 2.2rem; font-weight: 800; color: #059669; margin: 0.35rem 0;"><?= count($board) ?></div>
            <div style="font-size: 0.8rem; color: #94A3B8;">Founders &amp; strategic leaders</div>
        </div>
    </div>

    <!-- Quick Links & Actions -->
    <div style="display: flex; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
        <a href="<?= BASE_URL ?>/admin/setup.php" class="btn btn-outline" style="font-size: 0.85rem;">
            &#9881; Database Setup / Import Guide
        </a>
        <a href="<?= BASE_URL ?>/admin/partners.php" class="btn btn-outline" style="font-size: 0.85rem;">
            &#128101; View &amp; Manage 22 Entity Partners
        </a>
        <a href="<?= BASE_URL ?>/admin/patrons.php" class="btn btn-outline" style="font-size: 0.85rem;">
            &#127894; View Patrons &amp; Board
        </a>
    </div>

    <!-- Inquiries List -->
    <div style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <div>
                <h3 style="font-family: var(--font-serif); font-size: 1.4rem; color: var(--secondary-dark);">
                    Recent Inquiries &amp; Project Proposals
                </h3>
                <p style="font-size: 0.85rem; color: #64748B;">Messages submitted via the contact and partnership form.</p>
            </div>
            <span class="badge badge-primary"><?= count($inquiries) ?> Total Submissions</span>
        </div>

        <?php if (empty($inquiries)): ?>
            <div style="text-align: center; padding: 3rem 1rem; color: #94A3B8;">
                <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">&#128236;</div>
                <p>No inquiries received yet. Submissions from the <a href="<?= BASE_URL ?>/contact.php">Contact Form</a> will appear here automatically.</p>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Sender</th>
                            <th>Organization</th>
                            <th>Category</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inquiries as $inq): ?>
                            <tr>
                                <td>#<?= htmlspecialchars($inq['id'] ?? '1') ?></td>
                                <td style="white-space: nowrap; font-size: 0.8rem; color: #64748B;">
                                    <?= htmlspecialchars($inq['created_at'] ?? date('Y-m-d')) ?>
                                </td>
                                <td>
                                    <strong><?= htmlspecialchars($inq['full_name'] ?? '') ?></strong><br>
                                    <a href="mailto:<?= htmlspecialchars($inq['email'] ?? '') ?>" style="font-size: 0.8rem;"><?= htmlspecialchars($inq['email'] ?? '') ?></a>
                                </td>
                                <td><?= htmlspecialchars($inq['organization'] ?? '—') ?></td>
                                <td>
                                    <span class="badge badge-gold" style="font-size: 0.7rem;"><?= htmlspecialchars($inq['category'] ?? 'General') ?></span>
                                </td>
                                <td><strong><?= htmlspecialchars($inq['subject'] ?? '') ?></strong></td>
                                <td style="max-width: 320px; font-size: 0.825rem; color: #475569;">
                                    <?= nl2br(htmlspecialchars($inq['message'] ?? '')) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
