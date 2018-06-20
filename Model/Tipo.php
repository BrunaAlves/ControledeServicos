<?php

class Tipo {

    public $id_tipo;
    public $nome;
    public $valor;

    public function Tipo() {
        
    }

    public function setTipo($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getTipo($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getTipo_id() {
        return $this->id_tipo;
    }

    public function setTipo_id($pId) {
        return $this->id_tipo = $pId;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($pNome) {
        return $this->nome = $pNome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($pValor) {
        return $this->valor = $pValor;
    }

}
?>