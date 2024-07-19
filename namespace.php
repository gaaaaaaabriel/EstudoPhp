<?php

//usamos classes de outros arquivos, usando o required e o namespace ;)

require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as produtoclass;
use models\Produto as produtomodels;

$produto = new produtoclass();
$produto->mostrarDetalhes();
echo "<br>";

$produto2 = new produtomodels();
$produto2->mostrarDetalhes();


