<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $saat = 3 ;

        if(($saat==0)or ($saat==1)or ($saat==2)or ($saat==3)or ($saat==4)or ($saat==5)or ($saat==6)){
            echo "İyi Geceler.";
        }elseif(($saat==7)or ($saat==8)or ($saat==9)or ($saat==10)){
            echo "Günaydın.";
        }elseif(($saat==11)or ($saat==12)or ($saat==13)or ($saat==14)or ($saat==15)or ($saat==16)or ($saat==17) ){
            echo "İyi Günler.";
        }elseif(($saat==18)or ($saat==19)or ($saat==20)or ($saat==21)or ($saat==22)or ($saat==23)){
            echo "İyi Akşamlar." ;
        }else{
            echo "Belirtilen Değer ( {$saat} ) bir saat dilimi değildir. " ;
        } 

    ?>
    
</body>
</html>