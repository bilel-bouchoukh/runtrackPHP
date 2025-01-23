<?php

for ($i=0 ; $i<=100 ;$i++){
    if  ($i==0 || $i==20){
        echo "<italic><u>$i</u></italic><br>";
    }
    elseif ($i>=25 && $i<=50){   
        echo "<underline><u>$i</u></underline><br>";
    }
    elseif ($i==42){
        echo "La Plateforme_"."<br>";
    }
    else{
        echo "$i <br>";
    }
}


?>