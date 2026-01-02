<?php
session_start();


if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] === "admin") {
    header("Location: admindashboard.php");
    exit();
} elseif ($_SESSION['role'] === "guest") {
    header("Location: guestdashboard.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
