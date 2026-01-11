<!DOCTYPE html>
<html>
<head>
<title>Edit Room</title>
<link rel="stylesheet" href="../css/editroom.css">


</head>
<body>
<h2>Edit Room</h2>

<form method="POST" action="editroom .php">

<label>Room Number:</label>
<select name="roomNumber" required>
<option value="">-- Select roomNumber --</option>
<option value="101">101</option>
<option value="201">201</option>
<option value="301">301</option>
</select>

<label>Floor:</label>
<select name="floor" required>
<option value="">-- Select Floor --</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>

<label>View:</label>
<select name="view" required>
<option value="">-- Select View --</option>
<option value="Sea">Sea</option>
<option value="Garden">Garden</option>
<option value="Hill">Hill</option>
</select>

<label>Type:</label>
<select name="type" required>
<option value="">-- Select type --</option>
<option value="Deluxe">Deluxe</option>
<option value="Standard">Standard</option>
<option value="Balcony">Balcony</option>
</select>

<label>Status:</label>
<select name="status" required>
<option value="">-- Select status --</option>
<option value="Available">Available</option>
<option value="Occupied">Occupied</option>
<option value="Cleaning">Cleaning</option>
<option value="Maintenance">Maintenance</option>
</select>

<button type="submit">Update Room</button>
</form>

<script src="../js/editroom.js" defer></script>

</body>
</html>
