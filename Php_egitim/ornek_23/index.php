<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

 function ParaBirimi($birim, $tutar){
    if($birim=="TL"){
        $kur = 1;       
    }elseif($birim=="dolar"){
        $kur = 4.0669;
    }elseif($birim=="euro"){
        $kur = 4.9123;
    }else{
        $kur = 0;
    }
    return Hesapla($birim,$kur,$tutar);
 }

function Hesapla($birimb,$kurb,$tutarb){
    $sonuc = $kurb*$tutarb;
    echo $tutarb . "Tutarlı" . $birimb . "TL değeri : " . $sonuc . "TL <br />Kur" . $kurb;
}    

ParaBirimi("Euro",82);
 


 ?>   
</body>
</html>