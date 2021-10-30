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
			$v = array(2 =>"A", 5 =>"J", 0=>"M", 3 =>"X", 4=>"K");
			print_r($v);
			ksort($v);
			print_r($v);

		?>
		</pre> 
	</div>
</body>
</html>
