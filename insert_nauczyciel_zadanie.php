<?php
include "polacz_nauczyciel_zadanie.php";
$data_dzien = wczytaj("data_dzien");
$klasa = wczytaj("klasa");
$przedmiot = wczytaj("przedmiot");
$zajecia = wczytaj("zajecia");
$zadanie_domowe = wczytaj("zadanie_domowe");
$liczba_uczestnikow = wczytaj("liczba_uczestnikow");

$sql = $baza->prepare("INSERT INTO zadania_zdalne VALUES (?, ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("ssssss", $data_dzien, $klasa, $przedmiot, $zajecia, $zadanie_domowe, $liczba_uczestnikow);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
?>