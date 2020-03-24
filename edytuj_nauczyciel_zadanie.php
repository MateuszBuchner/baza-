<?php
include "polacz_nauczyciel_zadanie.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM zadania_zdalne WHERE klasa = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result( $data_dzien, $klasa, $przedmiot, $zajecia, $zadanie_domowe, $liczba_uczestnikow);
  if (!$sql->fetch())  die("Blad!!! Brak rekordu do edycji w bazie!!! Liczba rekodow:".$sql->num_rows);


 /////////////////////// HTML w PHP
 echo '
 <html>
  <head>
   <meta charset="utf-8">
   <title>Edycja obiektu</title>
  </head>
  <body>
   <h1>Edycja rekordu z bazy</h1>
   <form method="get" action="update_uczen.php">
    <table border="0">

    <tr><td>data_dzien</td><td><input name="data_dzien" value="'.$data_dzien.'"></td></tr>
      <tr><td>klasa</td><td><input name="klasa" value="'.$klasa.'"></td></tr>
      <tr><td>przedmiot</td><td><input name="przedmiot" value="'.$przedmiot.'"></td></tr>
      <tr><td>zajecia</td><td><input name="zajecia" value="'.$zajecia.'"></td></tr>
      <tr><td>zadanie_domowe</td><td><input name="zadanie_domowe" value="'.$zadanie_domowe.'"></td></tr>
      <tr><td>liczba_uczestnikow</td><td><input name="liczba_uczestnikow" value="'.$liczba_uczestnikow.'"></td></tr>

      <tr><td colspan="2"><input type="submit" value="zapisz zmiany"></td></tr>
    </table>
   </form>
  </body>
 </html>
 ';
 $sql->close();
 }
$baza->close();
?>