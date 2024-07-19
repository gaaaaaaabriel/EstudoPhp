<?php
class NewsLetter
{
    public function cadastrarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Este email é invalido", 1);
        } else {
            echo "Email cadastrado com sucesso";
        }   
    }
}

$newslatter = new NewsLetter();

try {
    $newslatter->cadastrarEmail("gg405246   gmail.com");
} catch (Exception $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "codigo: " . $e->getCode() . "<br>";
    echo "Arquiv: " . $e->getFile() . "<br>";
    echo "linha: " . $e->getLine() . "<br>";
}
