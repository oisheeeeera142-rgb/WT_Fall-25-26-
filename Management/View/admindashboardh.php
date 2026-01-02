
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="admindashboard.css">
<script src="admindashboard.js"></script>
</head>
<body>
<h1>admindashboard</h1>
<div class="buttons">
    <button onclick="goPage('rooms')">Manage Rooms</button>
    <button onclick="goPage('booking')">Manage Booking</button>
    <button onclick="goPage('housekeeping')">Manage House Keeping</button>
    <button onclick="goPage('payment')">Manage Payment</button>
    <button onclick="goPage('guestpayment')">Manage Guest Payment</button>
    <button onclick="goPage('reviews')">Manage Guest Reviews</button>
    <button onclick="goPage('reports')">Manage System Reports</button>
    <button onclick="goPage('guest')">Manage Guest</button>
</div>
<br>
<button onclick="window.location.href='logout.php'">Logout</button>
</body>
</html>
