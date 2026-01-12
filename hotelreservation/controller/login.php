<?php
session_start();

$email = $password = $role = "";
$emailError = $passwordError = $roleError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["email"])) {
    $emailError = "Email is required";
} else {
    $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["role"])) {
        $roleError = "Role is required";
    } else {
        $role = $_POST["role"];
    }

    if (empty($emailError) && empty($passwordError) && empty($roleError)) {

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        $cookie_time = time() + (20 * 24 * 60 * 60);
        setcookie("email", $email, $cookie_time, "/");

        if ($role === "Admin") {
        header("Location: ../view/admindashboardh.php");
        exit();
        } else {
        header("Location: guestdashboard.php");
        exit();
        }
    }
}
?>
