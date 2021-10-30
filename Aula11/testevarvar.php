<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Exemplos de uso de variavel de variavel</title>
</head>
<body>
	<div>
		<?php 
			$v1 = "nome";		// $v1 contem a string 'nome'
			$$v1 = "mauricio";  // O conteudo de $v1 ( nome) se transforma em uma variavel $nome

			echo "meu $v1 é $nome <br />";
			
			$bar = "a";
			$foo = "bar";
			$world = "foo";
			$hello = "world";
			$a = "hello";

			echo "$bar <br />";     // Mostra 'a'
			echo "$foo <br />";		// Mostra 'bar'
			echo "$world <br />";	// Mostra 'foo'
			echo "$hello <br />";	// Mostra 'world'
			echo "$a <br />";		// Mostra 'hello'
			echo "---------- <br />";

			echo " Conteudo da variavel bar  $$bar <br />";
			echo " Conteudo da variavel foo  $$foo <br />";
			echo " Conteudo da variavel world  $$world <br />";
			echo " Conteudo da variavel hello  $$hello <br />";
			echo " Conteudo da variavel a $$a <br />";

		?>
	</div>
</body>
</htmc