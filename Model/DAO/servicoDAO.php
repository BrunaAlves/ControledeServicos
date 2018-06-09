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
			$sql->bindValue(':tip', $servico->getId_tipo());	
			$sql->execute();
		}
		public function getServicos(){
			$rs = $this->con->query("SELECT * FROM servicos");

			$lista = array();
			while($servicos=$rs->fetch(PDO::FETCH_OBJ)){
				$lista[] = $servicos;
			}

			return $lista;
		}

		public function getServico($id){
			$sql = $this->con->prepare("SELECT * FROM servicos where id_servico = :id");
			$sql->bindValue(':id', $id);
			$sql->execute();

			return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Servico capturado

		}

		public function atualizarServico(Servico $servico){
			$sql = $this->con->prepare("update servicos set nome= :nom, valor= :val, descricao= :desc, id_tipo= :tip where id_servico= :id");

			$sql->bindValue(':nom', $servico->getNome());
			$sql->bindValue(':val', $servico->getValor());	
			$sql->bindValue(':desc', $servico->getDescricao());	
			$sql->bindValue(':tip', $servico->getId_tipo());

			$sql->bindValue(':id', $servico->getServico_id());

			$sql->execute();
		}

		public function excluirServico($id){

			$sql=$this->con->prepare("delete from servicos where id_servico= :id");

			$sql->bindValue(':id', $id);
			$sql->execute();
		}


}

	

?>