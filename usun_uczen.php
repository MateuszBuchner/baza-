<?php
include "polacz_uczen.php";
$nr = wczytaj("nr"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM uczen WHERE klasa= ?;" ))
{
 $sql->bind_param( "i", $nr);
 $sql->execute();
 $sql->close();
}
$baza->close();
?>