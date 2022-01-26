<!DOCTYPE HTML>
<html>
	<head>
		<title>Concesionario Multimarca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="CSS/style.css" />
	</head>
	<body id="top">
		<section id="banner" data-video="Banner/banner">
		<div class="inner">
		<header>		
			<h1>Concesionario Multimarca</h1>
			<p>Somos un Concesionario Multimarca Líder en su sector.</p><p>Calidad y Precio garantizado</p>							
		</header>
			<ul class="icons">
				<li><a href="#main">V</a></li>
			</ul>
		</div>
		</section>

		<div id="main">
			<div class="inner">
				<div class="thumbnails">
<?php
require_once 'client.php';

$marcas=$client->ObtenerMarcas();
$url=$client->ObtenerMarcasUrl();

foreach ($marcas as $idmarca => $valorMarca) {	
?>
				<div class="box">
					<a href="<?=$url[$valorMarca]?>" class="image fit" data-poptrox="youtube,600x400" title="Ver video de la marca <?= $valorMarca ?>"><img src="Marcas/<?= strtolower($valorMarca) ?>.png" alt="logo <?= $valorMarca ?>" /></a>
						<div class="inner">
							<h3><a href="modelos.php?marca=<?= $idmarca ?>" data-poptrox="ajax,600x400">Modelos <?= $valorMarca ?></a></h3>
							<a href="<?=$url[$valorMarca]?>" class="button style2 " data-poptrox="youtube,600x400">Ver video <?= $valorMarca ?></a>
						</div>
				</div>			
<?php
}
?>
			</div>
		</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Follow my social network</h2>
						<ul class="icons">
							<li><a href="https://twitter.com/pesca79" target="blank"><img src="images/twitter.png" style="height:50px;width:50px"></a></li>
							<li><a href="https://www.facebook.com/miguelangel.ruizmariscal" target="blank"><img src="images/facebook.png" style="height:50px;width:50px"></a></li>
							<li><a href="https://www.instagram.com/miguelangelruizmariscal/" target="blank"><img src="images/instagram.png" style="height:50px;width:50px"></a></li>
							<li><a href="https://wa.me/34686378229?text=Hola%20Caracola!" target="blank"><img src="images/WhatsApp.png" style="height:50px;width:65px"></a></li>
							<li><a href="mailto:marmariscal@hotmail.com" target="blank"><img src="images/mail.png" style="height:50px;width:50px"></a></li>							
						</ul>
						<p class="copyright">&copy; IES Virgen del Carmen 2022<a href="https://www.iesvirgendelcarmen.com"></a></p>
					</div>
				</footer>
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
