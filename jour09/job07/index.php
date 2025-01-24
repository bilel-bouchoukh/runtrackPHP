<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour10","root","");

$req=$pdo->prepare("SELECT SUM(superficie) as superficie_total FROM etage HAVING SUM(superficie)");
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
                <th>superficie Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($res as $array){
                    echo " <tr>
                        <td> {$array['superficie_total']} </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>