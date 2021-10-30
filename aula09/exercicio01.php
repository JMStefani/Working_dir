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
			$a = isset($_GET["ano"])?$_GET["ano"]:1900;
			$i = date("Y") - $a;
			echo "Voce nasceu em $a e terá $i anos <br/>";
			if ($i >= 18){
				$v = "Já pode votar";
				$d = "Já pode dirigir";
			}
			else {
				$v = "Não pode votar";
				$d = "Não pode dirigir";
			}
			echo "Com essa idade voce $v e tambem $d";
		?>
		<a href="exercicio01.html">Voltar</a>
	</div>
</body>
</html>
