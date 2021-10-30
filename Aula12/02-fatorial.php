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
			$v = isset($_GET["val"])?$_GET["val"]:1;
			echo "<h1>Calculando o fatorial de $v </h1>";
			$c = $v;
			$fat = 1;
			do {
				$fat = $fat * $c;
				$c--;
			} while ( $c >= 1);
			echo "<h2>$v! = $fat";

		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a><br/>
	</div>
</body>
</html>
