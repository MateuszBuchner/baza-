<?php
include "polacz_uczen.php";
$klasa = wczytaj("klasa");
$imie_i_nazwisko = wczytaj("imie_i_nazwisko");

$link = wczytaj("link");
$rozwiazanie = wczytaj("rozwiazanie");
$czas_oddania = wczytaj("czas_oddania");
$uwagi_nauczyciela = wczytaj("uwagi_nauczyciela");
$adresIP = wczytaj("adresIP");

$sql = $baza->prepare("UPDATE uczen SET klasa=?, imie_i_nazwisko=?, link=?, rozwiazanie=?, czas_oddania=?, uwagi_nauczyciela=?, adresIP=? WHERE klasa=?;");
if ($sql)
{
        $sql->bind_param("sssssss",  $klasa, $imie_i_nazwisko, $link, $rozwiazanie, $czas_oddania, $uwagi_nauczyciela, $adresIP);
        $sql->execute();
        $sql->close();
}
  else die("Błąd SQL: ". $baza->error);
$baza->close();
?>