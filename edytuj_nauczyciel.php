<?php
include "polacz_nauczyciel.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM nauczyciel WHERE klasa = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($klasa, $temat, $tresc, $data_i_godzina, $data_i_godzina_oddania);
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
   <form method="get" action="update_nauczyciel.php">
    <table border="0">

      <tr><td>klasa</td><td><input name="klasa" value="'.$klasa.'"></td></tr>
      <tr><td>temat</td><td><input name="temat" value="'.$temat.'"></td></tr>
      <tr><td>tresc</td><td><input name="tresc" value="'.$tresc.'"></td></tr>
      <tr><td>data_i_godzina</td><td><input name="data_i_godzina" value="'.$data_i_godzina.'"></td></tr>
      <tr><td>data_i_godzin_oddania</td><td><input name="data_i_godzina_oddania" value="'.$data_i_godzina_oddania.'"></td></tr>

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