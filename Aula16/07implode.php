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
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Video";
			$texto = implode("#", $vetor); // Junta as palavras de um vetor em um unico texto (join)
			print($texto);
			
		?>
	</div>
</body>
</html>
