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
		form#cForm {
			display: block;
			padding-left: 20px;
			font-size: 20pt;
			font-weight: bolder;
		}
		form input#eNv {
			margin-top: 10px;
			margin-left: 10px; 
			font-size: 16pt;
			font-weight: bold;
			background-color: #000000;
			color: #ffffff;
			}

		a {
			font-size: 15pt;
			font-weight: bold;
			color: "FF0000";
		}

	</style>
</head>
<body>
	<div>
		<?php 
			$n = isset($_GET["val"])?$_GET["val"]:1;
			$m = 1;
				echo "<font size='6pt' color='#2f4f4f'>Mostrando a Tabuada de $n <br/>";
			while ($m <= 10) {
				$r = $n * $m;
				echo "<font size='5pt' color='BB0000'> $n  X  $m  = $r <br/>";
				$m++;
				$r = 0;
			}
			
		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a><br/>
	</div>
</body>
</html>
