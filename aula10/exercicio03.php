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
			$est = isset($_GET["tEst"])?$_GET["tEst"]:0;
			
			if ($est == 'SP'||$est == 'RJ'||$est == 'MG'||$est == 'ES') {
					$rg = "Região Sudeste";
					} 
					elseif ($est == "AM"||$est == 'RO'||$est =="AC"||$est =="PA"||$est =="RR"||$est =="TO"||$est =="AP") {
						$rg = "Região Norte";
					}	
						elseif ($est == "PR"||$est =="SC"||$est =="RS") {
						 	$rg = "Região Sul";
						 } 
						 	elseif ($est =="BA"||$est =="PE"||$est =="RN"||$est =="CE"||$est =="SE"||$est =="AL"||$est =="PI"||$est =="MA"||$est =="PB") {
						 		$rg = "Região Nordeste";
						 	}
						 		elseif ($est =="DF"||$est =="GO"||$est =="MT"||$est =="MS") {
						 			$rg = "Região Centro Oeste";
						 		}
						 
						
						echo "Voce mora na $rg";
						
			?> 
						
			<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>

			
	</div>
</body>
</html>
