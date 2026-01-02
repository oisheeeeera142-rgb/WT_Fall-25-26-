<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || empty($_SESSION['role'])) {
    // Not logged in → redirect to login page
    header("Location: loginh.php");
    exit();
}

// Redirect based on role
switch ($_SESSION['role']) {
    case "Admin":
        // Admin dashboard
        header("Location: admindashboardh.php");
        exit();
    case "Guest":
        // Guest dashboard
        header("Location: guestdashboard.php");
        exit();
    default:
        // Unknown role → logout or back to login
        session_destroy();
        header("Location: loginh.php");
        exit();
}
?>
