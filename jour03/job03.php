<?php

$str="I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ['a'=>true , 'e'=>true, 'i'=>true, 'o'=>true, 'u'=>true, 'A'=>true, 'E'=>true, 'I'=>true, 'O'=>true, 'U'=>true];
$i=0;

while(isset($str[$i])){
    if(isset($voyelles[$str[$i]])){
        echo $str[$i];
    }
    $i++;
}

?>