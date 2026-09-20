<?php
/**
 * Muhammad Musab - Contact Form AJAX Handler
 * Validates inputs, saves message to MySQL/SQLite/Storage, and dispatches email.
 */

header('Content-Type: application/json; charset=utf-8');

// Allow POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

require_once __DIR__ . '/includes/db.php';

// Parse POST input (supports JSON and form-urlencoded)
$rawInput = file_get_contents('php://input');
$jsonData = json_decode($rawInput, true);

$name = trim($jsonData['name'] ?? $_POST['name'] ?? '');
$email = trim($jsonData['email'] ?? $_POST['email'] ?? '');
$phone = trim($jsonData['phone'] ?? $_POST['phone'] ?? '');
$subject = trim($jsonData['subject'] ?? $_POST['subject'] ?? 'New Portfolio Inquiry');
$message = trim($jsonData['message'] ?? $_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name) || mb_strlen($name) < 2) {
    $errors[] = 'Please provide your name (at least 2 characters).';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please provide a valid email address.';
}

if (empty($message) || mb_strlen($message) < 5) {
    $errors[] = 'Please enter your message (at least 5 characters).';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors),
        'errors' => $errors
    ]);
    exit;
}

// Sanitize
$cleanName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$cleanPhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$cleanSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$cleanMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

// Save to Database / Storage
$saved = Database::saveContactMessage($cleanName, $cleanEmail, $cleanSubject, $cleanMessage . ($cleanPhone ? "\nPhone: " . $cleanPhone : ''), $ipAddress);

// Attempt Email Dispatch
$to = 'musabmehtabmusab1@gmail.com';
$emailSubject = "Portfolio Inquiry: {$cleanSubject} (from {$cleanName})";
$emailBody = "You have received a new inquiry from your portfolio website:\n\n" .
             "Name: {$cleanName}\n" .
             "Email: {$cleanEmail}\n" .
             "Phone: " . ($cleanPhone ?: 'Not provided') . "\n" .
             "Subject: {$cleanSubject}\n" .
             "IP Address: {$ipAddress}\n" .
             "Date: " . date('Y-m-d H:i:s') . "\n\n" .
             "Message:\n" .
             "--------------------------------------------------\n" .
             $cleanMessage . "\n" .
             "--------------------------------------------------\n";

$headers = "From: webmaster@muhammadmusab.dev\r\n" .
           "Reply-To: {$cleanEmail}\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Suppress mail error in local environment
@mail($to, $emailSubject, $emailBody, $headers);

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your message has been sent successfully. Muhammad Musab will reply promptly.'
]);
exit;
