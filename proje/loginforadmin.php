<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: #ffe4c4;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: purple;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid purple;
}

/* Set a style for the submit button */
.btn {
  background-color: purple;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="loginforadmin.php" method="post" style="max-width:500px;margin:auto; padding: 0px; margin-top: 150px;">
  <h1 style="color: purple;">Login For Admin</h1>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Register</button>
</form>

</body>
</html>
<?php

session_start();

if (isset($_POST["email"], $_POST["psw"]))
{
    if($_POST["email"]=="Bookpedi@gmail.com" && $_POST["psw"]=="232323")
    {
        $_SESSION["USER"]=$_POST["email"];
        header("location:panel.php");
    }
    else
    {
        echo "<script>alert('Username or password is incorrect.')</script>";
    }
}

?>