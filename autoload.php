<?php 

spl_autoload_register(function ($classes){
    $prefixo = "App\\";

    $diretorio = __DIR__.'/src/';

    if(strncmp($prefixo,$classes,strlen($prefixo))){
        return;
    }

    var_dump($classes);
});