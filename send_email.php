<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Sesuaikan dengan path autoload PHPMailer di server Anda

if (isset($_POST['submit'])) {
    $to = "alamat-email-septinna05@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $mail = new PHPMailer(true);
    try {
        $mail->setFrom($email);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
    } catch (Exception $e) {
        echo "Pesan tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
