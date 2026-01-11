<!DOCTYPE html>
<html>
<head>
    <title>Room Management</title>
    <link rel="stylesheet" href="../css/roomlist.css">
</head>
<body>

<h2>Room Management</h2>


<div class="roomlist">
    <div class="room-box">
        <p><b>Room:</b> 101</p>
        <p><b>Floor:</b> 1</p>
        <p><b>View:</b> Sea</p>
        <p><b>Type:</b> Deluxe</p>
        <p><b>Status:</b> Available</p>

        <div class="button">
            <button class="editBtn">Edit</button>
            <button class="deleteBtn">Delete</button>
        </div>
    </div>

    <div class="room-box">
        <p><b>Room:</b> 102</p>
        <p><b>Floor:</b> 1</p>
        <p><b>View:</b> City</p>
        <p><b>Type:</b> Standard</p>
        <p><b>Status:</b> Occupied</p>

        <div class="button">
            <button class="editBtn">Edit</button>
            <button class="deleteBtn">Delete</button>
        </div>
    </div>


</div>
<div id="addRoom" style="display:none;">
    <h3>Add New Room</h3>
    <form method="POST" action="../Controller/roomslist.php">

        <label>Room Number:</label>
        <input type="text" name="roomNumber" required>

        <label>Floor:</label>
        <input type="text" name="floor" required>

        <label>View:</label>
        <input type="text" name="view" required>

        <label>Type:</label>
        <input type="text" name="type" required>

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

<script src="../js/roomlist.js"></script>
</body>
</html>
