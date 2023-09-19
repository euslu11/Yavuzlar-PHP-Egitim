<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function Islem($baslangic,$bitis){

    while($baslangic<=$bitis){
        yield $baslangic;
        $baslangic++;
    }
    echo "Bu ifade Yazacak mı?";
}

$sonuc = Islem(1, 500000);

foreach($sonuc as $deger){
    echo $deger . " ";
}

echo "<br /><br />";


?>    
</body>
</html>