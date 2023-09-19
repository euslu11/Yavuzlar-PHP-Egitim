<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$deger = "uslu";

if($deger=="emirhan"){
    function Yaz (){
        echo "S.A. Emirhan";
    }
}elseif($deger=="emre"){
    function Yaz(){
        echo "S.A. Emre";
    }
}else{
    function Yaz(){
        echo "S.A kimsin?";
    }
}
Yaz();
?>    
</body>
</html>