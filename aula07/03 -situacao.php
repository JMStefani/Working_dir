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
			$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			$media = ($nota1+$nota2)/2;
			echo "A média entre $nota1 e $nota2 é $media <br/>";
			echo "A situação do aluno é ".(($media<6) ? "REPROVADO" : "APROVADO");
		?>
	</div>
</body>
</html>
