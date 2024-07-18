<?php

	$nome = "Gabriel";
	$numero = 777;
	$carro = array("Gol Quadrado","Gol G3", "Voyage Quadrado", 7, 7.7, true);
	var_dump($carro);
	if (is_array($carro)) {
		echo "$carro É um array";
		echo "<br>";
	}else{
		echo "$carro Não é um array";
	}
	
	echo "<hr>";
	//echo "<br>";
	var_dump($nome);
	echo "<br>";
	if (is_string($nome)) {
		echo "$nome É uma String";
		echo "<br>";
		
	}else{
		echo "$nome Não é uma String";
		echo "<br>";
	}
	echo "<hr>";	
	var_dump($numero);
	echo "<br>";
	if (is_numeric($numero)) {
		echo "$numero É um numero";
		echo "<br>";
	}else{
		echo "$numero Não é um numero";
	}
	echo "<hr>";

	class Cliente{
		public $nome;
		public function atribuirValor($nome){
			$this->$nome = $nome;
		}
	}

	$cliente = new Cliente();
	$cliente->atribuirValor("Gabriel");
	var_dump($cliente);
	echo "<br>";
	if (is_object($cliente)) {
		echo " É um objeto";
		echo "<br>";
	}else{
		echo " Não é um objeto";
	}
