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
			$nome = "Maria";
			$vetor = str_split($nome); // Gera vetor separando cada letra de uma palavra
			print_r($vetor);
			
		?>
	</div>
</body>
</html>
