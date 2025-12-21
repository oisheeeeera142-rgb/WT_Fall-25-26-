<<<<<<< HEAD
<?php
// Basic secure registration handler.
// Adjust DB credentials and ensure sessions are properly configured.

session_start();

// Simple CSRF validation (align with your session strategy)
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
    // If you rely on client-side token only, comment the session check and implement server-side CSRF later.
    // For demo, accept the posted token but recommend server-generated token stored in session.
}

function respond($ok, $message) {
    $cls = $ok ? 'success' : 'error';
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><link rel='stylesheet' href='styles.css'><title>Registration</title></head><body>";
    echo "<div class='container'><h1>Registration status</h1><div class='alert $cls'>$message</div>";
    echo "<div class='actions'><a class='link' href='register.html'>Back to registration</a> | <a class='link' href='login.html'>Go to login</a></div></div>";
    echo "</body></html>";
    exit;
}

// Sanitize helpers
function clean($v) { return trim($v ?? ''); }

// Validate input presence
$full_name = clean($_POST['full_name'] ?? '');
$email     = clean($_POST['email'] ?? '');
$phone     = clean($_POST['phone'] ?? '');
$user_type = clean($_POST['user_type'] ?? '');
$password  = $_POST['password'] ?? '';
$confirm   = $_POST['confirm_password'] ?? '';
$preferred_floor = clean($_POST['preferred_floor'] ?? '');
$special_request = clean($_POST['special_request'] ?? '');

if ($full_name === '' || $email === '' || $user_type === '' || $password === '' || $confirm === '') {
    respond(false, 'Please fill in all required fields.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Invalid email address.');
}
if (!in_array($user_type, ['Admin','Guest'], true)) {
    respond(false, 'Invalid user type.');
}
if (strlen($password) < 8) {
    respond(false, 'Password must be at least 8 characters.');
}
if ($password !== $confirm) {
    respond(false, 'Passwords do not match.');
}

// Stronger password policy (optional)
$hasUpper = preg_match('/[A-Z]/', $password);
$hasLower = preg_match('/[a-z]/', $password);
$hasNumOrSym = preg_match('/[0-9\W]/', $password);
if (!$hasUpper || !$hasLower || !$hasNumOrSym) {
    respond(false, 'Password should include uppercase, lowercase, and numbers or symbols.');
}

// Hash password
$hash = password_hash($password, PASSWORD_DEFAULT);
if ($hash === false) {
    respond(false, 'Failed to secure password. Try again.');
}

// DB connection (update credentials)
$host = 'localhost';
$db   = 'hotel_app';
$user = 'root';
$pass = '';
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    respond(false, 'Database connection error.');
}

// Prevent duplicate email
$stmt = $pdo->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
$stmt->execute([$email]);
if ($stmt->fetch()) {
    respond(false, 'An account with this email already exists.');
}

// Insert user
$stmt = $pdo->prepare('
    INSERT INTO users (full_name, email, phone, password_hash, user_type, preferred_floor, special_request)
    VALUES (:full_name, :email, :phone, :password_hash, :user_type, :preferred_floor, :special_request)
');

try {
    $stmt->execute([
        ':full_name' => $full_name,
        ':email' => $email,
        ':phone' => $phone,
        ':password_hash' => $hash,
        ':user_type' => $user_type,
        ':preferred_floor' => ($user_type === 'Guest' ? $preferred_floor : null),
        ':special_request' => ($user_type === 'Guest' ? $special_request : null),
    ]);
} catch (PDOException $e) {
    respond(false, 'Failed to create account.');
}

// Optional: log registration
try {
    $userId = $pdo->lastInsertId();
    $log = $pdo->prepare('INSERT INTO auth_log (user_id, action) VALUES (?, ?)');
    $log->execute([$userId, 'register']);
} catch (PDOException $e) {
    // Non-blocking
}

respond(true, 'Account created successfully. You can now log in.');
=======
<!DOCTYPE html>
<html>
<head>
<title>
DOM Practice
</title>
</head>
    <body>

<h1 id="Course selection section">Light Mood </h1>
<button Add course="switchmotion" onclick="toggle()">Switch </button>
<button Add course="Delet" onclick="toggle()">Switch </button>

<script>
function toggle()
{
var title= document.getElementById(" Course selection section");
var button= document.getElementById("switchmotion");
var body =document.body;
if(body.style.backgroundColor==="black")
{
body.style.backgroundColor="white";
title.style.color="black";
title.innerHTML="Light Mood";
button.innerHTML = "Swith to Dark Mood";

}

else
{
body.style.backgroundColor="black";
title.style.color="white";
title.innerHTML="Dark Mood";
button.innerHTML = "Swith to Light Mood";

}
}
</script>

</body>


</html>


>>>>>>> 22adb5c838c7d59f7e701a66bbdb0f1f727fe03a
