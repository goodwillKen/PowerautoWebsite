<?php
// submit_lead.php

// 1. Include the Email Helper
require_once 'includes/email_helper.php';

// --- Configuration ---
$dataDirectory = '/var/www/powerauto.com.au/website_data';
$csvFilePath = $dataDirectory . '/leads.csv';
$logFilePath = $dataDirectory . '/form_submissions.log';

$toEmail = "sales@powerauto.com.au";

function log_message($message) {
    global $logFilePath;
    $timestamp = date("Y-m-d H:i:s");
    if (!is_dir(dirname($logFilePath))) @mkdir(dirname($logFilePath), 0775, true);
    @file_put_contents($logFilePath, "[$timestamp] LEAD_SUBMIT: $message\n", FILE_APPEND);
}

// --- Form Processing ---
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $name = trim($_POST['leadName'] ?? '');
    $email = filter_var(trim($_POST['leadEmail'] ?? ''), FILTER_SANITIZE_EMAIL);
    $return_url = trim($_POST['return_url'] ?? 'index.php'); 

    // --- Validation ---
    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";

    // Security Check on return URL
    if (!empty($return_url)) {
        $allowed_pages = ['index.php', 'about.php', 'products.php', 'services.php', 'news.php', 'contact.php'];
        $parsed_path = parse_url($return_url, PHP_URL_PATH);
        $basename = basename($parsed_path);
        if (!in_array($basename, $allowed_pages)) $return_url = 'index.php'; 
    } else {
        $return_url = 'index.php';
    }

    if (empty($errors)) {
        $timestamp = date("Y-m-d H:i:s");
        
        // 1. Save to CSV
        try {
            if (!is_dir($dataDirectory)) @mkdir($dataDirectory, 0775, true);
            if (!file_exists($csvFilePath)) {
                $file = @fopen($csvFilePath, 'w'); 
                if ($file) { fputcsv($file, ['Timestamp', 'Name', 'Email']); fclose($file); }
            }
            $file = @fopen($csvFilePath, 'a'); 
            if ($file) { fputcsv($file, [$timestamp, $name, $email]); fclose($file); }
        } catch (Exception $e) {
            log_message("Error saving CSV: " . $e->getMessage());
        }

        // 2. Send Authenticated Email
        $email_subject = "New Lead Signup: $name";
        $email_body = "A new user has signed up for updates.\n\nName: $name\nEmail: $email\n\nTimestamp: $timestamp";

        if (send_authenticated_email($toEmail, $email_subject, $email_body, $name, $email)) {
            log_message("Lead saved and SMTP email sent for: $email");
            header("Location: " . $return_url . "?lead_status=success&lead_message=" . urlencode("Thanks for signing up! We'll keep you in the loop."));
        } else {
            log_message("Lead saved but SMTP email failed for: $email");
            header("Location: " . $return_url . "?lead_status=success&lead_message=" . urlencode("Thanks for signing up! We'll keep you in the loop."));
        }
        exit;

    } else {
        $error_message = implode(" ", $errors);
        header("Location: " . $return_url . "?lead_status=error&lead_message=" . urlencode($error_message));
        exit;
    }
} else {
    header("Location: index.php"); 
    exit;
}
?>