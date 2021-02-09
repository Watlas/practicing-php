<?php


class Login
{

    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }



    public function Logar(){
        if($this->email == "teste" and $this->senha == "1"){
            echo "logando";
        }
        else{
            echo "Login errado";
        }

    }

}
