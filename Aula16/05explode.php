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
			$site = "Curso_em_Video";
			$vetor = explode("_",$site); // Explode a partir de um dado caracter de separação 
			print_r($vetor);
			
		?>
	</div>
</body>
</html>
