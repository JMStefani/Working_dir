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
			function soma ($a, $b) {
				/*$s = $a + $b;
				return $s;*/
				return $a + $b;

			}
		
		$x = 7;
		$y = 9;
		$res = soma ($x, $y);
		echo "<font size='4' color='#BB0000'>A soma entre $x e $y é igual a  $res <br/>";	
		?>
	</div>
</body>
</html>
