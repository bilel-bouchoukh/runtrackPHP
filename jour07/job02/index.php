<?php

/*setcookie('TestCookie', 'Contenu de mon cookie', time()+3600);

echo $_COOKIE["TestCookie"];*/

if(!isset($_COOKIE['count'])){
    $cookie = 1 ;
    setcookie("count", $cookie);

}
else{
    $cookie = $_COOKIE['count']+1;
    setcookie("count", $cookie);
}

if (isset($_POST['reset'])){
    $cookie = 1;
}

?>

<form action="index.php" method="post">
    <input type="submit" value ="reset" name="reset">
    <p>Nombre de visites : <?php echo $cookie; ?></p>
</form>