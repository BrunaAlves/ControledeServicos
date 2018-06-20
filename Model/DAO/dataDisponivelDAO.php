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

}
?>