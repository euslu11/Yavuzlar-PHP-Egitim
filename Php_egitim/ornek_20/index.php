<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function Saydir(){
    $sayi = 1 ;
    
    while($sayi <= 50){
        echo $sayi . "<br />";
        $sayi++;
    }
}

echo "fonk 1 kez çağrıldı : <br />";
Saydir();
echo "fonk 2 kez çağrıldı : <br />";
Saydir();
echo "fonk 3 kez çağrıldı : <br />";
Saydir();
echo "fonk 4 kez çağrıldı : <br />";
Saydir();
echo "fonk 5 kez çağrıldı : <br />";
Saydir();
echo "fonk 6 kez çağrıldı : <br />";
Saydir();
?>    
</body>
</html>