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
			echo "O vetor tem ". count($v) . " elementos <br/>" ;
			print_r($v);
			// var_dump($v);

		?>
		</pre> 
	</div>
</body>
</html>
