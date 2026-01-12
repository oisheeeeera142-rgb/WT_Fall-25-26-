    <!DOCTYPE html>
    <html>
    <head>
    <title>Room Management</title>
    <link rel="stylesheet" href="../css/roomlist.css">
</head>
<body>

<h2>Room Management</h2>

<div class="rooms">

<div class="room-box">
<p><b>Room:</b> </p>
<p><b>Floor:</b> </p>
<p><b>View:</b> </p>
<p><b>Type:</b> </p>
<p><b>Status:</b> </p>

<div class="button">
<button class="editBtn">Edit</button>
<button class="deleteBtn">Delete</button>
</div>
</div>
<div class="room-box">
<p><b>Room:</b> </p>
<p><b>Floor:</b> </p>
<p><b>View:</b> </p>
<p><b>Type:</b> </p>
<p><b>Status:</b> </p>

<div class="button">
<button class="editBtn">Edit</button>
<button class="deleteBtn">Delete</button>
</div>
</div>

<div class="room-box">
<p><b>Room:</b> </p>
<p><b>Floor:</b> </p>
<p><b>View:</b> </p>
<p><b>Type:</b> </p>
<p><b>Status:</b> </p>

<div class="button">
<button class="editBtn">Edit</button>
<button class="deleteBtn">Delete</button>
</div>
</div>

</div>
<div id="addRoomForm" style="display:none;">
<h3>Add New Room</h3>
<form method="POST" action="../Controller/roomslist.php" class="room-form">
<label for="roomNumber">Room Number:</label>
<input type="text" id="roomNumber" name="roomNumber" required>
<label for="floor">Floor:</label>
<input type="text" id="floor" name="floor" required>
<label for="view">View:</label>
<input type="text" id="view" name="view" required>
<label for="type">Type:</label>
<input type="text" id="type" name="type" required>
<label for="status">Status:</label>
<select id="status" name="status" required>
<option value="">Select Status</option>
<option>Available</option>
<option>Occupied</option>
<option>Cleaning</option>
<option>Maintenance</option>
</select>
<button type="submit">Save Room</button>
</form>
</div>


    <button id="switchmotion" onclick="toggleForm()">Add Room</button>

    <script src="../js/roomlist.js"></script>
    </body>
    </html>
