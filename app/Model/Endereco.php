<?php

class Endereco {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function listarEnderecosPorCliente($clienteId) {
        // Retorna todos os endereços de um cliente
    }

    public function criarEndereco($clienteId, $dados) {
        // Cria um novo endereço para o cliente
    }

    public function atualizarEndereco($id, $dados) {
        // Atualiza um endereço específico
    }

    public function softDeleteEndereco($id) {
        // Aplica soft delete no endereço
    }
}
