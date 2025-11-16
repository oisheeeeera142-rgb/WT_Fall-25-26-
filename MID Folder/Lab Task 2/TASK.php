<!DOCTYPE html>
<html>
<head>
<title>Course registration></title>
<styel>
body{
font-family;Arial,sans-serif;
padding:30px;
}
h1{
    text-align:center;
    front size:30px;
} 
form{
backround-color class.#fffff;
padding:20px;
border-redius:10px;
width :300px;
margin : 0 aut0;
}
input,select,button{
width:100%
padding:8px;
border-redius:5px;

}
</style>
</head>
</body>
<h1>Resgitration Form</h1>
<form onsubmit="return handlesubmit()">
    <label>Full Name:</label>
    <input type="text"id="Full Name"/>
    <label>Email:</label>
    <input type="text"id="Email"/>
    <label>password:</label>
    <input type="Number"id="password"/>
    <label>Confirm password:</label>
    <input type="Number"id="confirm password"/>
    <button type="submit">submit</button>
</form>
<!--Output Section-->
<div id="error"></div>
<script>
    function handleSubmit() {
      // Get values from form
    var name=
    document.getElementBy("Full name").value.trim();
    document.getElementBy("Email").value.trim();
    var password=document.getElementBy("password").value.trim();
    var password=document.getElementBy("password").value.trim();
    var errorDiv=document.getElementByid("error");
    Var outputDiv=document.getElementByid("Output");
    errorDiv.iinerHTML="";
    OutoutDiv.iiner HTml="";
    if(Full name===""|| Email===""||password""||confirm password==="") {
        errorDiv.inner Html="please fill in all field.";
        return false;
    }
if(without@(Email)){
    errorDiv.innerHTML="email must be "@".";

} 
f(password>confirm password){
    errorDiv.innerHTML="pass cannot be not match with confirm password .";
    return false;
}
OutputDIV.innerHTML=<Strong>Register complete!</
strong><br><br>
Name:${Full name}<br>
Email:${Email}}<br>
Password:${password}<br>
Confirm password:${Confirm password};
;
return false;
}
</script>
<body>
</html>



