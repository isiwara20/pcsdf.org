<?php
/**
 * 1-Click Database Setup & Seeder for PCSDF
 */
require_once __DIR__ . '/../includes/config.php';

$message = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'install') {
    try {
        $server_dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";charset=utf8mb4";
        $pdo = new PDO($server_dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_TIMEOUT => 5
        ]);

        $sql_file = __DIR__ . '/../sql/pcsdf_db.sql';
        if (file_exists($sql_file)) {
            $sql = file_get_contents($sql_file);
            $pdo->exec($sql);
            $message = "Database 'pcsdf_db' and all tables, board members, patrons, 22 entity partners, peace accords, and sample data were created and seeded successfully!";
        } else {
            $error = "SQL file 'sql/pcsdf_db.sql' was not found.";
        }
    } catch (PDOException $e) {
        $error = "MySQL connection error: " . $e->getMessage() . ". Please ensure MySQL is running in your XAMPP Control Panel.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Setup &amp; phpMyAdmin Installer | PCSDF</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body style="background: #F8FAFC; padding: 3rem 1rem;">
    <div class="container container-narrow">
        <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Logo" style="height: 50px;">
                <div>
                    <h2 style="font-family: var(--font-serif); color: var(--secondary-dark);">PCSDF Database Installer</h2>
                    <p style="font-size: 0.85rem; color: #64748B;">Automated MySQL / phpMyAdmin DB Provisioning</p>
                </div>
            </div>

            <?php if ($message): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?= htmlspecialchars($message) ?>
                </div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <strong>Notice:</strong> <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <div style="background: #F1F5F9; border-radius: var(--radius-md); padding: 1.5rem; margin-bottom: 2rem;">
                <h4 style="margin-bottom: 0.5rem; color: var(--secondary-dark);">Current Settings in <code>includes/config.php</code>:</h4>
                <ul style="font-size: 0.875rem; color: #475569; padding-left: 1.25rem;">
                    <li><strong>DB Host:</strong> <?= htmlspecialchars(DB_HOST) ?></li>
                    <li><strong>DB Port:</strong> <?= htmlspecialchars(DB_PORT) ?></li>
                    <li><strong>DB Name:</strong> <?= htmlspecialchars(DB_NAME) ?></li>
                    <li><strong>DB User:</strong> <?= htmlspecialchars(DB_USER) ?></li>
                    <li><strong>DB Password:</strong> (Empty by default in XAMPP)</li>
                </ul>
            </div>

            <form method="POST" action="setup.php" style="margin-bottom: 2rem;">
                <input type="hidden" name="action" value="install">
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.85rem; font-size: 1rem;">
                    &#9881; Click Here to Automatically Install &amp; Seed Database
                </button>
            </form>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h4 style="font-size: 1rem; margin-bottom: 0.5rem;">Manual phpMyAdmin Setup Guide:</h4>
                <ol style="font-size: 0.875rem; color: #64748B; padding-left: 1.25rem; line-height: 1.7;">
                    <li>Open your browser to <a href="http://localhost/phpmyadmin/" target="_blank" style="font-weight: 700; color: var(--primary);">http://localhost/phpmyadmin/</a></li>
                    <li>Click on the <strong>Import</strong> tab in top menu.</li>
                    <li>Choose the file located at: <code><?= htmlspecialchars(realpath(__DIR__ . '/../sql/pcsdf_db.sql')) ?></code></li>
                    <li>Click <strong>Go</strong> to execute the full schema and seed data.</li>
                </ol>
            </div>

            <div style="margin-top: 2rem; display: flex; justify-content: space-between;">
                <a href="<?= BASE_URL ?>/admin/index.php" class="btn btn-outline">&larr; Back to Admin Dashboard</a>
                <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline">Visit Website &rarr;</a>
            </div>
        </div>
    </div>
</body>
</html>
