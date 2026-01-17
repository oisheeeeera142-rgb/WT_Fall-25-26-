
<?php
require_once __DIR__ . "/../controller/reg.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Hotel Reservation</title>
    <link rel="stylesheet" href="../css/reg.css">
    <script src="../js/reg.js" defer></script>
</head>
<body>

<h2>Registration</h2>

<form action="" method="post" onsubmit="return validateForm()">
    <label>Name:</label>
    <input type="text" name="name" id="name" value="<?= $name ?? '' ?>">
    <span class="error"><?= $nameError ?></span><br>

    <label>Email:</label>
    <input type="email" name="email" id="email" value="<?= $email ?? '' ?>">
    <span class="error"><?= $emailError ?></span><br>

    <label>Password:</label>
    <input type="password" name="password" id="password">
    <span class="error"><?= $passwordError ?></span><br>

    <label>Role:</label>
    <select name="role" id="role">
        <option value="">--Select Role--</option>
        <option value="Guest" <?= (isset($role) && $role=="Guest")?"selected":"" ?>>Guest</option>
        <option value="Admin" <?= (isset($role) && $role=="Admin")?"selected":"" ?>>Admin</option>
    </select>
    <span class="error"><?= $roleError ?></span><br>

    <button type="submit">Register</button>
</form>

<?php if (!empty($successMessage)) echo "<p class='success'>$successMessage</p>"; ?>

</body>
</html>

