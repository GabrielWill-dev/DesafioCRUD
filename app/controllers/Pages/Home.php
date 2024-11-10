<?php

namespace App\controllers\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organizacao;

class Home extends Page{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */

    public static function getHome(){

        $content = View::render('pages/home', [
            'name' => 'Will - PHP',
            'descrição' => 'Testando',
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('Desafio CRUD', $content);
    }
}