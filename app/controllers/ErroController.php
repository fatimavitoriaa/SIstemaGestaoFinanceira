<?php

namespace Ppa\Controllersr;

use Ppa\Core\Controller;

class ErroController extends Controller{
    public function erro404(){
        echo "<h1>Erro ao encontrar a rota</h1>";
     }
}