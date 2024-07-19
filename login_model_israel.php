<?php

interface User
{
    public function getEmail();
    public function getSenha();
}

class Cliente implements User
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email ?? "";
    }

    public function setEmail($email)
    {

        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha ?? "";
    }
}

class Funcionario implements User
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {

        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }
}


class LoginService
{
    public function verificarLogin(Cliente $user)
    {
        $emailUsuario = $user->getEmail();
        $senhaUsuario = $user->getSenha();

        $userDao = new UserDao();
        $usuario = $userDao->getUserByEmail($emailUsuario);

        if (empty($usuario)) {
            echo json_encode(["erro" => "E-mail não encontrado"]);
            exit;
        } else {
            if ($usuario["SENHA"] == $senhaUsuario) {
                echo json_encode(["code" => 200, "msg" => "Sucesso"]);
                exit;
            } else {
                echo json_encode(["code" => 403, "msg" => "Senha Incorreta"]);
                exit;
            }
        }
        echo json_encode(["erro" => "Acesso negado"]);
        exit;
    }
}

class UserDao
{
    public function getUserByEmail($email)
    {

        $featchAll = [
            [
                "EMAIL_CLI" => "israel@gmail.com",
                "SENHA" => "123"
            ],
            [
                "EMAIL_CLI" => "gg405246@gmail.com",
                "SENHA" => "mudar123"
            ]
        ];

        if (!empty($featchAll)) {
            foreach ($featchAll as $usuario) {
                if ($usuario["EMAIL_CLI"] == $email) {
                    return $usuario;
                }
            }
            return [];
        } else {
            return [];
        }
    }
}

class LoginController
{
    public function GET()
    {
        $loginServices = new LoginService();

        // JSON

        $cliente = new Cliente();
        $cliente->setEmail("israel@gmail.c om");
        $cliente->setSenha("123");

        $loginServices->verificarLogin($cliente);
    }
    public function POST()
    {
    }
    public function PUT()
    {
    }
    public function DELETE()
    {
    }
}

$loginController = new LoginController();

$loginController->GET();
