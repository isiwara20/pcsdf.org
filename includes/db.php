<?php
/**
 * Database Connection & Data Access Layer
 * Supports MySQL / MariaDB via PDO with automated setup and offline-resilient fallback
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

class Database {
    private static ?PDO $pdo = null;
    private static bool $is_connected = false;
    private static ?string $connection_error = null;

    public static function connect(): ?PDO {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            // First attempt to connect directly to the database
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_TIMEOUT => 3
            ];
            self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
            self::$is_connected = true;
            return self::$pdo;
        } catch (PDOException $e) {
            // If database does not exist, try connecting to MySQL server to create it
            if ($e->getCode() == 1049) {
                try {
                    $server_dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";charset=utf8mb4";
                    $server_pdo = new PDO($server_dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                    $sql_file = __DIR__ . '/../sql/pcsdf_db.sql';
                    if (file_exists($sql_file)) {
                        $sql = file_get_contents($sql_file);
                        $server_pdo->exec($sql);
                        
                        // Reconnect to newly created database
                        self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
                        self::$is_connected = true;
                        return self::$pdo;
                    }
                } catch (Exception $setup_e) {
                    self::$connection_error = $setup_e->getMessage();
                }
            } else {
                self::$connection_error = $e->getMessage();
            }
            self::$is_connected = false;
            return null;
        }
    }

    public static function isConnected(): bool {
        if (self::$pdo === null && !self::$connection_error) {
            self::connect();
        }
        return self::$is_connected;
    }

    public static function getError(): ?string {
        return self::$connection_error;
    }
}

// -------------------------------------------------------------
// Data Access Helper Functions
// -------------------------------------------------------------

function getBoardMembers(): array {
    global $DEFAULT_BOARD;
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM board_members ORDER BY display_order ASC, id ASC");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            // fallback
        }
    }
    return $DEFAULT_BOARD;
}

function getPatrons(): array {
    global $DEFAULT_PATRONS;
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM patrons ORDER BY display_order ASC, id ASC");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            // fallback
        }
    }
    return $DEFAULT_PATRONS;
}

function getEntityPartners(): array {
    global $DEFAULT_ENTITY_PARTNERS;
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM entity_partners ORDER BY display_order ASC, id ASC");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            // fallback
        }
    }
    return $DEFAULT_ENTITY_PARTNERS;
}

function getPeaceAccords(): array {
    global $DEFAULT_ACCORDS;
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM peace_accords ORDER BY display_order ASC, id ASC");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            // fallback
        }
    }
    return $DEFAULT_ACCORDS;
}

function getPoems(): array {
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM poems ORDER BY id ASC");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            // fallback
        }
    }
    return [
        [
            'title' => 'Who Speaks For Tomorrow?',
            'author' => 'Chaitri (Chai) N. Hapugalle',
            'theme' => 'Intergenerational Planetary Guardianship',
            'content' => "If future generations, nature, and the global commons\nCannot speak for themselves, who will speak for them?\n\nExploring life’s intricate tapestry,\nEach choice reveals regenerative pathways toward the exceptional—\nCalling for innovation to imagine what does not yet exist,\nInquisitiveness to keep learning beyond the familiar,\nAnd bravery to step forward despite uncertainty.\n\nThrough this spirit, challenges become teachers,\nHorizons expand, and the journey itself becomes\nA deeply meaningful and richly satisfying voyage."
        ]
    ];
}

function saveInquiry(array $data): bool {
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("INSERT INTO inquiries (full_name, email, organization, category, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
            return $stmt->execute([
                $data['full_name'] ?? '',
                $data['email'] ?? '',
                $data['organization'] ?? '',
                $data['category'] ?? 'General Inquiry',
                $data['subject'] ?? 'Website Inquiry',
                $data['message'] ?? ''
            ]);
        } catch (Exception $e) {
            return false;
        }
    }
    // Fallback: save to json file if database isn't running
    $file = __DIR__ . '/../inquiries_offline.json';
    $existing = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    if (!is_array($existing)) $existing = [];
    $data['id'] = count($existing) + 1;
    $data['created_at'] = date('Y-m-d H:i:s');
    $existing[] = $data;
    file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));
    return true;
}

function getInquiries(): array {
    $pdo = Database::connect();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM inquiries ORDER BY created_at DESC");
            return $stmt->fetchAll();
        } catch (Exception $e) {}
    }
    $file = __DIR__ . '/../inquiries_offline.json';
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true) ?: [];
    }
    return [];
}
