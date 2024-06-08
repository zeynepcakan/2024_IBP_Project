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
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Topic</th>
                    <th>Message</th>
                    <th>Message Date</th>
                </tr>
                <?php 
                include("connection.php");
                $sec="Select * From contact";
                $sonuc=$baglan->query($sec);
                if($sonuc->num_rows){
                    while($cek=$sonuc->fetch_assoc()){
                        echo "
                            <tr>
                                <td>".$cek['id']."</td>
                                <td>".$cek['name']."</td>
                                <td>".$cek['surname']."</td>
                                <td>".$cek['email']."</td>
                                <td>".$cek['topic']."</td>
                                <td>".$cek['message']."</td>
                                <td>".$cek['message_date']."</td>
                            </tr>
                        ";
                    }
                }
                else{
                    echo "Data not found!";
                }
            ?>
            </thead>
        </table>
    </div>
</body>
</html>
