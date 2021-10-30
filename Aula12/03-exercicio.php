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
		<form method="get" id="cForm" action="03-tabuada.php">
			
			<select type="number" id="num" min="0" max="10" name="val">
				<?php
					for ($i=1; $i <=10 ; $i++) { 
						echo "<option>$i<option/>";
					}

				?>
			</select>
			<input type="submit" id="eNv" value="Tabuada"/><br/>
	</div>
</body>
</html>
