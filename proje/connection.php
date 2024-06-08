<?php 

$vt_sunucu="localhost";
$vt_user="root";
$vt_password="";
$vt_name="Bookpedia";

$baglan=mysqli_connect($vt_sunucu,$vt_user,$vt_password,$vt_name);
if(!$baglan){
    die("Database connection operation failed!".mysqli_connect_error());
}


$baglan->select_db($vt_name);

$sql = "CREATE TABLE IF NOT EXISTS messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40) NOT NULL,
    surname VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    topic VARCHAR(20) NOT NULL,
    message VARCHAR(250) NOT NULL,
    message_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($baglan->query($sql) === false) {
    die("Error creating table: " . $baglan->error);
}
?>
