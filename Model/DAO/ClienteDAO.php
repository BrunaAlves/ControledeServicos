<?php

require_once('conexao.inc');
require_once('..\Model\cliente.php');

class ClienteDAO {

    private $con;
    public $porPagina;

    function ClienteDao() {
        $c = new Conexao();
        $this->con = $c->getConexao();
        $this->porPagina = 10;
    }

    function converteDataMysql($data) {
        return date('Y-m-d', $data);
    }

    // Função para autentificar email e senha do usuario.
    public function efetuarLogin($email, $senha) {
        $sql = $this->con->prepare("SELECT *FROM clientes WHERE Email = :email AND Senha = :senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    // Inclui um cliente no banco.
    public function incluirCliente(Cliente $cliente) {
        $sql = $this->con->prepare("insert into clientes (Nome, Tipo_user, Endereco, Telefone, CPF, DtNascimento, Email, Senha) values (:nom, :tip, :end, :tel, :cpf, :nasc, :email, :senha)");

        $sql->bindValue(':nom', $cliente->getNome());
        $sql->bindValue(':tip', $cliente->getTipoUser());
        $sql->bindValue(':end', $cliente->getEndereco());
        $sql->bindValue(':tel', $cliente->getTelefone());
        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':nasc', $this->converteDataMysql($cliente->getDt_nascimento()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->execute();
    }

    //Retorna um array con todos os clientes cadastrados.
    public function getClientes() {
        $sql = $this->con->query("SELECT * FROM clientes");

        $lista = array();

        while ($clientes = $sql->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $clientes;
        }
        return $lista;
    }

    //Retorna um Cliente segundo seu id.
    public function getCliente($id) {
        $sql = $this->con->prepare("SELECT *FROM clientes WHERE CodCli = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function atualizaCliente(Cliente $cliente) {
        $sql = $this->con->prepare("UPDATE clientes SET Nome = :nom, Tipo_user = :tip, Endereco = :ende, Telefone = :tel, CPF = :cpf, DtNascimento = :nasc, Email = :email, Senha = :senha WHERE CodCli = :id");
        $sql->bindValue(':nom', $cliente->getNome());
        $sql->bindValue(':tip', $cliente->getTipoUser());
        $sql->bindValue(':ende', $cliente->getEndereco());
        $sql->bindValue(':tel', $cliente->getTelefone());
        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':nasc', $this->converteDataMysql($cliente->getDt_nascimento()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':id', $cliente->getCliente_id());
        $sql->execute();
    }

    public function deletaCliente($id) {
        $dl = $this->con->prepare("DELETE FROM clientes WHERE CodCli = :id");

        $dl->bindValue(':id', $id);
        $dl->execute();
    }

    public function getClientesPaginacao($pagina) {
        $init = ($pagina - 1) * $this->porPagina;

        $result = $this->con->query("SELECT * FROM clientes limit $init, $this->porPagina");

        $lista = array();
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $row;
        }

        return $lista;
    }

    public function getPagina() {
        $result_total = $this->con->query("SELECT count(*) as total FROM clientes")->fetch(PDO::FETCH_OBJ);

        $num_paginas = ceil($result_total->total / $this->porPagina);

        return $num_paginas;
    }

}
?>