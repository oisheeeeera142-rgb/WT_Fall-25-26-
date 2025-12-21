<<!DOCTYPE html>
<html>
<head>
<title>Registration </title>
<style>
    body {
    font-family: Arial, sans-serif;
    padding: 30px;
    background-color: #f0f8ff;
    }

    h2 {
    text-align: center;
    color: #003366;
    }

    form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    margin: 0 auto;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, select, button {
    width: 100%;
    padding: 8px;
    margin-top: 10px;
border-radius: 5px;
border: 1px solid #ccc;
    }

    button {
    background-color: #003366;
    color: white;
    cursor: pointer;
    }

    button:hover {
    background-color: #0055aa;
    }

    #output {
    margin-top: 20px;
    text-align: center;
    font-size: 16px;
    color: #003366;
    }

    #error {
    margin-top: 10px;
    color: red;
    text-align: center;
    }
</style>
</head>
<body>

<h2>Registration Form</h2>

<form onsubmit="return handleSubmit()">
    <label>Name:</label>
    <input type="text" id="name" />

    <label>Email:</label>
    <input type="text" id="email" />

    <label>Password:</label>
    <input type="number" id="password" />
    <label>Confirm Password:</label>
    <input type="number" id=" Confirm password" />


    
    <button type="submit">Submit</button>
</form>

<!-- Output Section -->
<div id="error"></div>
div id="output"></div>

<script>
    function handleSubmit() {
      // Get values from form
var name = document.getElementById("name").value.trim();
    var id = document.getElementById("Email").value.trim();
    var Password = document.getElementById("password").value.trim();
    var confirm password= document.getElementById("confirm password").value;

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

      // Clear previous messages
    errorDiv.innerHTML = "";
outputDiv.innerHTML = "";

      // Validation
    if (name === "" || Email === "" || password === "" || confirm password === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
}

    if (Email(id)) {
        errorDiv.innerHTML = " Email ID must be numeric.";
        return false;
    }
    }
    outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email: ${Email}<br>
        password: ${password}<br>
        Confirm password: ${confirm password}
    `;

    return false;
}
</script>

</body>
</html>