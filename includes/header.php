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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars(SITE_SLOGAN) ?>">

    <!-- Clean Light Theme Initializer (Default: Light Canvas) -->
    <script>
        (function() {
            try {
                const savedTheme = localStorage.getItem('pcsdf-theme');
                const theme = savedTheme ? savedTheme : 'light';
                document.documentElement.setAttribute('data-theme', theme);
            } catch(e) {}
        })();
    </script>

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
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" type="image/jpeg">
</head>
<body>

<!-- Top Scroll Progress Indicator -->
<div class="scroll-progress-bar" id="scrollProgressBar" aria-hidden="true"></div>

<!-- Top Institutional Utility Bar -->
<div class="top-status-bar">
    <div class="container top-status-inner">
        <div class="status-left">
            <span class="status-reg-badge">Singapore CLG</span>
            <span class="status-incorporated">Incorporated 24 Dec 2021 &bull; Keong Saik Road, Chinatown, Singapore</span>
        </div>
        <div class="status-right">
            <span class="year-horse-pill">&bull;&nbsp;Year of the Horse &mdash; Inspiring Regeneration</span>
            <a href="https://pcsdf.org" target="_blank" rel="noopener noreferrer" class="status-ext-link">Official Portal: pcsdf.org &nearr;</a>
        </div>
    </div>
</div>

<!-- Main Institutional Header (Red & Black Diplomatic Authority) -->
<div class="header-wrapper">
    <header class="site-header">
        <div class="container header-inner">
            <!-- Brand Logo Frame (Sharp Rectangular - No curve!) -->
            <a href="<?= BASE_URL ?>/index.php" class="brand-wrapper" aria-label="PCSDF Home">
                <div class="brand-logo-frame">
                    <img src="<?= BASE_URL ?>/assets/images/pcsdf-logo.jpg" alt="PCSDF Dove Logo" class="brand-logo-img">
                </div>
                <div class="brand-text-block">
                    <span class="brand-acronym">PC-SDF</span>
                    <span class="brand-subline">Peace-Led Climate-Friendly Forum</span>
                </div>
            </a>

            <!-- Desktop Nav Menu (Strictly following pcsdf.org menu logic) -->
            <nav class="desktop-nav" aria-label="Main Navigation">
                <a href="<?= BASE_URL ?>/index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                <a href="<?= BASE_URL ?>/about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About Us</a>
                <a href="<?= BASE_URL ?>/contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Call For Action / Journey</a>
                <a href="<?= BASE_URL ?>/poems.php" class="nav-link <?= ($current_page == 'poems.php') ? 'active' : '' ?>">Poems</a>
                <a href="<?= BASE_URL ?>/disclaimer.php" class="nav-link <?= ($current_page == 'disclaimer.php') ? 'active' : '' ?>">Disclaimer</a>
                <a href="<?= BASE_URL ?>/privacy-policy.php" class="nav-link <?= ($current_page == 'privacy-policy.php') ? 'active' : '' ?>">Privacy Policy</a>

                <!-- Theme Toggle Button -->
                <div class="theme-segmented-switch" role="group" aria-label="Theme Mode Selection">
                    <button type="button" class="theme-segment-btn" data-theme-val="light" title="Switch to Light Theme">&#9728; Light</button>
                    <button type="button" class="theme-segment-btn" data-theme-val="dark" title="Switch to Dark Theme">&#9790; Dark</button>
                </div>

                <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary btn-sm">
                    Inquire / Connect &rarr;
                </a>
            </nav>

            <!-- Mobile Controls -->
            <div class="mobile-controls">
                <div class="theme-segmented-switch" style="padding: 2px;">
                    <button type="button" class="theme-segment-btn" data-theme-val="light" style="padding: 0.25rem 0.5rem;" title="Light">
                        <span>&#9728;</span>
                    </button>
                    <button type="button" class="theme-segment-btn" data-theme-val="dark" style="padding: 0.25rem 0.5rem;" title="Dark">
                        <span>&#9790;</span>
                    </button>
                </div>
                <button class="mobile-menu-btn" id="mobileMenuToggle" aria-label="Toggle navigation menu">&#9776;</button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Overlay -->
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <a href="<?= BASE_URL ?>/index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
        <a href="<?= BASE_URL ?>/about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About Us</a>
        <a href="<?= BASE_URL ?>/contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Call For Action / Journey</a>
        <a href="<?= BASE_URL ?>/poems.php" class="nav-link <?= ($current_page == 'poems.php') ? 'active' : '' ?>">Poems</a>
        <a href="<?= BASE_URL ?>/disclaimer.php" class="nav-link <?= ($current_page == 'disclaimer.php') ? 'active' : '' ?>">Disclaimer</a>
        <a href="<?= BASE_URL ?>/privacy-policy.php" class="nav-link <?= ($current_page == 'privacy-policy.php') ? 'active' : '' ?>">Privacy Policy</a>
        
        <div class="mobile-theme-row">
            <span style="font-size: 0.8rem; font-weight: 600; color: var(--text-muted);">Theme Mode:</span>
            <div class="theme-segmented-switch">
                <button type="button" class="theme-segment-btn" data-theme-val="light">
                    <span>&#9728; Light</span>
                </button>
                <button type="button" class="theme-segment-btn" data-theme-val="dark">
                    <span>&#9790; Dark</span>
                </button>
            </div>
        </div>

        <div style="padding-top: 0.75rem;">
            <a href="<?= BASE_URL ?>/contact.php" class="btn btn-primary" style="width: 100%;">Inquire / Start a Project</a>
        </div>
    </div>
</div>
