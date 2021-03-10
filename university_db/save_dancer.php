<?php
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $eps = $_REQUEST["eps"];
    $team = $_REQUEST["team"];

    //1 Conectar a BD 
    $host = "localhost";
    $dbname = "dance_academy2_bd";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //2. Construir la sentencia SQL
    $sql = "INSERT INTO dancer (id,name,age,eps,id_team) VALUES ($id, '$name','$age','$eps','$team')";
    
    //3.Preparar la sentencia SQL 
    $q = $cnx->prepare($sql);

    //4. Ejecutar la sentencia SQL
    $resul= $q->execute();

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
    <h1> DANCER </h1>
    <form action="save_dancer.php" method="POST">
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
      <input type="submit" value="Save Student"> 
    </form>

    <h1>DANCER SAVED SUCCESFULLY!!</h1>
        <h2>ID: <?php echo $id ?>
        <h2>NAME: <?php echo $name ?>
        <h2>AGE: <?php echo $age ?>
        <h2>EPS: <?php switch ($eps) {
                case 'saludtotal':
                    echo "SALUD TOTAL";
                    break;
                case 'medimas':
                    echo "Medimás";
                    break;
                case 'sura':
                    echo "SURA";
                    break;
                case 'saludtotal':
                    echo "SALUD TOTAL";
                    break;
                case 'nuevaeps':
                    echo "Nueva EPS";
                    break;
                case 'sanitas':
                    echo "SANITAS";
                    break;
                case 'saludvida':
                    echo "Salud Vida";
                    break;
        } ?></h2>
        <h2><?php switch ($team) {
                case '1':
                    echo "Now you're part of Semillas team.";
                    break;
                case '2':
                    echo "Now you're part of Project team.";
                    break;
                case '3':
                    echo "Now you're part of Profesional team.";
                    break;
                case '4':
                    echo "Now you're part of Sumo team.";
                    break;
                case '5':
                    echo "Now you're part of Adultos team.";
                    break;
        } ?></h2>
        <br>
        <href>  </h3>
        <a href="schedule/create_schedule.php">CREATE SCHEDULE</a>
        <br><br>

</body>
</html>
