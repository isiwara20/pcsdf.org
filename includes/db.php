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

function getAdvisors(): array {
    global $DEFAULT_ADVISORS;
    return $DEFAULT_ADVISORS ?? [];
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
            'title' => 'Anthem of the Poor',
            'author' => 'Chaitri N. Hapugalle (Chai) & ChatGPT',
            'theme' => 'Human Dignity, Voice & Global Justice',
            'dedication' => 'For the dreamers, the doers, and the gentle guardians of the Earth—for those who plant even when the soil is tired, who clean rivers others forget, and who believe that love can be policy. For every child who looks at the sky and wonders how blue it will be tomorrow, and every heart that still dares to keep the world green. This is for you—for choosing compassion as the true currency of development, and care as the architecture of progress.',
            'content' => "We are the forgotten millions,
the invisible threads that bind the world,
the workers of fields, mines, and markets,
the mothers who stretch a single meal across three nights,
the fathers who labor without rest yet sleep in hunger.

We are the poor.
But we are not weak.
We are the backbone of nations,
the builders of cities,
the keepers of rivers and forests,
the guardians of tomorrow’s children.

Yet—
we are made voiceless.
Do you hear our voices?
Do you hear the cry of the child denied school,
the woman walking miles for water,
the farmer crushed by debt and drought?

Do you hear us?
Or are we drowned out by the noise of power and plenty?
Invisible we may seem,
but we are everywhere.
Exiled from comfort,
but not from hope.
Silenced by injustice,
yet singing still.

And we sing not for pity,
but for justice.
We demand not charity,
but dignity.
We seek not favor,
but fairness.

To future generations we say:
Do not inherit silence.
Do not repeat the sins of greed.
Carry forward an anthem where none are left behind,
where wealth does not measure worth,
where peace is not a privilege,
but the right of all.

For when the poor stand tall,
humanity stands taller.
When the excluded are included,
the earth breathes easier.
And when the voiceless are heard,
the anthem of the poor
becomes the anthem of the world."
        ],
        [
            'title' => 'How Green and Blue Do We Really Want Our Love to Be?',
            'author' => 'Chaitri (Chai) Hapugalle in creative collaboration with ChatGPT',
            'theme' => 'Ecology, Tenderness & Practical Stewardship',
            'dedication' => 'Dedicated to all life systems, planetary boundaries, and the quiet guardians of nature.',
            'content' => "How green do we really want our love to be?
Just enough to paint a promise—
or deep enough to let forests breathe again?

How blue do we dare our hearts to dream?
Just the sky of words—
or the ocean that forgives our storms?

We speak of sustainability as if it were science,
but it is really tenderness made practical—
the art of remembering
that every seed,
every drop,
every child’s breath
belongs to tomorrow too.

Development, they say,
is growth—
but growth without grace is hunger in disguise.
What is progress if it forgets the river’s name?
What is success if it silences the wind?

Love is not measured in wealth,
but in how gently we return what we take.
To sustain is to stay faithful
to the quiet pact of life—
the tree’s gift of shade,
the coral’s fragile song,
the soil’s humble strength beneath our feet.

Let our love be green enough
to heal what was broken.
Let our love be blue enough
to hold all life as one."
        ],
        [
            'title' => 'Who Speaks For Tomorrow?',
            'author' => 'Chaitri (Chai) N. Hapugalle',
            'theme' => 'Year of the Horse & Intergenerational Guardianship',
            'dedication' => 'Year of the Horse — Inspiring Peace-Led, Faith- and Indigenous-Inspired, Climate-Friendly Regeneration Across All Systems, All Life and All Generations.',
            'content' => "If future generations, nature, and the global commons
Cannot speak for themselves, who will speak for them?

Exploring life’s intricate tapestry,
Each choice reveals regenerative pathways toward the exceptional—
Calling for innovation to imagine what does not yet exist,
Inquisitiveness to keep learning beyond the familiar,
And bravery to step forward despite uncertainty.

Through this spirit, challenges become teachers,
Horizons expand, and the journey itself becomes
A deeply meaningful and richly satisfying voyage."
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
