<?php

if (isset($_POST)){
    if ($_POST["username"]==="Jhon" && $_POST["mdp"]==="Rambo")
    /*foreach ($_POST as $cle=="Jhon" => $valeur=="Rambo")*/
    {
        echo"C'est ma guerre";
    }
    else{
        echo "Votre pire cauchemar";
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
    <form action="index.php" method="post">
        <label for="username">Utilisateur : </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp">
        <br>
        <input type="submit">
    </form>
    
</body>
</html>