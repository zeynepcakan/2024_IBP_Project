
<?php 

$vt_sunucu="localhost";
$vt_user="root";
$vt_password="";
$vt_name="record";

$conn=mysqli_connect($vt_sunucu,$vt_user,$vt_password,$vt_name);
if(!$conn){
    die("Database connection operation failed!".mysqli_connect_error());
}
?>