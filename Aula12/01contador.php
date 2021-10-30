<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
</head>
<body>
	<div>
		<?php 
			$c = 10;
			do {
				echo "<font size='5pt' color='FF0000'>$c </font>";
				$c--;
			}while ($c >= 1);

		?>
	</div>
</body>
</html>
