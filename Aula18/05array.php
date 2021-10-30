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
				$v = array( "nome" => "Ana",
							"idade" => 23,
							"peso" => 58.5);

				print_r($v);
			?>
			
		</pre>
	</div>
</body>
</html>
