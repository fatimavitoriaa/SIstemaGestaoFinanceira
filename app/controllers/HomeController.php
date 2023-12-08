<?php

namespace Ppa\Controllers;

use Ppa\Core\Controller;
use Ppa\Core\Database;

class HomeController extends Controller{


    public function criarconta()
    {
        $sql = "INSERT INTO usuario (nome,email,senha,cpf) VALUES (?,?,?,?)";
        $dados = ['Fátima','202015210001@ifba.edu.br','123456', '08032878291'];

        $db = new Database();
        var_dump( $db->executaSQL($sql,$dados) );
    }

    public function novacarteira(){

        $sql = "INSERT INTO carteira (nome,descricao, usuario_id) VALUES (?,?,?)";
        $dados = ['Compras','',1];

        $db = new Database();
        var_dump( $db->executaSQL($sql,$dados) );
    }

    public function novatransacao(){
        $sql = "INSERT INTO transacao (tipo, categoria, valor, datat, descricao, carteira_id) VALUES (?, ?, ?, ?, ?, ?)";
        $dados = ['Despesa', 'Alimentação', 100.00, '2023-12-08', 'Almoço no restaurante', 1];
        
        $db = new Database();
        var_dump( $db->executaSQL($sql,$dados) );
    }

    public function adicionartel(){
        $sql = "INSERT INTO telefone (numero, usuario_id) VALUES (?, ?)";
        $dados = ["77991567911", 1];
        $db = new Database();
        var_dump( $db->executaSQL($sql,$dados) );
    }


}