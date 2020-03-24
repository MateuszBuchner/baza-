<?php
include "polacz_nauczyciel_zadanie.php";
$nr = wczytaj("nr"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM zadania_zdalne WHERE data_dzien = ?;" ))
{
 $sql->bind_param( "i", $nr);
 $sql->execute();
 $sql->close();
}
$baza->close();
?>