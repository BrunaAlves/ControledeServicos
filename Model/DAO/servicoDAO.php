<?php

	require_once('conexao.inc');
	require_once('..\Model\servico.php');

	class servicoDAO{

		function servicoDao(){
			$c = new Conexao();
			$this->con = $c->getConexao();
		}

		public function incluirServico(Servico $servico){
			$sql = $this->con->prepare("insert into servicos (nome, valor, descricao, id_tipo) values (:nom, :val, :desc, :tip)");

			$sql->bindValue(':nom', $servico->getNome());
			$sql->bindValue(':val', $servico->getValor());	
			$sql->bindValue(':desc', $servico->getDescricao());	
			$sql->bindValue(':tip', $servico->getTipo());	
			$sql->execute();
		}


}

	

?>