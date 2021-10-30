<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
	<style>
		div {
			background-color: #cecece;
			font-size: 16pt;
			font-weight: bold;
			} 

	</style>
</head>
<body>
	<div>
		<pre>
			<?php 
				$v = array( 0 => 5,
							1 => 9,
							2 => 8,
							3 => 7);
				unset($v[0]);          // Elimina a posição 0 (5) do array

				print_r($v);
			?>
			
		</pre>
	</div>
</body>
</html>
