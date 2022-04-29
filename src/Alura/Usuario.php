<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobreNome;

    public function __construct(string $nome)
    {
        $nomeSobrenome = explode(" ",$nome,2);

        if ($nomeSobrenome[0] === ""){
            $this->nome = "Nome invalido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if(!isset($nomeSobrenome[1])){
            $this->sobreNome = "Sobrenome Inválido";
        } else {
            $this->sobreNome = $nomeSobrenome[1];
        }
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getSobreNome():string
    {
        return $this->sobreNome;
    }

    
}


