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
			$nome = "Mauricio Stefani";
			$nome2 = strtolower($nome);
			print("<font size=6pt ccolor=#CC0000/> Seu nome é $nome2");

		?>
	</div>
</body>
</html>
