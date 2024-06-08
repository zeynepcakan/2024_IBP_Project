<?php 
if(isset($_GET["id"])) {
    $id=$_GET["id"];

    $vt_sunucu="localhost";
    $vt_user="root";
    $vt_password="";
    $vt_name="record";

    $conn=mysqli_connect($vt_sunucu,$vt_user,$vt_password,$vt_name);

    $sql="DELETE FROM record WHERE id=$id";
    $conn->query($sql);
}
header("location: panel.php");
exit;
?>