function validateLogin() {
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();

    if (email === "" || password === "") {
        alert("Email and Password are required!");
        return false;
    }
    return true;
}
