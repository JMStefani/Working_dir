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
			$ano = $_GET["an"];
			$idade = 2014 - $ano;
			echo "Quem nasceu em $ano tem idade de $idade anos.";
			$tipo = ($idade>=18 && $idade<65?"OBRIGATORIO":"NÃO OBRIGATÓRIO"); // idade entre 18 e (&&) 65
			echo "<br/>Seu voto é $tipo";
		?>
	</div>
</body>
</html>
