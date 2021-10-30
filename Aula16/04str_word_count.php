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
			$frase = "Eu vou estudar PHP agora";
			$cont = str_word_count($frase,0);
			echo "$cont<br/>";
			$cont = str_word_count($frase,1);  // mostra o indice da palavra no array
			print_r($cont);
			echo "<br/>";
			$cont = str_word_count($frase,2); // mostra a posição da palavra no array
			print_r($cont);
			
		?>
	</div>
</body>
</html>
