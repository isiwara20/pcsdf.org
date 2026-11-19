<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

// Active page detection
$current_page = basename($_SERVER['PHP_SELF'] ?? 'index.php');
if (!isset($page_title)) {
    $page_title = SITE_NAME;
} else {
    $page_title = $page_title . ' | ' . SITE_SHORT_NAME;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars(SITE_SLOGAN) ?>">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars(SITE_SLOGAN) ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg">

    <!-- Modern Typography: Plus Jakarta Sans & Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" type="image/jpeg">
</head>
<body>

<!-- Floating Capsule Header -->
<div class="header-wrapper">
    <header class="site-header">
        <div class="header-inner">
            <!-- Brand Logo Frame -->
            <a href="<?= BASE_URL ?>/index.php" class="brand-wrapper" aria-label="PCSDF Home">
                <div class="brand-logo-frame">
                    <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Dove Logo" class="brand-logo-img">
                </div>
                <div class="brand-text-block">
                    <span class="brand-acronym">PC-SDF</span>
                    <span class="brand-subline">Peace-Led Climate-Friendly Forum</span>
                </div>
            </a>

            <!-- Desktop Nav Menu -->
            <nav class="desktop-nav" aria-label="Main Navigation">
                <a href="<?= BASE_URL ?>/index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                <a href="<?= BASE_URL ?>/about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About &amp; Patrons</a>
                <a href="<?= BASE_URL ?>/framework.php" class="nav-link <?= ($current_page == 'framework.php') ? 'active' : '' ?>">PFICF-RSSDF</a>
                <a href="<?= BASE_URL ?>/network.php" class="nav-link <?= ($current_page == 'network.php') ? 'active' : '' ?>">22 Entity Partners</a>
                <a href="<?= BASE_URL ?>/peace-tracker.php" class="nav-link <?= ($current_page == 'peace-tracker.php') ? 'active' : '' ?>">Peace Tracker</a>
                <a href="<?= BASE_URL ?>/poems.php" class="nav-link <?= ($current_page == 'poems.php') ? 'active' : '' ?>">Poems</a>
                <a href="<?= BASE_URL ?>/contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
                
                <a href="<?= BASE_URL ?>/admin/index.php" class="btn btn-outline btn-sm" title="Database Portal">
                    DB / Admin
                </a>
                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm">
                    Partner &rarr;
                </a>
            </nav>

            <!-- Mobile Hamburger Toggle -->
            <button class="mobile-menu-btn" id="mobileMenuToggle" aria-label="Toggle navigation menu">&#9776;</button>
        </div>
    </header>

    <!-- Mobile Drawer Overlay -->
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <a href="<?= BASE_URL ?>/index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
        <a href="<?= BASE_URL ?>/about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About Us &amp; Patrons</a>
        <a href="<?= BASE_URL ?>/framework.php" class="nav-link <?= ($current_page == 'framework.php') ? 'active' : '' ?>">PFICF-RSSDF Framework</a>
        <a href="<?= BASE_URL ?>/network.php" class="nav-link <?= ($current_page == 'network.php') ? 'active' : '' ?>">22 Entity Partners</a>
        <a href="<?= BASE_URL ?>/peace-tracker.php" class="nav-link <?= ($current_page == 'peace-tracker.php') ? 'active' : '' ?>">Peace &amp; Conflict Tracker</a>
        <a href="<?= BASE_URL ?>/poems.php" class="nav-link <?= ($current_page == 'poems.php') ? 'active' : '' ?>">Poems &amp; Reflections</a>
        <a href="<?= BASE_URL ?>/contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact Us</a>
        <a href="<?= BASE_URL ?>/admin/index.php" class="nav-link">Database &amp; Admin Hub</a>
        <div style="padding-top: 0.5rem;">
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary" style="width: 100%;">Start a Project / Partner</a>
        </div>
    </div>
</div>
