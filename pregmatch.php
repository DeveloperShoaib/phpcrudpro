<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string="PHP the wb scripting language of choise";
    
    $exp=preg_match("/PHP/i",$string);
   //$exp=preg_match("/php/i",$string);
    $exp=preg_match("/wb/",$string);

    if($exp){
        echo"match was found";
    }else{
          echo"match was not found";
    }

    ?>
</body>
</html>