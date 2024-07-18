<?php
// Constantes
define("NAME", "Gabriel");
echo NAME;
echo "<br>";
var_dump(NAME);
echo "<hr>";

define("IDADE", 18);
echo IDADE;
echo "<br>";
var_dump(IDADE);
echo "<hr>";	

define("ALTURA", 1.86);
echo ALTURA;
echo "<br>";
var_dump(ALTURA);
echo "<hr>";

define("STATUS", true);
echo STATUS;
echo "<br>";
var_dump(STATUS);
echo "<hr>";

define("TIMES", ["Real Madrid", "Barcelona", "All Nasar"]);
echo TIMES[0];
echo "<br>";
var_dump(TIMES);
echo "<hr>";

$status = STATUS ? "sim" : "não";

echo "Meu nome é ".NAME.", tenho ".IDADE." anos, minha altura é ".ALTURA."m e ".($status == "sim" ? "estou" : "não estou")." namorando.";

function exibeNome(){
	echo NAME;
}
echo "<br>";
exibeNome();

