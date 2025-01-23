<?php

$cmpt=0;

if (isset($_POST)){
    foreach($_POST as $value)
    {
        $cmpt++;
    }
}

echo $cmpt;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
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