<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_7</title>
</head>
<body>

    <?php
    /*
     En un hospital existen tres áreas: Ginecología, Pediatría, Traumatologia. El presupuesto 
    anual del hospital se reparte conforme a la sig. tabla:
    Área Porcentaje del presupuesto
    Ginecología 40%
    Traumatología 30%
    Pediatría 30%
    Generar una tabla html con los resultados
    Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal.
    */
    $presupuesto=$_GET["Presupuesto_Anual"];
    $por_ginecolofia= $presupuesto * 0.40;
    $por_traumatologia= $presupuesto * 0.30;
    $por_pediatria= $presupuesto * 0.30;

    ?>
    <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Departamento</th>
                <th scope="col">Presupuesto_Anual</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Ginecología</th>
                <td><?php
                echo "". number_format($por_ginecolofia,2);?></td>
            </tr>
            <tr>
                <th scope="row">Traumatología</th>
                <td><?php
                echo "". number_format($por_traumatologia,2);?></td>
            </tr>
            <tr>
                <th scope="row">Pediatría</th>
                <td><?php
                echo "". number_format($por_pediatria,2);?></td>
            </tr>
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>