<?php

require_once('conexao.inc');
require_once('..\Model\Tipo.php');

class TipoDAO {

    private $con;

    function TipoDao() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    // Inclui um tipo de serviço no banco.
    public function incluirTipo(Tipo $tipo) {
        $sql = $this->con->prepare("insert into tipo (nome, valor) values (:nom, :val)");

        $sql->bindValue(':nom', $tipo->getNome());
        $sql->bindValue(':val', $tipo->getValor());
        $sql->execute();
    }

    //Retorna um array com todos os tipos de serviços cadastrados.
    public function getTipos() {
        $sql = $this->con->query("SELECT * FROM tipo");

        $lista = array();

        while ($clientes = $sql->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $clientes;
        }
        return $lista;
    }

    //Retorna um Tipo de serviço segundo seu id.
    public function getTipo($id) {
        $sql = $this->con->prepare("SELECT *FROM tipo WHERE id_tipo = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    //Deleta um tipo de serviço do banco segundo id informado.
    public function deletaTipo($id) {
        $sql = $this->con->prepare("DELETE FROM tipo WHERE id_tipo = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    //Retorna todos os serviços referentes ao id.
    public function getServicosPorTipo($id) {
        $sql = $this->con->prepare("SELECT * FROM servicos where id_tipo = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $servico = $sql->fetch(PDO::FETCH_OBJ);

        return $servico;
    }

    public function atualizaTipo(Tipo $tipo) {
        $sql = $this->con->prepare("UPDATE tipo SET nome = :nom, valor = :val WHERE id_tipo = :id");
        $sql->bindValue(':nom', $tipo->getNome());
        $sql->bindValue(':val', $tipo->getValor());
        $sql->bindValue(':id', $tipo->getTipo_id());
        $sql->execute();
    }

}
?>