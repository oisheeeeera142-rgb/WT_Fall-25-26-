<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $role = trim($_POST["role"]);

    if (!empty($email) && !empty($password) && !empty($role)) {
        // Session set
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role === "Admin") {
            header("Location: ../View/admindashboardh.php");
        } else {
            header("Location: ../View/guestdashboard.php");
        }
        exit();
    } else {
        echo "<p style='color:red;'>Email, Password and Role are required</p>";
    }
} else {
    // Direct access without POST
    header("Location: ../View/loginh.php");
    exit();
}
?>
