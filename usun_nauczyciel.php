<?php
include "polacz_nauczyciel.php";
$nr = wczytaj("nr"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM nauczyciel WHERE klasa= ?;" ))
{
 $sql->bind_param( "i", $nr);
 $sql->execute();
 $sql->close();
}
$baza->close();
?>