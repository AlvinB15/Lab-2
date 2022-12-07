<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_18</title>
</head>
<body>
    <?php
    /*
    .Crear un programa en PHP + HTML que muestre los números del 1 al 100, y también 
    muestre el número cifrado con la función md5 o cualquier otra función de cifrado. Además 
    se muestre un vínculo hacia una url que muestre el valor cifrado. 
    */
    
    ?>
    <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Encriptado</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=1; $x<=100; $x++){?>
            <tr>
                <th scope="row"><?php echo $x ?></th>
                <td> <?php echo "". md5($x); ?> </td>
                <td><a href="indexcifrado.php?valor=<?php echo $x ?>"><button type="button" class="btn btn-dark">Ver</button></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>