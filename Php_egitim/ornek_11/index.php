<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $isimler = array("Emir", "Han", array("Uslu", "Siber", "Vatan", "Bartın"),"Bilgisayar", "Cyber", "Security" ) ;

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $Aanahtar = key($isimler[2]);
    echo "Anahtar : " . $Aanahtar . "<br><br>" ;
    $Aeleman = current($isimler[2]);
    echo "Eleman : "  . $Aeleman . "<br><br>" ;

    next($isimler[2]);

    $Banahtar = key($isimler[2]);
    echo "Anahtar : " . $Banahtar . "<br><br>" ;
    $Beleman = current($isimler[2]);
    echo "Eleman : "  . $Beleman . "<br><br>" ;

    next($isimler[2]) ;

    $Canahtar = key($isimler[2]);
    echo "Anahtar : " . $Canahtar . "<br><br>" ;
    $Celeman = current($isimler[2]);
    echo "Eleman : "  . $Celeman . "<br><br>" ;

  ?>
</body>
</html>