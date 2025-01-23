<?php

if ($_GET){
    if ($_GET["nombre"]%2===0){
        echo "Nombre Pair";
    }
    else{
        echo "Nombre impair";
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nombre">Nombre : </label>
        <input type="number" name="nombre" id="nombre">
        <br>
        <input type="submit">
    </form>
    
</body>
</html>