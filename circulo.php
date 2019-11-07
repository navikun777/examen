

<?php
//metodos
$radio=isset($_POST['radio'])?$_POST['radio']:null;
$base;
$altura;
$resultado;
function AreaCirc()
{
    global $radio;
    $resultado=(3.1416*$radio)*$radio;
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
<form action="circulo" method="POST">
    <input type="text" name="radio" id="">
    <input type="submit" value="calcular">
    </form> 
    <?php
    AreaCirc();
   // echo "el resultado es ".$resultado.'<br>';
       //echo 'Tu nombre '. $nombre. '<br>';
       echo 'el resultado es '.$resultado.'<br>';
       ?>
</body>
</html>



 