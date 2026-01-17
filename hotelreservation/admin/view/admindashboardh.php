<?php
    session_start();
if (
empty($_SESSION['loggedin']) ||
$_SESSION['loggedin'] !== true ||
empty($_SESSION['role']) ||
$_SESSION['role'] !== 'Admin'
) {
header("Location: loginh.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/admindashboard.css">
</head>
<body>
<header class="header">
<h1>Admin Dashboard</h1>
<button id="logoutBtn" onclick="location.href='../controller/logout.php'">Logout</button>
</header>
<main>
<div class="buttons">
<button onclick="location.href='roomlisth.php'">Manage Rooms</button>
<button onclick="location.href='booking.php'">Manage Bookings</button>
<button onclick="location.href='payment.php'">Payment</button>
<button onclick="location.href='housekeeping.php'">Housekeeping</button>
<button onclick="location.href='guestreview.php'">Guest Review</button>
</div>
</main>