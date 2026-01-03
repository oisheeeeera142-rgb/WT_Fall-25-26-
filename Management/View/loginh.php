<!DOCTYPE html>
<html>
<head>
    <title>Login - Hotel Reservation</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form action="../Controller/login.php" method="post" onsubmit="return validateLogin()">
        <label>Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label>Role:</label>
        <select name="role" required>
            <option value="">--Select Role--</option>
            <option value="Guest">Guest</option>
            <option value="Admin">Admin</option>
        </select><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
