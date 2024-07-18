<?php

// Operadores lógicos
// Nos permitem fazer comparação entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 18;
$nome = "Gabriel";

if (($idade == 18)&&($nome == "Gabriel")) {
	echo"Positivo";
}else{
	echo"Negativo";
}