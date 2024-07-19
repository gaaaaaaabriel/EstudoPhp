<?php

class Pedido
{
    public $numero;
    public $cliente;
}

class Cliente
{
    public $nome;
    public $endereco;
}


$cliente = new Cliente();
$cliente->nome = "Gbariel Gonçalves";
$cliente->endereco = "Rua antonio lorenzet";

$pedido = new Pedido();
$pedido->numero = 1;
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereço' => $pedido->cliente->endereco
);

echo '<pre>';
var_dump($dados);
echo '</pre>';
