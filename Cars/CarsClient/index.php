
<!DOCTYPE HTML>
<html>
	<head>
		<script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
		<title>Concesionario Multimarca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="CSS/style.css" />
		<style>
		@keyframes rotate {from {transform: rotate(0deg);}
			to {transform: rotate(360deg);}}
		@-webkit-keyframes rotate {from {-webkit-transform: rotate(0deg);}
		to {-webkit-transform: rotate(360deg);}}
		#imagen {
			-webkit-animation: 1.5s rotate linear 2;
			animation: 1.5s rotate linear 2;
			-webkit-transform-origin: 50% 50%;
			transform-origin: 50% 50%;
		}	
		@-webkit-keyframes mymove {
		from {top: 0px;}
		to {top: 30px;}
		}	
		@keyframes mymove {
		from {top: 0px;}
		to {top: 30px;}
		}
		#myDIV {
		position: relative;
		margin:auto;
		width: 400px;
		height: 80px;
		background: black;		
		font-size: 22px;
		animation: botar 3s 250ms forwards normal;
		-webkit-animation:botar 3s 250ms forwards normal;
		-moz-animation:botar 3s 250ms forwards normal;
		-ms-animation:botar 3s 250ms forwards normal;
		-o-animation:botar 3s 250ms forwards normal;
		}
		#tw:hover,#fa:hover,#in:hover,#wh:hover,#ma:hover {
		animation: shake 0.90s cubic-bezier(.36,.07,.19,.97) both;
		transform: translate3d(0, 0, 0);
		backface-visibility: hidden;
		perspective: 1000px;
		}
			
		@keyframes shake {
		10%, 90% {
		transform: translate3d(-1px, 0, 0);
		}
		20%, 80% {
		transform: translate3d(4px, 0, 0);
		}
		30%, 50%, 70% {
		transform: translate3d(-8px, 0, 0);
		}
		40%, 60% {
		transform: translate3d(12px, 0, 0);
		}
		}	
@keyframes rotate {from {transform: rotate(0deg);}
			to {transform: rotate(360deg);}}
		@-webkit-keyframes rotate {from {-webkit-transform: rotate(0deg);}
		to {-webkit-transform: rotate(360deg);}}
		#imagen {
			-webkit-animation: 1.5s rotate linear 2;
			animation: 1.5s rotate linear 2;
			-webkit-transform-origin: 50% 50%;
			transform-origin: 50% 50%;
		}	

		@-webkit-keyframes mymove {
		from {top: 0px;}
		to {top: 30px;}
		}	
		@keyframes mymove {
		from {top: 0px;}
		to {top: 30px;}
		}

		@keyframes botar {
		30% {top:200px; animation-timing-function:ease-out;}
		45% {top:100px; animation-timing-function:ease-in;}
		60% {top:200px; animation-timing-function:ease-out;}
		68% {top:150px; animation-timing-function:ease-in;}
		76% {top:200px; animation-timing-function:ease-out;}
		80% {top:175px; animation-timing-function:ease-in;}
		84% {top:200px;animation-timing-function:ease-out;}
		86% {top:188px; animation-timing-function:ease-in;}
		88% {top:200px; animation-timing-function:ease-out;}
		87% {top:194px; animation-timing-function:ease-in;}
		88% {top:200px; animation-timing-function:ease-out;}
		100% {top:200px;}		
		}
		@-webkit-keyframes botar{
		0% {top:auto; -webkit-animation-timing-function:ease-in;}
		30% {top:200px; -webkit-animation-timing-function:ease-out;}
		45% {top:100px; -webkit-animation-timing-function:ease-in;}
		60% {top:200px; -webkit-animation-timing-function:ease-out;}
		68% {top:150px; -webkit-animation-timing-function:ease-in;}
		76% {top:200px; -webkit-animation-timing-function:ease-out;}
		80% {top:175px; -webkit-animation-timing-function:ease-in;}
		84% {top:200px; -webkit-animation-timing-function:ease-out;}
		86% {top:188px; -webkit-animation-timing-function:ease-in;}
		88% {top:200px; -webkit-animation-timing-function:ease-out;}
		87% {top:194px; -webkit-animation-timing-function:ease-in;}
		88% {top:200px; -webkit-animation-timing-function:ease-out;}
		100% {top:200px;}
		}
		@-moz-keyframes botar{
		0% {top:auto; -moz-animation-timing-function:ease-in;}
		30% {top:200px; -moz-animation-timing-function:ease-out;}
		45% {top:100px; -moz-animation-timing-function:ease-in;}
		60% {top:200px; -moz-animation-timing-function:ease-out;}
		68% {top:150px; -moz-animation-timing-function:ease-in;}
		76% {top:200px; -moz-animation-timing-function:ease-out;}
		80% {top:175px; -moz-animation-timing-function:ease-in;}
		84% {top:200px; -moz-animation-timing-function:ease-out;}
		86% {top:188px; -moz-animation-timing-function:ease-in;}
		88% {top:200px; -moz-animation-timing-function:ease-out;}
		87% {top:194px; -moz-animation-timing-function:ease-in;}
		88% {top:200px; -moz-animation-timing-function:ease-out;}
		100% {top:200px;}
		}
		@-o-keyframes botar{
		0% {top:auto; -o-animation-timing-function:ease-in;}
		30% {top:200px; -o-animation-timing-function:ease-out;}
		45% {top:100px; -o-animation-timing-function:ease-in;}
		60% {top:200px; -o-animation-timing-function:ease-out;}
		68% {top:150px; -o-animation-timing-function:ease-in;}
		76% {top:200px; -o-animation-timing-function:ease-out;}
		80% {top:175px; -o-animation-timing-function:ease-in;}
		84% {top:200px; -o-animation-timing-function:ease-out;}
		86% {top:188px; -o-animation-timing-function:ease-in;}
		88% {top:200px; -o-animation-timing-function:ease-out;}
		87% {top:194px; -o-animation-timing-function:ease-in;}
		88% {top:200px; -o-animation-timing-function:ease-out;}
		100% {top:200px;}
		}			
		</style>
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
	<a href="<?=$url[$valorMarca]?>" class="image fit" data-poptrox="youtube,600x400" title="Ver video de la marca <?= $valorMarca ?>"><img id="imagen" src="Marcas/<?= strtolower($valorMarca) ?>.png" alt="logo <?= $valorMarca ?>" /></a>
		<div class="imagen">
			<h3><a  href="modelos.php?marca=<?= $idmarca ?>" data-poptrox="ajax,600x1200">Modelos <?= $valorMarca ?></a></h3>
			<a href="<?=$url[$valorMarca]?>" class="button style2" data-poptrox="youtube,600x400">Ver video <?= $valorMarca ?></a>
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
					<div id="social" class="inner">
						<h2>Follow my social networks</h2>
						<p id="myDIV" onclick="myFunction()">Miguel Ángel Ruiz Mariscal<br>Haz click aquí!</p>
						<ul class="icons">
							<li><a id="tw" href="https://twitter.com/pesca79"><img src="images/twitter.png" style="height:50px;width:50px"></a></li>
							<li><a id="fa" href="https://www.facebook.com/miguelangel.ruizmariscal" target="blank"><img src="images/facebook.png" style="height:50px;width:50px"></a></li>
							<li><a id="in" href="https://www.instagram.com/miguelangelruizmariscal/" target="blank"><img src="images/instagram.png" style="height:50px;width:50px"></a></li>
							<li><a id="wh" href="https://wa.me/34686378229?text=Hola%20Caracola!" target="blank"><img src="images/WhatsApp.jpg" style="height:50px;width:50px"></a></li>
							<li><a id="ma" href="mailto:marmariscal@hotmail.com" target="blank"><img src="images/mail.png" style="height:50px;width:50px"></a></li>
						</ul>
					
						
<script>
var x = document.getElementById("myDIV");
var y = document.getElementById("myDIV");
// Start the animation with JavaScript
function myFunction() {
  x.style.WebkitAnimation = "mymove 1s 3"; // Code for Chrome, Safari and Opera
//  x.style.animation = "mymove 1s 2";     // Standard syntax
}

// Code for Chrome, Safari and Opera
x.addEventListener("webkitAnimationStart", myStartFunction);
x.addEventListener("webkitAnimationIteration", myRepeatFunction);
x.addEventListener("webkitAnimationEnd", myEndFunction);

// Standard syntax
//x.addEventListener("animationstart", myStartFunction);
//x.addEventListener("animationiteration", myRepeatFunction);
//x.addEventListener("animationend", myEndFunction);

function myStartFunction() {
  this.innerHTML = "<center><strong>Gracias por visitar mi web</strong></center>";
  this.style.backgroundColor = "blue";
}

function myRepeatFunction() {
  this.innerHTML = "<center><strong><br>No olvides seguirme en mis redes sociales!!</strong></center>";
  this.style.backgroundColor = "green";
}

function myEndFunction() {
  this.innerHTML = "<center><strong>Vuelve cuando quieras!!</strong></center>";
  this.style.backgroundColor = "red";
}
</script>						
</div>
</footer>
<div style="float: left; font-size:20px;"><p class="copyright"><a href="https://www.iesvirgendelcarmen.com">&copy; IES Virgen del Carmen 2022</a></p></div>
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
