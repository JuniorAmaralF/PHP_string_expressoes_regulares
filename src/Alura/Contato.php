<?php

namespace App\Alura;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario():string
    {
        $posicao = strpos($this->email,"@");

        if ($posicao === false) {
            return "Usuario Invalido";
        }

        return substr($this->email,0,$posicao);
    }
}






