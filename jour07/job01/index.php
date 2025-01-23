<?php

session_start(); 

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++; 

if(isset($_POST["reset"])){
    session_destroy();
}
?>


<form action="index.php" method="post">
    <input type="submit" value="reset" name="reset">
</form>

<p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>