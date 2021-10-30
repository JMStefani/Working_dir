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
			font-weight: bold;
			} 

	</style>
</head>
<body>
	<div>
		<pre>
			<?php 
				$m = array( array(6,4),
							array(4,9),
							array(3,2));
				$m [0][1] = $m [2][0]; // substituo o 4 (0,1) pelo 3 (2,0)
				print_r($m);
									
			?>
		</pre>
	</div>
</body>
</html>
