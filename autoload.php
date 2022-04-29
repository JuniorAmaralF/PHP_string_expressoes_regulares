<?php 

spl_autoload_register(function ($classes){
    $prefixo = "App\\";

    $diretorio = __DIR__.'/src/';

    if(strncmp($prefixo,$classes,strlen($prefixo))){
        return;
    }
    
    $arquivo = $diretorio;

    $namespace = substr($classes,strlen($prefixo));
    $namespace_arquivo = str_replace('\\',DIRECTORY_SEPARATOR,$namespace);

    $arquivo = $diretorio.$namespace_arquivo.'.php';

    //var_dump($namespace);
});