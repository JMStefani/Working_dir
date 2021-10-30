<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
</head>
<body>
	<div>
		<?php 
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2 <br/>";
		$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;   // se tipo=s, então some n1 com n2, senão multiplique
		echo "O resultado será $r";

		?>
	</div>
</body>
</html>
