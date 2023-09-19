<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Documents</title>
    <style>
      body{
        background-color: #FFBB5C;
        color: red;
      }
    </style>
    <script type="text/javascript" language="javascript">
      function Deneme (){
        document.getElementById("IslemYap") .innerHTML = "Uslu" ;
      }    
   </script>  
  </head>
  <body>
  <?php 
    echo "Emirhan"  ;
  ?>
  <input type="button" onclick="Deneme();" value="İşlem Yap">
  <div id="IslemYap"></div>    
  </body>
</html>
