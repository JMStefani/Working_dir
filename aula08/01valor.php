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
			$valor = $_GET["v"];
			$rq = sqrt($valor); 
			echo "O valor enviado foi $valor <br/> e sua raiz quadrada é iqual a" . number_format($rq,2);

		?>
		<a href="01exercicio.html">Voltar<a/>
	</div>
</body>
</html>
