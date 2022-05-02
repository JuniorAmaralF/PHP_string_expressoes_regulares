<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobreNome;
    private $senha;

    public function __construct(string $nome,string $senha)
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

        $this->validaSenha($senha);
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getSobreNome():string
    {
        return $this->sobreNome;
    }

    public function getSenha():string 
    {
        return $this->senha;
    }

    private function validaSenha(string $senha):void
    {
        $tamanho_da_senha = strlen(trim($senha));

        if ($tamanho_da_senha > 6){
            $this->senha = $senha;
        } else {
            $this->senha = "Senha invalida";
        }
    }

    
}


