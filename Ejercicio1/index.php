<?php
session_start();



$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];

if($name == null || $surname == null || $age == null){
    echo "No ingresó todos los datos";
    die();
}

echo "Los datos registrados con POST son los siguientes: ". PHP_EOL;
echo PHP_EOL;
echo "Nombre : ". $name. PHP_EOL;
echo PHP_EOL;
echo "Apellido : ". $surname. PHP_EOL;
echo PHP_EOL;
echo "Edad : ". $age. PHP_EOL;

$_SESSION["name"] = $name;
$_SESSION["surname"] = $surname;
$_SESSION["age"] = $age;

echo "Los datos guardados con session son: ";
echo PHP_EOL;
echo "Nombre : ".$_SESSION["name"];
echo PHP_EOL;
echo "Apellido : ". $_SESSION["surname"];
echo PHP_EOL;
echo "Edad : ".$_SESSION["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>
