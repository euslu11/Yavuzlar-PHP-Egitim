<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $deger = 83.88;
    $ilkverituru = gettype($deger);

    echo "içeriğin ilk hali :" . $deger . "<br />" ;
    echo "İçeriğin ilk halinin veri türü" . $ilkverituru . "<br /><br />" ;

    settype($deger, "int");

    $sonverituru = gettype($deger);

    echo "içeriğin son hali :" . $deger . "<br />" ;
    echo "İçeriğin son halinin veri türü" . $sonverituru . "<br /><br />" ;


?>    
</body>
</html>