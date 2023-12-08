<?php

namespace Ppa\Core;

abstract class Controller{

    protected string $pasta_view = './app/View/';

    public function view(string $arquivo,array $dados = [])
    {
        extract($dados);

        $caminho = $this->pasta_view . "{$arquivo}.view.php";
        if( file_exists($caminho)){
            require $caminho;
        }else{
            echo "<h2>Arquivo de View Não Existe</h2>";
        }
       
    }
    
}