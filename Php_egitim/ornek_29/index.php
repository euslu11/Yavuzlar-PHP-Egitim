<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $deger1 = 1000;
    $deger2 = 132;
    $deger3 = 26;

    $sonuc = $deger1 % $deger2 % $deger3 ;
    echo $sonuc . "<br />";

    $sondeger = 7 ;
    $sonuc %= $sondeger;
    echo $sonuc;

?>    
</body>
</html>