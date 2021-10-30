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
			<table border="1">
			<?php 
				$c = range(5,20,2);
				foreach ($c as $v) {
					echo "<td>$v ";
				}
			?>
			</table>
		</pre>
	</div>
</body>
</html>
