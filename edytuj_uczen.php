<?php
include "polacz_uczen.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM uczen WHERE klasa = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($klasa, $imie_i_nazwisko, $link, $rozwiazanie, $czas_oddania, $uwagi_nauczyciela, $adresIP);
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

      <tr><td>klasa</td><td><input name="klasa" value="'.$klasa.'"></td></tr>
      <tr><td>imie_i_nazwisko</td><td><input name="imie_i_nazwisko" value="'.$imie_i_nazwisko.'"></td></tr>
      <tr><td>link</td><td><input name="link" value="'.$link.'"></td></tr>
      <tr><td>rozwiazanie</td><td><input name="rozwiazanie" value="'.$rozwiazanie.'"></td></tr>
      <tr><td>data_i_godzin_oddania</td><td><input name="czas_oddania" value="'.$czas_oddania.'"></td></tr>
      <tr><td>uwagi_ucznia</td><td><input name="uwagi_nauczyciela" value="'.$uwagi_nauczyciela.'"></td></tr>
      <tr><td>adresIP</td><td><input name="adresIP" value="'.$adresIP.'"></td></tr>

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