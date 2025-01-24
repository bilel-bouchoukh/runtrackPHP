<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour10","root","");

$req=$pdo->prepare("SELECT * FROM salles ORDER BY capacite ASC");
$req->execute();
$res= $req->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Capacité</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($res as $array){
                    echo " <tr>
                        <td> {$array['capacite']} </td>
                        <td> {$array['nom']} </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>