<?php 
/*
if(isset($_POST['index.php'])){
    if ("style1"){
        echo "<link rel='stylesheet' href='style1.css'>";
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
    <label for="liste">Choisir style:</label>

    <select name="liste" id="liste">
    <option value="">--Choisir un style--</option>
    <option name="style1">style1</option>
    <option name="style2">style2</option>
    <option name="style3">style3</option>
    </select>

    <input type="submit" value="Envoyer" />


</form>
    
</body>
</html>
*/
?>

<?php
// Déterminer le style sélectionné
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';

// Charger le fichier CSS correspondant
$styleFile = "$selectedStyle.css";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec styles dynamiques</title>
    <!-- Inclure le style sélectionné -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($styleFile); ?>">
</head>
<body>
    <form method="POST">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?php echo $selectedStyle === 'style1' ? 'selected' : ''; ?>>Style 1</option>
            <option value="style2" <?php echo $selectedStyle === 'style2' ? 'selected' : ''; ?>>Style 2</option>
            <option value="style3" <?php echo $selectedStyle === 'style3' ? 'selected' : ''; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>
