<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
</head>
<body>
	<div>
		<?php 
			$a = 3;
			$b = "3";
			$sr = ($a === $b) ? "SIM" : "NÃO";
			echo "As variavéis A e B são iguais? $sr";
		?>
	</div>
</body>
</html>
