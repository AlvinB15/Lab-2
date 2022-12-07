<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_10</title>
</head>
<body>
    <?php 
    /*
    Escriba un programa donde se ingrese el tiempo necesario para un cierto proceso en 
    horas, minutos y segundos. Se calcule el costo total del proceso sabiendo que el costo por 
    segundo es B/.0.25.
    */
    $hora=$_GET["Horas"];
    $minuto=$_GET["Minutos"];
    $segundo=$_GET["Segundos"];
    $total_horas= ($hora * 3600) * 0.25;
    $total_minutos= ($minuto * 60) * 0.25;
    $total_segundos= $segundo * 0.25;
    $total= $total_segundos + $total_minutos + $total_horas;

    echo "El Total de costo por las horas, minutos y segundos trabajados son :\n" . $total;

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>