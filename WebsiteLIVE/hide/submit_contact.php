<?php
// submit_contact.php

// 1. Include the Email Helper
require_once 'includes/email_helper.php';

// --- Configuration ---
$dataDirectory = '/var/www/powerauto.com.au/website_data';
$csvFilePath = $dataDirectory . '/contact_submissions.csv';
$logFilePath = $dataDirectory . '/form_submissions.log';

$toEmail = "sales@powerauto.com.au"; 

// --- Helper Function ---
function log_message($message, $logType = 'CONTACT_SUBMIT') {
    global $logFilePath;
    $timestamp = date("Y-m-d H:i:s");
    if (!is_dir(dirname($logFilePath))) { @mkdir(dirname($logFilePath), 0775, true); }
    @file_put_contents($logFilePath, "[$timestamp] $logType: $message\n", FILE_APPEND);
}

// --- Helper: JSON Response (for AJAX) ---
function send_json_response($status, $message) {
    header('Content-Type: application/json');
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

// --- Form Processing ---
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    
    // Check if this is an AJAX request (JavaScript)
    $isAjax = isset($_POST['ajax_request']) && $_POST['ajax_request'] === 'true';

    $name = trim($_POST['contactName'] ?? '');
    $email = filter_var(trim($_POST['contactEmail'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['contactPhone'] ?? ''); 
    $subject = trim($_POST['contactSubject'] ?? '');
    $message = trim($_POST['contactMessage'] ?? '');
    $return_url = trim($_POST['return_url'] ?? 'contact.php'); 

    // --- Validation ---
    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($email)) $errors[] = "Email is required.";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (empty($subject)) $errors[] = "Subject is required.";
    if (empty($message)) $errors[] = "Message is required.";

    if (empty($errors)) {
        $timestamp = date("Y-m-d H:i:s");
        
        // 1. Save to CSV
        try {
            if (!is_dir($dataDirectory)) @mkdir($dataDirectory, 0775, true);
            if (!file_exists($csvFilePath)) {
                $file = @fopen($csvFilePath, 'w');
                if ($file) { fputcsv($file, ['Timestamp', 'Name', 'Email', 'Phone', 'Subject', 'Message']); fclose($file); }
            }
            $file = @fopen($csvFilePath, 'a');
            if ($file) {
                fputcsv($file, [$timestamp, $name, $email, $phone, $subject, $message]);
                fclose($file);
            }
        } catch (Exception $e) {
            log_message("Error saving to CSV: " . $e->getMessage());
        }

        // 2. Send Authenticated Email
        $email_subject = "Website Enquiry: $subject";
        $email_body = "You have received a new message from the Powerauto website contact form.\n\n";
        $email_body .= "--------------------------------------------------\n";
        $email_body .= "Name:    $name\n";
        $email_body .= "Email:   $email\n";
        $email_body .= "Phone:   $phone\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "--------------------------------------------------\n\n";
        $email_body .= "Message:\n$message\n";

        $mailSent = send_authenticated_email($toEmail, $email_subject, $email_body, $name, $email);

        if ($mailSent) {
            log_message("Email sent successfully to $toEmail");
            $successMsg = "Thank you! Your message has been sent successfully. We will be in touch shortly.";
            
            if ($isAjax) {
                send_json_response('success', $successMsg);
            } else {
                header("Location: " . $return_url . "?contact_status=success&contact_message=" . urlencode($successMsg));
            }
        } else {
            log_message("SMTP Email failed.");
            // Even if email fails, we saved CSV, so we show success to user to avoid panic
            $successMsg = "Thank you! Your message has been received. We will be in touch shortly.";
            
            if ($isAjax) {
                send_json_response('success', $successMsg);
            } else {
                header("Location: " . $return_url . "?contact_status=success&contact_message=" . urlencode($successMsg));
            }
        }
        exit;

    } else {
        // Validation Errors
        $errorMsg = implode(" ", $errors);
        
        if ($isAjax) {
            send_json_response('error', $errorMsg);
        } else {
            header("Location: " . $return_url . "?contact_status=error&contact_message=" . urlencode($errorMsg));
        }
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}
?>