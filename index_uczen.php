<html>
 <head>
  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
 <body>
 <h1>Uczen</h1>
  <table border="1">
   <tr>
     <th>klasa</th><th>Temat</th><th>link</th><th>rozwiazani</th><th>czas_oddania</th><th>uwagi_nauczyciela</th><th>adresIP</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz_uczen.php" ;
if ($sql =  $baza->prepare("SELECT * FROM uczen ORDER BY klasa,imie_i_nazwisko"))
{
        $sql->execute();
        $sql->bind_result( $klasa, $imie_i_nazwisko, $link, $rozwiazanie, $czas_oddania, $uwagi_nauczyciela, $adresIP);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$klasa</td>
                        <td>$imie_i_nazwisko</td>
                        <td>$link</td>
                        <td>$rozwiazanie</td>
                        <td>$czas_oddania</td>
                        <td>$uwagi_nauczyciela</td>
                        <td>$adresIP</td>
                        <td><a href=\"edytuj_uczen.php?nr=$klasa\">Edytuj</a></td>
                        <td><a href=\"usun_uczen.php?nr=$klasa\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
 }
else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin: ". $baza->error );

 $baza->close();

 
?>
  </table>
  <a href="dodaj_uczen.php">Dodawanie nowego</a>
 </body>
</html>