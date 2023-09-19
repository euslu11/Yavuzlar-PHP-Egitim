<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function IslemYap($isim, $soyisim, $dtarih, $yas, $sehir, $meslek, $cinsiyet){
    $gelenisim            = $isim;
    $gelensoyisim         = $soyisim;
    $gelendtarih          = $dtarih;
    $gelenyas             = $yas;
    $gelensehir           = $sehir;
    $gelenmeslek          = $meslek;
    $gelencinsiyet        = $cinsiyet;

    $kisikartı     = "Adı:" . $gelenisim . "<br />" . "Soyadı:" . $gelensoyisim . "<br />" . "Doğum Tarihi:" . $gelendtarih . "<br />" . "Yaş:" . $gelenyas . "<br />" . "Şehir:" . $gelensehir . "<br />" . "Meslek:" . $gelenmeslek . "<br />" . "Cnisiyet:" . $gelencinsiyet ;
    return $kisikartı;
    }

    $islem1 = IslemYap("Emirhan","Uslu","30.09.2002",21,"Ankara","Öğrenci","Erkek");
    $islem2 = IslemYap("Emre","Uslu","17.04.1998",25,"Ankara","Amele","Erkek");
    $islem3 = IslemYap("Sakine","Uslu","30.09.1975",48,"Ankara","Ev Hanımı","Kadın");

    echo $islem2 . "<br/><br/>";
    echo $islem1 . "<br/><br/>";
    echo $islem3 . "<br/><br/>";



?>    
</body>
</html>
