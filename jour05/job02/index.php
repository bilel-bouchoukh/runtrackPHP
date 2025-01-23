<?php

function bonjour($jour){
    if ($jour === TRUE){
        echo "Bonjour";
    }
    else{
        echo "Bonsoir";
    }

}


$day = FALSE;
bonjour($day);


?>
