<?php
abstract class Banco
{
    protected $saldo;
    protected $depositar;
    protected $sacar;

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco
{
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "Sacou: " . $s . "<br>";
    }

    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "Depositou: " . $d . "<br>";
    }
}

$itau = new Itau();
$itau->setSaldo(5000);
echo "Saldo: " . $itau->getSaldo() . "<br>";
$itau->Sacar(500);
echo "Saldo: " . $itau->getSaldo() . "<br>";
$itau->Depositar(900);
echo "Saldo: " . $itau->getSaldo() . "<br>";
