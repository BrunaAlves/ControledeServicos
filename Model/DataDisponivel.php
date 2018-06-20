<?php

class DataDisponivel {

    public $id_servico;
    public $id_disponibilidade;
    public $data;
    public $disponivel;
    public $quantidade;

    public function getId_disponibilidade() {
        return $this->id_disponibilidade;
    }

    public function setId_disponibilidade($pId) {
        return $this->id_disponibilidade = $pId;
    }

    public function getId_servico() {
        return $this->id_servico;
    }

    public function setId_servico($pIdServ) {
        return $this->id_servico = $pIdServ;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($pData) {
        return $this->data = $pData;
    }

    public function getDisponivel() {
        return $this->data;
    }

    public function setDisponivel($pDisp) {
        return $this->disponivel = $pDisp;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($pQuant) {
        return $this->quantidade = $pQuant;
    }

}
?>