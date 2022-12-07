<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_5</title>
</head>
<body>
    <?php
    /*Dado el nombre y 5 calificaciones de un alumno; construya un programa en PHP + HTML
    que imprima el nombre del alumno y el promedio de sus calificaciones.*/
    
      $cal1=$_GET["Calificacion1"];
      $cal2=$_GET["Calificacion2"];
      $cal3=$_GET["Calificacion3"];
      $cal4=$_GET["Calificacion4"];
      $cal5=$_GET["Calificacion5"];
      $nomb=$_GET["Nombre"];
        /*Use un sistema de calificacion de 0 a 10 como nota mas baja y alta*/
      $promedio = ($cal1 + $cal2+ $cal3+ $cal4+ $cal5) / 5;
      echo "El nombre del Estudiante es :\n".$nomb;
      echo "<br>El promedio del Estudiante es :\n".$promedio;

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>