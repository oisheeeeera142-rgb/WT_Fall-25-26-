function handleSubmit() {
// Get values from form
var fullname = document.getElementById("fullname").value.trim();
var loginId = document.getElementById("loginId").value.trim();
var email = document.getElementById("email").value.trim();
var password = document.getElementById("password").value;
var role = document.getElementById("role").value;

var errorDiv = document.getElementById("error");
var outputDiv = document.getElementById("output");

// Clear previous messages
errorDiv.innerHTML = "";
outputDiv.innerHTML = "";

// Validation 
if (fullname === "" || loginId === "" || email === "" || password === "" || role === "") {
errorDiv.innerHTML = "Please fill in all fields.";
return false;
}
if (!/^[a-zA-Z ]+$/.test(fullname)) {
errorDiv.innerHTML = "Full Name can only contain letters and spaces.";
return false;
}

if (!/^[a-zA-Z0-9_]{4,20}$/.test(loginId)) {
errorDiv.innerHTML = "Login ID must be 4-20 characters (letters, numbers, _ allowed).";
return false;
}
if (!/^\S+@\S+\.\S+$/.test(email)) {
errorDiv.innerHTML = "Invalid email format.";
return false;
}
if (password.length < 6) {
errorDiv.innerHTML = "Password must be at least 6 characters.";
return false;
}
outputDiv.innerHTML = "Validation successful! Form can be submitted.";
return true;
}
