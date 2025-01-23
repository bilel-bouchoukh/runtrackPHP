<style>
    tr,td,th{
        border: 2px solid black;
    }
</style>

<?php

$myBool=TRUE;
$int=5;
$str="LaPlateforme";
$float=5.3;

?>

<table>
<tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
</tr>

<tr>
    <td>Booleen</td>
    <td>myBool</td>
    <td> <?php echo($myBool) ?></td>
</tr>

<tr>
    <td>entier</td>
    <td>int</td>
    <td> <?php echo($int) ?> </td>
</tr>

<tr>
    <td>string</td>
    <td>str</td>
    <td> <?php echo($str) ?> </td>
</tr>

<tr>
    <td>float</td>
    <td>float</td>
    <td> <?php echo($float) ?> </td>
</tr>
</table>