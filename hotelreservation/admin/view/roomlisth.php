

<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['role'] != 'Admin') {
    header("Location: loginh.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Room Management</title>
<link rel="stylesheet" href="roomlist">
<script src="roomlist.js"></script>
</head>
<body>
<h2>Room Management</h2>
<table>
<thead>
<tr>
<th>Room Number</th>
<th>Floor</th>
<th>View</th>
<th>Type</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody id="roomTableBody">
<tr>
<td>101</td><td>1</td><td>Sea View</td><td>Deluxe</td><td>Available</td>
<td><button class="editBtn" data-room="101">Edit</button>
    <button class="deleteBtn">Delete</button></td>
</tr>
</tbody>
</table>

<div id="addRoomForm" style="display:none;">
<h3>Add New Room</h3>
<form method="POST" action="../Controller/roomslist.php">
    <label>Room Number:</label>
    <input type="text" name="roomNumber" required />

    <label>Floor:</label>
    <input type="text" name="floor" required />

    <label>View:</label>
    <input type="text" name="view" required />

    <label>Type:</label>
    <input type="text" name="type" required />

    <label>Status:</label>
    <select name="status" required>
        <option value="">----Select status----</option>
        <option value="Available">Available</option>
        <option value="Occupied">Occupied</option>
        <option value="Cleaning">Cleaning</option>
        <option value="Maintenance">Maintenance</option>
    </select>

    <button type="submit">Save Room</button>
</form>
</div>

<button id="switchmotion" onclick="toggleForm()">Add Room</button>

</body>
</html>

