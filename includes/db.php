<?php
/**
 * Database Connection & Query Handler
 * Provides PDO connection for MySQL with automatic SQLite and array fallbacks.
 */

require_once __DIR__ . '/data.php';

class Database {
    private static $pdo = null;
    private static $is_connected = false;
    private static $db_type = 'none';

    public static function getConnection() {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        // MySQL default credentials (e.g. XAMPP)
        $host = getenv('DB_HOST') ?: '127.0.0.1';
        $port = getenv('DB_PORT') ?: '3306';
        $dbname = getenv('DB_NAME') ?: 'musab_portfolio';
        $user = getenv('DB_USER') ?: 'root';
        $pass = getenv('DB_PASS') !== false ? getenv('DB_PASS') : '';

        // Attempt 1: Connect to MySQL
        try {
            $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
            self::$pdo = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_TIMEOUT => 2
            ]);
            self::$is_connected = true;
            self::$db_type = 'mysql';
            return self::$pdo;
        } catch (PDOException $e) {
            // MySQL not available or database doesn't exist yet
        }

        // Attempt 2: Connect to or initialize SQLite database
        try {
            $storageDir = __DIR__ . '/../storage';
            if (!is_dir($storageDir)) {
                @mkdir($storageDir, 0777, true);
            }
            $sqlitePath = $storageDir . '/portfolio.sqlite';
            self::$pdo = new PDO("sqlite:" . $sqlitePath, null, null, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            self::$is_connected = true;
            self::$db_type = 'sqlite';

            // Auto-initialize SQLite tables if not present
            self::initSQLiteTables();
            return self::$pdo;
        } catch (Exception $e) {
            self::$pdo = null;
            self::$is_connected = false;
            self::$db_type = 'none';
        }

        return self::$pdo;
    }

    private static function initSQLiteTables() {
        if (!self::$pdo || self::$db_type !== 'sqlite') return;

        self::$pdo->exec("
            CREATE TABLE IF NOT EXISTS contact_messages (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL,
                subject TEXT NOT NULL,
                message TEXT NOT NULL,
                ip_address TEXT,
                is_read INTEGER DEFAULT 0,
                submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ");
    }

    public static function getProjects($category = null, $limit = null) {
        global $projects_data;
        $pdo = self::getConnection();

        if ($pdo && self::$db_type === 'mysql') {
            try {
                $sql = "SELECT * FROM projects WHERE 1=1";
                $params = [];
                if ($category) {
                    $sql .= " AND category = :cat";
                    $params[':cat'] = $category;
                }
                $sql .= " ORDER BY sort_order ASC";
                if ($limit) {
                    $sql .= " LIMIT " . intval($limit);
                }
                $stmt = $pdo->prepare($sql);
                $stmt->execute($params);
                $rows = $stmt->fetchAll();
                if (!empty($rows)) {
                    foreach ($rows as &$r) {
                        $r['tags'] = !empty($r['tags']) ? explode(',', $r['tags']) : [];
                    }
                    return $rows;
                }
            } catch (Exception $e) {
                // fallback to data.php
            }
        }

        // Data fallback from data.php
        $filtered = $projects_data;
        if ($category) {
            $filtered = array_filter($filtered, function($item) use ($category) {
                return $item['category'] === $category;
            });
        }
        if ($limit) {
            $filtered = array_slice($filtered, 0, $limit);
        }
        return array_values($filtered);
    }

    public static function getTestimonials($limit = null) {
        global $testimonials_data;
        $pdo = self::getConnection();

        if ($pdo && self::$db_type === 'mysql') {
            try {
                $sql = "SELECT * FROM testimonials ORDER BY sort_order ASC, id ASC";
                if ($limit) {
                    $sql .= " LIMIT " . intval($limit);
                }
                $stmt = $pdo->query($sql);
                $rows = $stmt->fetchAll();
                if (!empty($rows)) {
                    return $rows;
                }
            } catch (Exception $e) {
                // fallback to data.php
            }
        }

        $list = $testimonials_data;
        if ($limit) {
            $list = array_slice($list, 0, $limit);
        }
        return $list;
    }

    public static function getPricingPackages() {
        global $pricing_data;
        $pdo = self::getConnection();

        if ($pdo && self::$db_type === 'mysql') {
            try {
                $stmt = $pdo->query("SELECT * FROM pricing_packages ORDER BY sort_order ASC");
                $rows = $stmt->fetchAll();
                if (!empty($rows)) {
                    foreach ($rows as &$row) {
                        $row['features'] = json_decode($row['features_json'], true) ?: [];
                    }
                    return $rows;
                }
            } catch (Exception $e) {
                // fallback to data.php
            }
        }

        return $pricing_data;
    }

    public static function saveContactMessage($name, $email, $subject, $message, $ip = null) {
        $storageDir = __DIR__ . '/../storage';
        if (!is_dir($storageDir)) {
            @mkdir($storageDir, 0777, true);
        }

        // Always save to JSON backup
        $backupFile = $storageDir . '/messages.json';
        $currentMessages = file_exists($backupFile) ? json_decode(file_get_contents($backupFile), true) : [];
        if (!is_array($currentMessages)) $currentMessages = [];

        $record = [
            'id' => time() . rand(100, 999),
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'ip_address' => $ip,
            'submitted_at' => date('Y-m-d H:i:s')
        ];
        $currentMessages[] = $record;
        @file_put_contents($backupFile, json_encode($currentMessages, JSON_PRETTY_PRINT));

        // Save to Database (MySQL or SQLite)
        $pdo = self::getConnection();
        if ($pdo) {
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO contact_messages (name, email, subject, message, ip_address, submitted_at) 
                    VALUES (:name, :email, :subject, :message, :ip, :submitted_at)
                ");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':subject' => $subject,
                    ':message' => $message,
                    ':ip' => $ip,
                    ':submitted_at' => date('Y-m-d H:i:s')
                ]);
                return true;
            } catch (Exception $e) {
                // Already stored in JSON
                return true;
            }
        }

        return true;
    }
}
