<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $deger = 3;

    if($deger==1){
        goto Genel;
    }elseif ($deger==2){
        goto Yönetim;
    }else{
        goto Diger;
    }

    Genel:
    echo "Emirhan uslu";

    Yönetim:
    echo "SiberVatan";


    if(($deger!=1)and ($deger!=2)and ($deger!=3)){
        Diger:
        echo "kişi yok";
    }



?>   
</body>
</html>