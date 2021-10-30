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
			$n1 = isset($_GET["tNota1"])?$_GET["tNota1"]:"Nota 1 não informada";
			$n2 = isset($_GET["tNota2"])?$_GET["tNota2"]:"Nota 2 não informada";
			$m = ($n1+$n2)/2;
			if ($m<= 5){
				$r = "REPROVADO";
			}
			elseif ($m>5&&$m<7){
					$r = "RECUPERAÇÃO";
				}
				else {
					$r = "APROVADO";
				}
			
			echo "A média entre $n1 e $n2 é iqual a $m <br/>
			Situação do aluno: $r";
		?>
		<a href="exercicio03.html"><br/>Voltar</a>
	</div>
</body>
</html>
