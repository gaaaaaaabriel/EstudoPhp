<?php
class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {

        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $this->email = $e;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($s)
    {
        $this->senha = $s;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }

    function Logar()
    {
        if ($this->getEmail() == "gg405246@gmail.com" && $this->getSenha() == "Gabriel.1234") {
            echo "Logado com sucesso";
        } elseif ($this->getEmail() != "gg405246@gmail.com" && $this->getSenha() == "Gabriel.1234") {
            echo "Seu email esta incorreto";
        } elseif ($this->getEmail() == "gg405246@gmail.com" && $this->getSenha() != "Gabriel.1234") {
            echo "Sua senha esta incorreto";
        } else {
            echo "Sua senha e seu email estão incorreta";
        }
    }
}

$gabriel = new Login("gg405246@gmail.com", "Gabriel.1234", "Gabriel");
$gabriel->Logar();
echo "<hr>";