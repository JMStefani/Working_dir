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
			$n = isset($_GET["num"])?$_GET["num"]:1;
			$m = 0;
			echo "<h1>Analisando o número  $n</h1><br/>";
			echo "<font size='6pt' color='#000000'>Valores multiplos: ";

			for ($i=1; $i <= $n ; $i++) { 

				$r = $n%$i;

					if ($r == 0) {
						$m++;
					 	echo "<font size='6pt' color='#000000'>$i   ";
					 }

			}
			echo "<br/><font size='6pt' color='#000000'>Total de  multiplos: $m <br/>";
				if ($m <= 2) {
					echo "<font size='6pt' color='#008000'>Resultado: $n  é primo<br/>";
				}
					else {
						echo "<font size='6pt' color='#FF0000'>Resultado: $n  não é primo<br/>";
					}
				
		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a><br/>
	</div>
</body>
</html>
