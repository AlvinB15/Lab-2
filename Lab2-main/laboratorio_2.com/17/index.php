<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_17</title>
</head>
<body>
    
    <?php
    /*
    Crear una aplicación en PHP+HTML que al entrar me muestre en una tabla los números del 
    0 al 12, al lado un botón que tenga un vínculo a una segunda pantalla. Al dar clic en el 
    botón me debe mostrar en otro HTML la tabla de multiplicar de ese número.
    */
    $valor=5;
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Tabla de multiplicar</th>
            <th scope="col">Ver resultado</th>
        </tr>
    </thead>
    <tbody>
        <?php for($x=0; $x<=12; $x++){?> 
        <tr>
            <th scope="row"><?php echo $x ?></th>
            <td><a href="indextabla.php?numero=<?php echo $x ?>"><button type="button" class="btn btn-dark">Ver Tabla</button></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>