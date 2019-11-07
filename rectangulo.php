<?php
//metodos
$base=isset($_POST['base'])?$_POST['base']:null; //cachar y debe ir el mismo nombre que el input
$altura=isset($_POST['altura'])?$_POST['altura']:null;
$base;
$altura;
$resultado;
function AreaRect()
{
    global $base,$altura;
    $resultado=$base*$altura;
    echo 'el resultado es '.$resultado.'<br>';
    //echo "LA SUMA: ".$resultado.'<br>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rectangulo</title>
</head>
<body>
<form action="rectangulo" method="POST">
    <input type="text" name="base" id="">
    <input type="text" name="altura" id="">
    <input type="submit" value="calcular">
    </form> 
    <?php
    AreaRect();
   // echo "el resultado es ".$resultado.'<br>';
       //echo 'Tu nombre '. $nombre. '<br>';
       echo 'el resultado es '.$resultado.'<br>';
       ?>
</body>
</html>



 