<?php
//-//--//---//----//-----//-----//----//---//--//-// / //-//--//---//----//-----//-----//----//---//--//-//

class Veiculos
{
    public $nome;
    public $modelo;
    public $ano;

    public function __construct($nome, $modelo, $ano)
    {
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }


    protected function Andar()
    {
        echo "andando";
    }

    public function Parar()
    {
        echo "parado";
    }
}

class Carro extends Veiculos
{
    public function LimparVidro()
    {
        echo "Limpando vidro";
    }
    public function RotaAlternativa()
    {
        $this->Andar();
    }
}

class Moto extends Veiculos
{
    public function DarGrau()
    {
        echo "bolololololo";
    }
    public function RotaAlternativa()
    {
        $this->Andar();
    }
}


$golQuadrado = new Carro("Gol Quadrado", "96", "96");
var_dump($golQuadrado);
echo "<br>";
$golQuadrado->RotaAlternativa();
echo "<br>";
$golQuadrado->Parar();
echo "<br>";
$golQuadrado->LimparVidro();

echo "<hr>";

$moto = new Moto("Hayabuza", "2000", "200");
var_dump($moto);
echo "<br>";
$moto->RotaAlternativa();
echo "<br>";
$moto->Parar();
echo "<br>";
$moto->DarGrau();
