<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_8</title>
</head>
<body>
    
    <?php 
    /*
    Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas 
    invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte con respecto a 
    la cantidad total invertida
     */
    $invertir1=$_GET["Inversion1"];
    $invertir2=$_GET["Inversion2"];
    $invertir3=$_GET["Inversion3"];
    $total_inversion= $invertir1 + $invertir2 + $invertir3;
    $porcentaje_inversion1= ($invertir1 / $total_inversion) * 100;
    $porcentaje_inversion2= ($invertir2 / $total_inversion) * 100;
    $porcentaje_inversion3= ($invertir3 / $total_inversion) * 100;

    ?>
    <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Inversiones</th>
                <th scope="col">Porcentaje_Inversion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Inversion1</th>
                <td><?php
                echo "%".$porcentaje_inversion1;?></td>
            </tr>
            <tr>
                <th scope="row">Inversion2</th>
                <td><?php
                echo "%".$porcentaje_inversion2;?></td>
            </tr>
            <tr>
                <th scope="row">Inversion3</th>
                <td><?php
                echo "%".$porcentaje_inversion3;?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>