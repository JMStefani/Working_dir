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
		// Por Valor 
			function teste ($x) {     			
				$x += 2;             		 	
				echo "O valor de X é $x<br/> ";
			}

			$a = 3;
			teste ($a);
			echo "O valor de A é $a<br/> ";

			// Por referencia 
			function teste1 (&$x) {     			
				$x += 2;             		 	
				echo "O valor de X é $x<br/> ";
			}

			$a = 3;
			teste1 ($a);
			echo "O valor de A é $a ";

		?>

		
		
	</div>
</body>
</html>
