<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(
        string $email,
        string $endereco,
        string $cep,
        string $telefone
    )
    {
        $this->email = $email;
    
        if ($this->validaEmail($email) !== false ){
            $this->setEmail($email);
        } else {
            $this->setEmail("Email invalido");
        }

        if($this->validaTelefone($telefone)){
            $this->setTelefone($telefone);
        }else {
            $this->setTelefone("Telefone invalido");
        }




        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    private function validaTelefone($telefone):int
    {
        return preg_match('/^[0-9]{4}-[0-9]{4}$/',$telefone,$encontrados);
    }

    private function setTelefone($telefone):void
    {
        $this->telefone = $telefone;
    }


    public function setEmail(string $email) : void
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

    private function validaEmail(string $email)
    {
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }


    public function getEmail():string
    {
        return $this->email;
    }

    public function getEnderecoCep():string
    {
        $enderecoCep = [$this->endereco,$this->cep];
        return implode(" - ", $enderecoCep );
        
    }
    public function getTelefone() : string
    {
        return $this->telefone;
    }

}






