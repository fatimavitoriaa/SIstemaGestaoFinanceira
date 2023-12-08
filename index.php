<?php
declare(strict_types=1);



require_once "./vendor/autoload.php";

const URL_BASE = "http://localhost/SistemaGestaoFinanceira";



$url = $_GET['url'] ?? '/';

use Ppa\Core\Router;

Router::add('criarconta','HomeController','criarconta');
Router::add('novacarteira','HomeController','novacarteira');
Router::add('novatransacao','HomeController','novatransacao');
Router::add('adicionartel','HomeController','adicionartel');
Router::add('__erro','ErroController','erro404');
Router::execute($url);