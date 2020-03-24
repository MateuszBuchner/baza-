<html>
 <head>
  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
 <body>
 <h1>Nauczuciel</h1>
  <table border="1">
   <tr>
     <th>data_dzien</th><th>klasa</th><th>przedmiot</th><th>forma zajęć zdalnych (np. wiadomość librus, platforma librus, platforma Operon, messenger itp.)</th><th>Zadanie domowe T/N</th><th>Liczba uczestników</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz_nauczyciel.php";
if ($sql =  $baza->prepare("SELECT * FROM zadania_zdalne ORDER BY data_dzien,klasa"))
{
        $sql->execute();
        $sql->bind_result( $data_dzien, $klasa, $przedmiot, $zajecia, $zadanie_domowe, $liczba_uczestnikow);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$data_dzien</td>
                        <td>$klasa</td>
                        <td>$przedmiot</td>
                        <td>$zajecia</td>
                        <td>$zadanie_domowe</td>
                        <td>$liczba_uczestnikow</td>
                        <td><a href=\"edytuj_nauczyciel_zadanie.php?nr=$data_dzien\">Edytuj</a></td>
                        <td><a href=\"usun_nauczyciel_zadanie.php?nr=$data_dzien\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
 }
else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin: ". $baza->error );

 $baza->close();
?>
  </table>
  <a href="dodaj_nauczyciel_zadanie.php">Dodaj zadanie</a>
 </body>
</html>