<?php
    require_once 'client.php';
    $marca = $_GET['marca'];
    $marcaWithoutQuotes = str_replace('\'', '', $marca);
    $modelos = $client->ObtenerModelosPorMarca($marca);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }
        img{
            width:200px;
            height: 100px;
        }
    </style>
</head>
<body>


<h1>Modelos disponibles por marca: <?=$marcaWithoutQuotes?></h1>

<?php
    foreach ($modelos as $modelo => $modelValue) {
?>

    <figure>
        <img src="Marcas/<?=strtolower($marcaWithoutQuotes)?>.png" alt="logo <?= $marcaWithoutQuotes?>" />
        <figcaption><?=$modelValue?></figcaption>
     </figure>

   <?php
    }
?>
  
</body>
</html>


