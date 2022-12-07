<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_9</title>
</head>
<body>
    
    <?php 
    /*Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de 
    clase.
    Por ejemplo, si hay 25 alumnos y 20 alumnas la salida debe ser:
    Porcentaje de alumnos: (25/45)*100 = 55.55555%
    Porcentaje de alumnas: (20/45)*100 = 44.44444%
    Generar una tabla html con los resultados
     */
    $alumnos=$_GET["Alumnos"];
    $alumnas=$_GET["Alumnas"];
    $total_estudiantes=$alumnas+$alumnos;
    $porcentaje_alumnos=($alumnos / $total_estudiantes)*100;
    $porcentaje_alumnas=($alumnas / $total_estudiantes)*100;
    ?>

    <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Estudiante</th>
                <th scope="col">Porcentaje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Alumnos</th>
                <td><?php
                echo "%".number_format($porcentaje_alumnos,2);?></td>
            </tr>
            <tr>
                <th scope="row">Alumnas</th>
                <td><?php
                echo "%".number_format($porcentaje_alumnas,2);?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>