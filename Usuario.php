<?php

namespace Alura;

class Usuario
{
    private $nome;
    private $sobreNome;

    public function __construct(string $nome)
    {
        $nomeSobrenome = explode(" ",$nome,2);

        $this->nome = $nomeSobrenome[0];
        $this->sobreNome = $nomeSobrenome[1];
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


