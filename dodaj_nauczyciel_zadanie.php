<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
  <script>
function goBack() {
  window.history.back();
}
</script>
 </head>
 <body>
  <h1>Zadania zdalne</h1>
  <form method="get" action="insert_nauczyciel_zadanie.php">
   <table border="0">
   <tr><td>data_dzien</td><td><input name="data_dzien"></td></tr>
   <tr><td>klasa</td><td><input name="klasa"></td></tr>
   <tr><td>przedmiot</td><td><input name="przedmiot"></td></tr>
   <tr><td>zajecia</td><td><input name="zajecia"></td></tr>
   <tr><td>zadanie_domowe</td><td><input name="zadanie_domowe"></td></tr>
   <tr><td>liczba_uczestnikow</td><td><input name="liczba_uczestnikow"></td></tr>

    <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>

   </table>
  </form>
  <button onclick="goBack()">Go Back</button>
 </body>
</html>

