<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $saat = 20;

        switch($saat){
            case ($saat >=  0) and ($saat <=  6):
                echo "İyi Geceler";
        break;
            case ($saat > 6) and ($saat <= 9):
                echo "Günaydın";
        break;
             case ($saat > 9) and ($saat <=  17):
            echo "İyi Günler";
        break;
            case ($saat > 17) and ($saat <= 23):
            echo "iyi Akşamlar";
         break;
         default:
            echo "Girilen Değer Geçersizdir.";

        }

    ?>
</body>
</html>