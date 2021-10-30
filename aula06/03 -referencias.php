<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Curso de PHP - Cursoemvideo.com</title>
</head>
<body>
	<div>
		<?php 
			$a = 3;
			$b = $a;
			$b += 5;
			echo "A variavél A vale $a";
			echo "<br/>A variavél B vale $b";
			/* Utilizando variavel refer "&" $a e $b ficam relacionadas, mudando um muda outra*/
			$a = 3;
			$b = &$a;  
			$b += 5;
			echo "<br/>A variavél A vale $a";
			echo "<br/>A variavél B vale $b";
		?>
	</div>
</body>
</html>
