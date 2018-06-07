<?php

	class Servico{
		public $servico_id;
		public $nome;
		public $valor;
		public $descricao;
		public $tipo;

		public function setServico($id,$nome,$valor,$descricao, $tipo)
		{
			$this->servico_id = $id;
			$this->nome = $nome;
			$this->valor = $valor;
			$this->descricao = $descricao;
			$this->tipo = $tipo;
		}

		function Servico($nome,$valor,$descricao, $tipo){
			$this->nome = $nome;
			$this->valor = $valor;
			$this->descricao = $descricao;
			$this->tipo = $tipo;
		}

		public function getServico_id(){
			return $this->servico_id;
		}

		public function setAutor_id($pId){
			return $this->servico_id = $pId;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($pNome){
			return $this->nome = $pNome;
		}

		public function getValor(){
			return $this->valor;
		}

		public function setValor($pvalor){
			return $this->valor = $pValor;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($pDescricao){
			return $this->descricao = $pDescricao;
		}
		public function getTipo(){
			return $this->tipo;
		}

		public function setTipo($pTipo){
			return $this->tipo = $pTipo;
		}

	}
?>