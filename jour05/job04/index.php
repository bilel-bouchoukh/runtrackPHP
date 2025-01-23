<?php

function calcule($nbr , $operation , $nbr2){
    if ($operation === "+"){
        return $nbr + $nbr2;
    }
    elseif ($operation ==="-"){
        return $nbr -$nbr2;
    }
    elseif ($operation === "*"){
        return $nbr * $nbr2;
    }
    elseif ($operation ==="/"){
        return $nbr / $nbr2;
    }
    elseif ($operation ==="%"){
        return $nbr%$nbr2;
    }
}

$chiffre = 10;
$chiffre2=5;
$signe="+";

echo calcule($chiffre, $signe, $chiffre2);

?>