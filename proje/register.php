<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ffe4c4;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 360px;
  padding-top: 50px;
  background-color: #ffe4c4;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
h1{
    color: purple;
}
</style>
</head>
<body>

<form action="register.php" method="post">
  <div class="container">
    <h1>Register Page</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name-surname" style="color: purple;"><b>name-surname</b></label>
    <input type="text" placeholder="Enter name and surname" name="name-surname" id="name-surname" required>

    <label for="nickname" style="color: purple;"><b>nickname</b></label>
    <input type="text" placeholder="Enter a nickname" name="nickname" id="nickname" required>

    <label for="email" style="color: purple;"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw" style="color: purple;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="submit">Register</button>
    <p>Already have an account? <a href="loginpanel.html">Sign in</a>.</p>
  </div>
  
</form>

</body>
</html>
<?php
include("connection2.php");
if(isset($_POST["name-surname"], $_POST["nickname"], $_POST["email"], $_POST["password"])){
    $name=$_POST["name-surname"];
    $nickname=$_POST["nickname"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $insert="INSERT INTO `records`(`id`, `name-surname`, `nickname`, `email`, `password`, `membership_date`) VALUES (NULL,'".$name."','".$nickname."','".$email."','".$password."',NULL)"; 

    if($conn->query($insert)===TRUE){
      echo "<script>alert('Registration is succesfully.')</script>";
  }
  else{
    echo "error";
  }
}
?>

