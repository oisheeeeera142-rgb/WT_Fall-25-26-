<?php


$emailError = $passwordError = $roleError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    if (empty($email)) $emailError = "Email is required";
    if (empty($password)) $passwordError = "Password is required";
    if (empty($role)) $roleError = "Role is required";
    if (empty($emailError) && empty($passwordError) && empty($roleError)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        if ($role === "Admin") {
            header("Location: ../View/admindashboardh.php");
            exit();
        } else {
            header("Location: guestdashboard.php");
            exit();
        }
    }
}
?>
