<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
	<style>
		div {
			background-color: #cecece;
			font-size: 12pt;
		} 
		
	</style>
</head>
<body>
	<div>
		<pre>
		<?php 
			$v = array("A", "J", "M", "X", "K");
			print_r($v);
			$v[] = 	"O";   // insere entrada no final do vetor
			array_push($v, "L");
			print_r($v);

		?>
		</pre> 
	</div>
</body>
</html>
