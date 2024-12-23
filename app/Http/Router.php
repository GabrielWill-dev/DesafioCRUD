<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router{

    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de Request
     * @var Request
     */
    private $request;

    /**
     * Método responsável por inciar a classe
     * @param string $url
     */
    public function __construct($url){
        $this->request=new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Método responsável por definir o prefixo das rotas
     */
    private function setPrefix(){
        //INFORMAÇÕES DA URL ATUAL
        $parseUrl = parse_url($this->url);

        //DEFINE O PREFIXO
        $this->prefix= $parseUrl['path'] ?? '';
    }

    /**
     * Método responsável por adicionar uma rota na classe
     * @param string $method
     * @param string$route
     * @param array $params
     */
    private function addRoute($method,$route,$params = []){
        //VALIDAÇÃO DOS PARÂMETROS
        foreach($params as $key=>$value){
            if($value instanceof Closure){
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        //PADRÃO DE VALIDAÇÃO DA URL
        $patterRoute = '/^'.str_replace('/','\/',$route).'$/';

        //ADICIONA A ROTA DENTRO DA CLASSE
        $this->routes[$patterRoute][$method] = $params;
    }

    /**
     * Método responsável por definir uma rota GET
     * @param string $route
     * @param array $params
     */
    public function get($route,$params = []){

        return $this->addRoute('GET',$route, $params);
    }

    /**
     * Método responsável por retornar a URI desconsiderando o prefixo
     * @return string
     */
    private function getUri(){
        //URI DA REQUEST
        $uri = $this->resquest->getUri();

        //FATIA A URI COM PREFIXO
        $xUri = strlen($this->prefix) ? explode($this->prefix,$uri) : [$uri];

        //RETORNA A URI SEM PREFIXO
        return end($Xuri);
    }

    /**
     *Método responsável por retornar os da rota atual
     * @return void
     */
    private function getRoute(){

        //URI
        $uri = $this->getUri();

        //METHOD
        $httpMethod = $this->request->getHttpMetodo();

        //VALIDA AS ROTAS
        foreach($this->$routes as $patternRoute=>$methods){

        }
    }

    /**
     * Método responsável por executar a rota atual
     * @return Response
     */
    public function run(){
        try{
            $route = $this->getRoute();
            
        }catch(Exception $e){
            return new Response($e->getCode(),$e->getMessage());
        }

    }
}