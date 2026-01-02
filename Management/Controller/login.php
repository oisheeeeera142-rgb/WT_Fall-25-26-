<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    if (!empty($email) && !empty($password)) {
        header("Location: home.html");
        exit();
    } else {
        echo "<p style='color:red;'>Email and Password are required</p>";
    }
}
?>
