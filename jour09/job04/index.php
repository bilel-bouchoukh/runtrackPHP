<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour10","root","");

$req=$pdo->prepare("SELECT prenom, nom, naissance, sexe FROM étudiants WHERE prenom LIKE 'T%' ");
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
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($res as $array){
                    echo " <tr>
                        <td> {$array['prenom']} </td>
                        <td> {$array['nom']} </td>
                        <td> {$array['naissance']} </td>
                        <td> {$array['sexe']} </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>