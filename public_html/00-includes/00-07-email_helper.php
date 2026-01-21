<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

// LOAD CREDENTIALS
// We use the secure website_data directory you defined in submit_contact.php
require_once '/var/www/powerauto.com.au/website_data/email_config.php';

function send_authenticated_email($toEmail, $subject, $body, $replyToName = '', $replyToEmail = '') {
    
    // Credentials are now loaded from email_config.php via the require_once above

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS; 
        
        // Map string 'tls' to PHPMailer constant if needed, or just use the constant directly
        // logical check to ensure we use the correct PHPMailer constant
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = SMTP_PORT;

        // Recipients
        $mail->setFrom(SMTP_USER, 'Powerauto Website'); 
        $mail->addAddress($toEmail);                     

        // Reply-To
        if ($replyToEmail && $replyToName) {
            $mail->addReplyTo($replyToEmail, $replyToName);
        }

        // Content
        $mail->isHTML(false); 
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Log error
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
        return false;
    }
}
?>