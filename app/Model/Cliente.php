<?php

class Cliente {
    private $db;
    private int id;
    private string nome;
    private string sobrenome;
    private $data_nascimento = date;
    private int id;
    private int id;
    private int id;


    public function __construct($db) {
        $this->db = $db;
    }

    public function listarClientes() {
        // Consulta para retornar todos os clientes
    }

    public function buscarClientePorId($id) {
        // Consulta para buscar cliente específico pelo ID
    }

    public function criarCliente($dados) {
        // Insere um novo cliente no banco de dados
    }

    public function atualizarCliente($id, $dados) {
        // Atualiza dados do cliente pelo ID
    }

    public function softDeleteCliente($id) {
        // Altera o status do cliente para "inativo"
    }
}
