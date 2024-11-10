<?php

class EnderecoController {
    private $enderecoModel;

    public function __construct($db) {
        $this->enderecoModel = new Endereco($db);
    }

    public function listarPorCliente($clienteId) {
        // Lista endereços de um cliente
    }

    public function criar($clienteId) {
        // Cria um novo endereço para o cliente
    }

    public function atualizar($id) {
        // Atualiza um endereço existente
    }

    public function deletar($id) {
        // Aplica soft delete no endereço
    }
}
