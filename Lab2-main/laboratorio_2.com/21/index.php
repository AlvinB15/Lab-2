<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_21</title>
    
</head>
<body>
    
    <?php
    /*Crear un archivo que con valores generados al azar con 10 filas por la función rand() de php. 
    Los gráficos se deben mostrar con progress bar de html5 */

    ?>

    <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Valor</th>
                <th scope="col">Grafico Progress bar</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=1; $x<=10; $x++){?>
            <tr>
                <th scope="row"><?php echo $x ?></th>
                <td><?php echo "".$valor1=rand(45,100); ?></td>
                <td><div class="progress"> 
                <div class="progress-bar <?php if($valor1<61) 
                    echo "bg-secondary";
                if($valor1>=61 and $valor1<=70) 
                    echo "bg-danger";
                if($valor1>=71 and $valor1<=80) 
                    echo "bg-warning"; 
                if($valor1>=81 and $valor1<=90) 
                    echo "bg-info"; 
                if($valor1>90) 
                    echo "bg-success"; ?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo "".$valor1?>%;" aria-valuenow="<?php echo "".$valor1?>" aria-valuemin="0" aria-valuemax="100"><?php echo "".$valor1?>%</div>
                </div></td>
            </tr>
            
        <?php } ?>
            

        </tbody>
    </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>