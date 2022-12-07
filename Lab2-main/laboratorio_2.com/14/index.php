<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_14</title>
</head>
<body>
    <?php
    /*
    Se les dará un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les 
    dará $100; si tienen 2 años, $200, y así sucesivamente hasta los 5 años. Para los que 
    tengan más de 5, el bono será de $1000. Realice un Programa en PHP + HTML que 
    permita determinar el bono que recibirá un trabajador
    */
    $año=$_GET["Antiguedad"];
    if($año <= 5){
        $bono=$año*100;
        echo "El total de Bono por antiguedad sera de B/$".$bono; 
    }elseif($año > 5){
        $bono=($año-5)*1000;
        echo "El total de Bono por antiguedad sera de B/$".$bono; 
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>