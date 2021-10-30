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
		<form method="get" name="num" action="02tabuada.php" id="cForm">
			<select name="num">
				<?php
				for ($i=1; $i <=10 ; $i++) { 
					echo "<font size='8pt' color='#2f4f4f'><option>$i</option><br/>";
				}
				?>
			</select>
			<input type="submit" name="eNv" value="Tabuada"/>
			
		</form>
		
	</div>
</body>
</html>
