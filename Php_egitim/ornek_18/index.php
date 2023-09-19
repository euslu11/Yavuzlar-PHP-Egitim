<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $isim = array("emir","han","uslu","basri","rafet","emre","sakine");

 foreach($isim as $deger){
    if(($deger=="han") or ($deger=="rafet")){
        continue;
    }
    echo $deger ;
 }
 ?>   
</body>
</html>