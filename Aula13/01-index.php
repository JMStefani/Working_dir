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
			for ($i=1; $i <= 10 ; $i++) { 
				echo "<font size='5pt' color='BB0000'> $i ";
			}
			echo "<br/>";
			for ($i=10; $i >= 1 ; $i--) { 
				echo "<font size='5pt' color='BB0000'> $i ";
			}
			echo "<br/>";
			for ($i=0; $i <= 50 ; $i+=5) { 
				echo "<font size='5pt' color='BB0000'> $i ";
			}
			echo "<br/>";
			for ($i=30; $i >=0 ; $i-=2) { 
				echo "<font size='5pt' color='BB0000'> $i ";
			}

		?>
	</div>
</body>
</html>
