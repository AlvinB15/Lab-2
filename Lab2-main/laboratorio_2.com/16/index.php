<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_16</title>
</head>
<body>
    <?php
    /* 
    Crear un programa en PHP + HTML que lea un valor N y que imprima un triángulo de 
    asteriscos, como se muestra a continuación, si el valor leído es 5:
    */
    $valor=$_GET["ValorN"];
    for ($x=1;$x<=$valor;$x++){
        for ($j=1;$j<=$x;$j++){
            echo "* ";
        }
        echo "<br>\n ";
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>