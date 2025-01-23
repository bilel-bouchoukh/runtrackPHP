<?php

if (isset($_GET)){
    echo "<table>";
        foreach ($_GET as $cle => $valeur) {
            echo "<tr>";
            echo "<td>" . $cle . "</td>";
            echo "<td>" . $valeur . "</td>";
            echo "</tr>";
        }

        echo "</table>";
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
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <br>
        <input type="submit">
    </form>
    
</body>
</html>