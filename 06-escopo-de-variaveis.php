<?php
$nome = "Rodrigo Oliveira";
$a = 2;
$b = 2;
$c = 3;
////////////////////////////////////
function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

////////////////////////////////////
function exibeCidade(){
	global $cidade;
	$cidade = "Campos Novos";
}
exibeCidade();
echo $cidade;
echo "<hr>";

////////////////////////////////////
function exibeSoma(){
	echo $GLOBALS["a"] + $GLOBALS["b"] + $GLOBALS["c"];
}

exibeSoma();