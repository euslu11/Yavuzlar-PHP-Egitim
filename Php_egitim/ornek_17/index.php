<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$renkler = array("Gs" => "Sarı-Kırmızı", "FB" => "Sarı-Lacivert", "BJK" => "Siyah-Beyaz");
foreach($renkler as $anahtar => $icerik){
    echo $anahtar . ":" . $icerik . "<br/>";
}
?>  
</body>
</html>