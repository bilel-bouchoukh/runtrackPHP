<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour10","root","");

$req=$pdo->prepare("SELECT salles.nom as nom_salle, etage.nom as nom_étage 
FROM etage 
INNER JOIN salles ON etage.id = salles.id_etages");

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
                <th>Nom de la salle</th>
                <th>Nom de l'étage</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($res as $array){
                    echo " <tr>
                        <td> {$array['nom_salle']} </td>
                        <td> {$array['nom_étage']} </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>