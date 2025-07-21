<?php

require_once 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'eiaminhassan35@gmail.com';
    $mail->Password   = 'your_gmail_password'; // Replace with your actual password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('eiaminhassan35@gmail.com', 'Laravel Portfolio');
    $mail->addAddress('eiaminhassan35@gmail.com', 'Eiamin Hassan');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Laravel Portfolio';
    $mail->Body    = '<h1>Test Email</h1><p>If you receive this, your email configuration is working!</p>';

    $mail->send();
    echo 'Test email sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>
