<html>
 <head>
  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
 <body>
 <h1>Nauczuciel</h1>
  <table border="1">
   <tr>
     <th>klasa</th><th>Temat</th><th>Tresc</th><th>data i godzina</th><th>data i godzina oddania</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz_nauczyciel.php";
if ($sql =  $baza->prepare("SELECT * FROM nauczyciel ORDER BY klasa,temat"))
{
        $sql->execute();
        $sql->bind_result( $klasa, $temat, $tresc, $data_i_godzina, $data_i_godzina_oddania);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$klasa</td>
                        <td>$temat</td>
                        <td>$tresc</td>
                        <td>$data_i_godzina</td>
                        <td>$data_i_godzina_oddania</td>
                        <td><a href=\"edytuj_nauczyciel.php?nr=$klasa\">Edytuj</a></td>
                        <td><a href=\"usun_nauczyciel.php?nr=$klasa\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
 }
else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin: ". $baza->error );

 $baza->close();
?>
  </table>
  <a href="dodaj_nauczyciel.php">Dodawanie nowego</a><br>
  <a href="index_nauczyciel_zadanie.php">Zadania domowe</a>
 </body>
</html>