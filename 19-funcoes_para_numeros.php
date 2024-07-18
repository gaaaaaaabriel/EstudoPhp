<?php
// Funções para Números

// number_format : Formatar numeros
$db = 1236;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$$preco <hr>";


// round : aredonda valores
echo round(3.6)."<hr>";


// ceil : arredonda para cima
echo ceil(8.1)."<hr>";


// floor : arredonda para baixo
echo floor(5.9)."<hr>";

// rand : gera numeros aleatórios
echo rand(1,30);