<?php
$nomes = ["alfa" => "Gabriel", "beta" => "Israel", "gama" => "nicolas", "delta" => "danilo", "epsilon" => "bruno"];
$carro = ["gol", "fusca"];
$moto = ["S1000rr", "titan 150"];



// Iterar e imprimir os valores do array associativo
foreach ($nomes as $chave => $valor) {
    echo "$chave: $valor<br>";
}

// Verificar se é um array
echo "<hr>";
if (is_array($nomes)) {
    echo "É um array";
} else {
    echo "Não é um array";
}

// Verificar se o valor existe no array
echo "<hr>";
if (in_array("bruno", $nomes)) {
    echo "Sim, tem esse nome no array";
} else {
    echo "Não, não encontro esse nome no array";
}

echo "<hr>";
// Exemplo de uso de in_array para verificar outro nome
if (in_array("Gabriel", $nomes)) {
    echo "Sim, 'Gabriel' está no array";
} else {
    echo "Não, 'Gabriel' não está no array";
}

// Exibir as chaves do array
echo "<hr>";
$keys = array_keys($nomes);
print_r($keys);

$resultado = array_merge($carro, $moto);
echo"<hr>";
echo"junção: ";
print_r($resultado);
echo "<br>";
echo array_pop($carro);
echo "<br>";
print_r($carro);
echo"<br>";
echo array_pop($moto)."<br>";
print_r($moto);
echo"<br>";
print_r($carro);

echo"<hr>";
$frase = "meu nome é gabriel";

$array = explode(" ", $frase);
print_r($array);

echo"<hr>";
$data = array("18", "08", "2002");
$teste = implode("/", $data);

echo $teste;

?>


