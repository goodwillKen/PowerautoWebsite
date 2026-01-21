<?php
// Start the session to access stored variables
session_start();

// Check if the 'site_unlocked' session variable is TRUE
// If it is NOT true, redirect the user back to the Coming Soon page
if (!isset($_SESSION['site_unlocked']) || $_SESSION['site_unlocked'] !== true) {
    header("Location: /index.html"); // Redirect to the public landing page
    exit; // Stop executing the rest of the PHP script immediately
}
?>