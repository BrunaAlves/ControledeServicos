<?php

require_once('conexao.inc');
require_once('..\Model\servico.php');
require_once('..\Model\DataDisponivel.php');

class dataDisponivelDAO {

    function dataDisponivelDao() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    public function atualizarDataDisponivel(DataDisponivel $dtDispo) {
        $arraydt[] = $dtDispo;

        //	foreach ($arraydt as $key => $value) {
        //		print_r($value);
        //	}


        for ($i = 0; $i <= count($arraydt); $i++) {
            $sql = $this->con->prepare("update datasdisponiveis set data= :dat where id_servico= :idser and id_disponibilidade = :iddisp ");

            $sql->bindValue(':dat', $dtDispo->data[$i]);
            $sql->bindValue(':iddisp', $dtDispo->id_disponibilidade[$i + 1]);
            $sql->bindValue(':idser', $dtDispo->getId_servico());

            $sql->execute();
        }

    }
    
    public function excluirDataDisponivel($id) {

        $sql = $this->con->prepare("delete from datasdisponiveis where id_disponibilidade= :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

    }

     public function incluirDatasDisponiveis($idserv, Array $datadisp) {
        $arrayLimpo = array_filter($datadisp); //pega somente as colunas preenchidas, ignorando vazio ou null
        

        for ($i = 0; $i < count($arrayLimpo); $i++) {
            $sqlData = $this->con->prepare("insert into datasdisponiveis (id_servico, data, disponivel) values (:idse, :dat, 0)");
            $sqlData->bindValue(':idse', $idserv);
            $sqlData->bindValue(':dat', $arrayLimpo[$i]);

            $sqlData->execute();
        }
    }

}
?>