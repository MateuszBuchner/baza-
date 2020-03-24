<?php
include "polacz_nauczyciel_zadanie.php";
$data_dzien = wczytaj("data_dzien");
$klasa = wczytaj("klasa");
$przedmiot = wczytaj("przedmiot");
$zajecia = wczytaj("zajecia");
$zadanie_domowe = wczytaj("zadanie_domowe");
$liczba_uczestnikow = wczytaj("liczba_uczestnikow");

$sql = $baza->prepare("UPDATE zadania_zdalne SET data_dzien=?, klasa=?, przedmiot=?, zajecia=?, zadanie_domowe=?, liczba_uczniow=? WHERE klasa=?;");
if ($sql)
{
  $sql->bind_result( $data_dzien, $klasa, $przedmiot, $zajecia, $zadanie_domowe, $liczba_uczestnikow);
  $sql->execute();
    $sql->close();
}
  else die("Błąd SQL: ". $baza->error);
$baza->close();
?>