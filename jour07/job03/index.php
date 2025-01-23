<?php

session_start();

// Initialiser le tableau dans la session s'il n'existe pas encore
if (!isset($_SESSION['contenu'])) {
    $_SESSION['contenu'] = array();
}

if (isset($_POST['valide']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom au tableau de session
    $_SESSION['contenu'][] = $_POST['prenom'];
    var_dump( $_SESSION['contenu']);
}

if (isset($_POST['reset'])) {
    // Réinitialiser le tableau de session
    $_SESSION['contenu'] = array();
}

?>

<form action="index.php" method="post">
    <input type="text" name="prenom" required>
    <input type="submit" value="Valider" name="valide">
    <input type="submit" value="Réinitialiser" name="reset">
</form>