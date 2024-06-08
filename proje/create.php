
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookpedia/Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1>Admin Panel</h1>
        <a class="btn btn-primary" href="panel.php" role="button">All user</a>
        <a class="btn btn-primary" href="create.php" role="button">New user</a>
        <a class="btn btn-primary" href="messages.php" role="button">Messages</a>
        <a class="btn btn-primary" href="index.php" role="button">Home Page</a>
        <a class="btn btn-primary" href="index.php" role="button">Logout</a>
        <br>
        <main>
            <div class="container" style="border: 5px solid white;">
                <form action="create.php" method="post" class="row mt-4 g-3">
                    <div class="col-6">
                        <label for="fullName" class="form-label"><b>Name Surname</b></label>
                        <input type="text" class="form-control" id="exampleInputNameSurname1" name="name-surname">
                    </div>
                    <div class="col-6">
                        <label for="nickname" class="form-label"><b>Nickname</b></label>
                        <input type="text" class="form-control" id="exampleInputNickname1" name="nickname">
                    </div>
                    <div class="col-6">
                        <label for="email" class="form-label"><b>Email Address</b></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
                </form>
            </div>

        </main>
    </div>
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