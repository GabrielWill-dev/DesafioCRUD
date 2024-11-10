<?php

class ClienteController {
    private $clienteModel;

    public function __construct($db) {
        $this->clienteModel = new Cliente($db);
    }

    public function index() {
        // Chama o método de listar clientes e passa os dados para a View
    }

    public function criar() {
        // Valida e cria um novo cliente
    }

    public function atualizar($id) {
        // Atualiza um cliente existente
    }

    public function deletar($id) {
        // Aplica soft delete no cliente
    }
}
