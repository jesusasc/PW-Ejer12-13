<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
  <form action="ejercicio13-1.php" method="get">
    <p>
      Quiero convertir:
      <input type="number" name="numero" size="40">
      <select name="inicial">
        <optgroup label="Sistema métrico">
          <option value="km">km</option>
          <option value="m">m</option>
          <option value="cm">cm</option>
        </optgroup>
        <optgroup label="Sistema anglosajón">
          <option value="mi">milla</option>
          <option value="yd">yarda</option>
          <option value="ft">pies</option>
          <option value="in">pulgadas</option>
         </optgroup>
      </select>
      a
      <select name="final">
        <optgroup label="Sistema métrico">
          <option value="km">km</option>
          <option value="m">m</option>
          <option value="cm">cm</option>
        </optgroup>
        <optgroup label="Sistema anglosajón">
          <option value="mi">milla</option>
          <option value="yd">yarda</option>
          <option value="ft">pies</option>
          <option value="in">pulgadas</option>
         </optgroup>
      </select>
    </p>

    <p>
      <input type="submit" value="Convertir">
      <input type="reset" value="Borrar">
    </p>
  </form>

  </footer>
</body>
</html>


</body>
</html>