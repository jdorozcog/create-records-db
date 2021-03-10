<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> DANCER </h1>
    <form method="post" action="save_dancer.php">
      ID: <input type="text" name="id"><br><br>
      Name: <input type="text" name="name"><br><br>
      Age: <input type="text" name="age"><br><br>
      EPS:
      <select name="eps">
        <option value="saludtotal">Salud Total</option>
        <option value="medimas">Medimas</option>
        <option value="sura">Sura</option>
        <option value="nuevaeps">Nueva EPS</option>
        <option value="sanitas">Sanitas</option>
        <option value="saludvida">Salud Vida</option>
      </select>
      <br><br>
      Team:
      <select name="team">
        <option value="1">Semillas</option>
        <option value="2">Project</option>
        <option value="3">Profesional</option>
        <option value="4">Sumo</option>
        <option value="5">Adultos</option>
      </select>
      <br><br>
      <input type="submit" value="Save Dancer"> 
    </form>
</body>
</html>