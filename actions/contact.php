<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Phương thức không được hỗ trợ.']);
    exit;
}

$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Thư viện chưa được cài đặt. Vui lòng chạy composer install.']);
    exit;
}

require_once $autoload;

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

$payload = file_get_contents('php://input');
$data = json_decode($payload, true);
if (!is_array($data)) {
    $data = $_POST;
}

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$message = trim($data['message'] ?? '');

$errors = [];

if ($name === '') {
    $errors['name'] = 'Vui lòng nhập họ và tên.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email không hợp lệ.';
}

if ($message === '') {
    $errors['message'] = 'Vui lòng nhập nội dung tin nhắn.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Vui lòng kiểm tra lại thông tin.', 'errors' => $errors]);
    exit;
}

$envPath = dirname(__DIR__);
if (file_exists($envPath . '/.env')) {
    $dotenv = Dotenv::createImmutable($envPath);
    $dotenv->safeLoad();
}

$env = static function (string $key, $default = null) {
    return $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key) ?? $default;
};

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = (string) $env('SMTP_HOST', '');
    $mail->Port = (int) $env('SMTP_PORT', 587);
    $mail->SMTPAuth = true;
    $mail->Username = (string) $env('SMTP_USERNAME', '');
    $mail->Password = (string) $env('SMTP_PASSWORD', '');

    $encryption = $env('SMTP_ENCRYPTION');
    if (!empty($encryption)) {
        $mail->SMTPSecure = $encryption;
    }

    $fromEmail = (string) $env('SMTP_FROM', 'no-reply@example.com');
    $fromName = (string) $env('SMTP_FROM_NAME', 'Portfolio');
    $contactTo = (string) $env('CONTACT_TO', $fromEmail);

    if ($mail->Host === '' || $mail->Username === '' || $mail->Password === '') {
        throw new RuntimeException('Cấu hình SMTP chưa đầy đủ.');
    }

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($contactTo);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Liên hệ mới từ Portfolio';
    $mailContent = '<h2>Thông tin liên hệ mới</h2>' .
        '<p><strong>Họ tên:</strong> ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><strong>Email:</strong> ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><strong>Nội dung:</strong></p>' .
        '<p>' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</p>';
    $mail->Body = $mailContent;
    $mail->AltBody = "Lien he moi tu $name ($email):\n\n$message";

    $mail->send();

    echo json_encode(['status' => 'success', 'message' => 'Cảm ơn bạn! Tin nhắn đã được gửi.']);
} catch (PHPMailerException|\Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Không thể gửi email vào lúc này. Vui lòng thử lại sau.',
        'detail' => $e->getMessage(),
    ]);
}
