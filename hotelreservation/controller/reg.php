<?php


$name = $email = $password = $role = "";
$nameError = $emailError = $passwordError = $roleError = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    if (empty($name)) $nameError = "Name is required";
    if (empty($email)) $emailError = "Email is required";
    if (empty($password)) $passwordError = "Password is required";
    if (empty($role)) $roleError = "Role is required";


    if (empty($nameError) && empty($emailError) && empty($passwordError) && empty($roleError)) {

        header("Location: ../view/loginh.php"); 
        exit();
    }
}
?>
