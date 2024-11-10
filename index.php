<?php

require __DIR__.'/vendor/autoload.php';

require_once 'Database/conexao.php';

use \App\Http\Router;
use \App\Http\Response;
use App\controllers\Pages\Home;

define('URL','http://localhost/DesafioCRUD');

$obRouter = new Router(URL);

//ROTA HOME
$obRouter->get('/',[
    function(){
        return new Response(200,Home::getHome());
    }
]);

// IMPRIME O RESPONSE DA ROTA
$obRouter->run()->sendReponse();










//require_once 'controllers/ClienteController.php';
//require_once 'controllers/EnderecoController.php';

//$db = (new Database())->getConnection();
//$clienteController = new ClienteController($db);
//$enderecoController = new EnderecoController($db);

// Roteamento básico
//if ($_SERVER['REQUEST_URI'] == '/clientes') {
//    $clienteController->index();
//} elseif ($_SERVER['REQUEST_URI'] == '/clientes/criar') {
//    $clienteController->criar();
//}
// Adicione mais rotas conforme necessário
