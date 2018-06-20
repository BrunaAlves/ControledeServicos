<?php

class Cliente {

    public $codCli;
    public $nome;
    public $tipo_user;
    public $endereco;
    public $telefone;
    public $cpf;
    public $dt_nascimento;
    public $email;
    public $senha;

    public function setCliente($nome, $tipo, $end, $tel, $cpf, $dt_nasc, $email, $senha) {
        $this->nome = $nome;
        $this->tipo_user = $tipo;
        $this->endereco = $end;
        $this->telefone = $tel;
        $this->cpf = $cpf;
        $this->dt_nascimento = strtotime(str_replace('/', '-', $dt_nasc));
        $this->email = $email;
        $this->senha = $senha;
    }

    public function Cliente() {
        
    }

    public function Clientee($nome, $tipo, $end, $tel, $cpf, $dt_nasc, $email, $senha) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->endereco = $end;
        $this->telefone = $tel;
        $this->cpf = $cpf;
        $this->dt_nascimento = strtotime(str_replace('/', '-', $dt_nasc));
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getCliente($nome, $tipo, $end, $tel, $cpf, $dt_nasc, $email, $senha) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->endereco = $end;
        $this->telefone = $tel;
        $this->cpf = $cpf;
        $this->dt_nascimento = strtotime(str_replace('/', '-', $dt_nasc));
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getCliente_id() {
        return $this->codCli;
    }

    public function setCliente_id($pId) {
        return $this->codCli = $pId;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($pNome) {
        return $this->nome = $pNome;
    }

    public function getTipoUser() {
        return $this->tipo_user;
    }

    public function setTipoUser($pTipo) {
        return $this->tipo_user = $pTipo;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($pEndereco) {
        return $this->endereco = $pEndereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($pTelefone) {
        return $this->telefone = $pTelefone;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($pCpf) {
        return $this->cpf = $pCpf;
    }

    public function getDt_nascimento() {
        return $this->dt_nascimento;
    }

    public function setDt_nascimento($pDt_nascimento) {
        return $this->dt_nascimento = $pDt_nascimento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($pEmail) {
        return $this->email = $pEmail;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($pSenha) {
        return $this->senha = $pSenha;
    }

}
?>