<?php

namespace Ppa\Core;



class Router{
    protected static array $rotas = [];
    
    public static function add($url,$controlador,$metodo)
    {
        static::$rotas[$url] = [$controlador,$metodo];
    }

    public static function execute($url)
    {
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas) )
        {
            [$controlador,$metodo] = $rotas[$url];
        }else{
            [$controlador,$metodo] = $rotas['__erro'];
        }
        static::carregaController($controlador,$metodo);
    }

    protected static function carregaController($controlador,$metodo)
    {
        $controlador = "\\Ppa\\Controllers\\{$controlador}";
        $ctr = new $controlador();
        $ctr->$metodo();
    }


}