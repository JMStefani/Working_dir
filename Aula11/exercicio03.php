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
			$in = isset($_GET["ini"])?$_GET["ini"]:0;
			$fin = isset($_GET["fim"])?$_GET["fim"]:0;
			$inc = isset($_GET["incr"])?$_GET["incr"]:0;
			$res = $in;
						
			if ($in < $fin) {
				while ($in <= $fin) {
					echo "<font size='6pt' color='FF0000'> $res </font>";
					$res = $res + $inc;
					$in = $in + $inc;
					}
			}
				elseif ($in > $fin) {
					while ($fin <= $in) {
						echo "<font size='6pt' color='FF0000'> $res </font>";
						$res = $res - $inc;
						$in = $in - $inc;
						}
					}
				
		?>
			<a href="exercicio03.html" id="eNv" class="botao"><br/>Voltar</a><br/>
	</div>
</body>
</html>