<?php
    //1 Conectar a BD 
    $host = "localhost";
    $dbname = "dance_academy2_bd";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //2. Construir la sentencia SQL
    $sql = "SELECT id,name FROM team";
    //3.Preparar la sentencia SQL 
    $q = $cnx->prepare($sql);
    //4. Ejecutar la sentencia SQL
    $resul= $q->execute();
    $team = $q->fetchAll();

    //2. Construir la sentencia SQL
    $sql = "SELECT id,name FROM dancer";
    //3.Preparar la sentencia SQL 
    $q = $cnx->prepare($sql);
    //4. Ejecutar la sentencia SQL
    $resul= $q->execute();
    $dancer = $q->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> SCHEDULE </h1>
    <form method="post" action="save_schedule.php">
    Dancer
      <select name="dancer" id="">
  <?php
        for ($i=0; $i < count($dancer); $i++) { 
  ?>
        <option value="<?php echo $dancer[$i]["id"]?>">
          <?php echo $dancer[$i]["name"]?>
        </option>
  <?php 
        }
  ?>
      </select>
  <br><br>

      Team
      <select name="team" id="">
  <?php
        for ($i=0; $i < count($team); $i++) { 
  ?>
        <option value="<?php echo $team[$i]["id"]?>">
          <?php echo $team[$i]["name"]?>
        </option>
  <?php 
        }
  ?>
      </select>
      <br><br>
      Day: <input type="text" name="day" placeholder="Lunes"><br><br>
      Time: <input type="text" name="time" placeholder="12:00 PM"><br><br>
      <input type="submit" value="Save Schedule"> 
    </form>
      
    
</body>
</html>