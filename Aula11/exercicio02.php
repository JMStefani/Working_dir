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
	</style>
</head>
<body>
	<div>

		<form method="get" action="02-parte2.php">
			<?php
				$n = 1;
				while ($n <= 5){
				   echo "Valor $n: <input type='number' name='num' max='100' min='0' value='0'/><br/>";
					$n++;
				}
				
			?>

			<input type="submit" name="eNv" value="Enviar" class="botao"/>
		</form>
	</div>
</body>
</html>
