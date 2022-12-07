<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_13</title>
</head>
<body>
    <?php
    /*
    “La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las 
    siguientes: el costo de platillo por persona es de $95.00, pero si el número de personas es 
    mayor a 200 pero menor o igual a 300, el costo es de $85.00. Para más de 300 personas el 
    costo por platillo es de $75.00. Se requiere un Programa PHP + HTML que ayude a 
    determinar el presupuesto.
    */
    $per=$_GET["Personas"];
    if ($per > 200 and $per <= 300){
        $presupuesto = $per * 85.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }elseif($per > 300){
        $presupuesto = $per * 75.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }else{
        $presupuesto = $per * 95.00;
        echo "El Coste Total por la cantidad de persona es de : \n".$presupuesto;
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>