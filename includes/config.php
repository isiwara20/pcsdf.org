<?php
/**
 * Configuration file for PCSDF
 * The Peace-Led Climate-Friendly Sustainable Development Forum
 */

// Basic Settings
define('SITE_NAME', 'The Peace-Led Climate-Friendly Sustainable Development Forum');
define('SITE_SHORT_NAME', 'PCSDF');
define('SITE_SLOGAN', 'Inspiring Peace-Led, Faith- and Indigenous-Inspired, Climate-Friendly Regeneration Across All Systems, All Life and All Generations');
define('SITE_YEAR_THEME', 'Year of the Horse — Governing Sustainability in an Era of Polycrisis');

// Organization Contact Details
define('CONTACT_EMAIL', 'chaihapugalle@gmail.com');
define('CONTACT_PHONE', '+65 8070 1667');
define('CONTACT_WHATSAPP_NOTE', 'WhatsApp messages and calls only');
define('CONTACT_ADDRESS', '60 Paya Lebar Road #06-28 Paya Lebar Square, Singapore 409051');
define('FOUNDER_NAME', 'Chaitri (Chai) N. Hapugalle');

// Database Configuration (Default XAMPP credentials)
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pcsdf_db');

// Social links
define('URL_FACEBOOK', 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr');
define('URL_LINKEDIN', 'https://ch.linkedin.com/in/jeanayoub');
define('URL_TWITTER', '#');
define('URL_INSTAGRAM', '#');

// Determine base URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';
$script_dir = str_replace('\\', '/', dirname($script_name));
if ($script_dir === '.' || $script_dir === '/' || empty($script_dir)) {
    $script_dir = '';
} else {
    $script_dir = '/' . ltrim($script_dir, '/');
}
$base_url = rtrim($protocol . $host . $script_dir, '/');
// If inside subfolder like /admin, strip it for root site assets
$root_url = preg_replace('/\/admin$/', '', $base_url);
define('BASE_URL', $root_url);
