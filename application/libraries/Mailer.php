<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require APPPATH . 'third_party/PHPMailer/src/Exception.php';
require APPPATH . 'third_party/PHPMailer/src/PHPMailer.php';
require APPPATH . 'third_party/PHPMailer/src/SMTP.php';

class Mailer {

    public function send_email($recipients, $subject, $body) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Host SMTP Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'isroqtest@gmail.com'; // Email pengirim
        $mail->Password = 'bijh bywl jfgy yhsw'; // Ganti dengan App Password atau password Gmail Anda
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // Port untuk TLS

        $mail->setFrom('isroqtest@gmail.com', 'Admin');
        foreach ($recipients as $email) {
            $mail->addAddress($email);
        }

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(true);

        if (!$mail->send()) {
            log_message('error', 'Mailer Error: ' . $mail->ErrorInfo);
            return false;
        }
        return true;
    }
}
