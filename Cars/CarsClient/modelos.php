<?php
    require_once 'client.php';
    $marca = $_GET['marca'];
    $modelos = $client->ObtenerModelos($marca);
    $marcas=$client->ObtenerMarcas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		.imagen:hover {-webkit-transform:scale(1.5);transform:scale(1.5);}
		.imagen {overflow:hidden;}
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
<img src="Marcas/<?= strtolower($marcas[$marca]) ?>.png" alt="<?= $marcas[$marca] ?>" />

<h1>Modelos disponibles para la marca "<?=$marcas[$marca]?>"</h1>

<?php
    foreach ($modelos as $modelo => $modelValue) {
?>

    <figure class="imagen">
        <img src="Modelos/<?=$modelos[$modelo]?>.jpg" alt="logo <?= $modelos[$modelo]?>.jpg" />
        <figcaption><?=$modelValue?></figcaption>
     </figure>

   <?php
    }
?>
  
</body>
</html>


