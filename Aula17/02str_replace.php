<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
	<style>
		div {
			background-color: #cecece;
			
		} 
	</style>
</head>
<body>
	<div>
		<?php 
			$frase = "Gosto de estudar Matematica";
			$novaFrase = str_replace("Matematica", "PHP", $frase); // Ira suvstituir na frase a palavra Matematica por PHP o str_ireplace ignora maiscula ou minuscula
			print("<font size=6pt ccolor=#CC0000/> $novaFrase");

		?>
	</div>
</body>
</html>
