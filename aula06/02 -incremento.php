<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
	<div>
		<?php 
		/* Esse exercicio pretende demonstrar o uso de operadores
		   de incremento e decremento */
		   	$atual = $_GET["aa"]; // esse comando vai pegar o ano na URL (.php?aa=2020)
			echo "O ano atual é $atual e o ano anterior é ". --$atual; # Uso do pre-decremento --
			$atual = $_GET["aa"];
			echo "<br/> O ano atual é $atual e o ano posterior é ". ++$atual;
		?>
	</div>
</body>
</html>
