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
		form {
			margin-top: 10px;
			margin-left: 20px;
		}
		
	</style>
</head>
<body>
	<div>
		<?php 
		include "funcoes.php";
			echo "<h1>Testando novas funções</h1>";
			ola ();
			mostraValor (4);
			echo "<h2>Finalizando programa....";
		?>
		
	</div>
</body>
</html>
