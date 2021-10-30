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
			if ($i < 16){
				$tipoVoto = "Não vota";
			}
			elseif (($i>=16&&$i<18)||($i>65)){
					$tipoVoto = "Voto opcional";
				}
				else {
					$tipoVoto = "Voto obrigatório";
				}
			
			echo "Para essa idade $tipoVoto";
		?>
		<a href="exercicio02.html">Voltar</a>
	</div>
</body>
</html>
