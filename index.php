<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Kalkulator JS</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="main">
  <h2>KALKULATOR SEDERHANA</h2>
  <form name="formAngka">
   <input type="text" name="isiText" autocomplete="off">
  </form>
  <table>
   <tr>
    <td><input type="button" value="C" onclick="hapusAll()"></td>
    <td colspan="2"><input type="button" value="Bcksp" onclick="bcksp()"></td>
    <td><input type="button" value="+" onclick="number('+')"></td>
   </tr>
   <tr>
    <td><input type="button" value="1" onclick="number(1)"></td>
    <td><input type="button" value="2" onclick="number(2)"></td>
    <td><input type="button" value="3" onclick="number(3)"></td>
    <td><input type="button" value="-" onclick="number('-')"></td>
   </tr>
   <tr>
    <td><input type="button" value="4" onclick="number(4)"></td>
    <td><input type="button" value="5" onclick="number(5)"></td>
    <td><input type="button" value="6" onclick="number(6)"></td>
    <td><input type="button" value="*" onclick="number('*')"></td>
   </tr>
   <tr>
    <td><input type="button" value="7" onclick="number(7)"></td>
    <td><input type="button" value="8" onclick="number(8)"></td>
    <td><input type="button" value="9" onclick="number(9)"></td>
    <td><input type="button" value="/" onclick="number('/')"></td>
   </tr>
   <tr>
    <td><input type="button" value="." onclick="number('.')"></td>
    <td><input type="button" value="0" onclick="number(0)"></td>
    <td colspan="2"><input type="button" value="=" onclick="samaDengan()"></td>
   </tr>
  </table>
 </div>
 <script src="js.js"></script>
</body>
</html>