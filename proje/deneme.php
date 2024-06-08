<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // döngüler
    $dizi = array("Merve","Omer","Metmet","Ayse","Musa","Kader");
    for($i=0;$i<count($dizi);$i++){
     //   echo $i."<br>"; // i'yi yazdırır
        echo $dizi[$i]."<br>"; // elemanları sırayla yazdırır.
    }
    ?>
    <select name="" id="">
        <?php 
        for($x=1961; $x<=2024; $i++){
            echo '<option>'.$x.'</option>';
        }
        
        ?>
    </select>
</body>
</html>