<?php

	require_once('conexao.inc');
	require_once('..\Model\servico.php');
	require_once('..\Model\DataDisponivel.php');

	class servicoDAO{

		function servicoDao(){
			$c = new Conexao();
			$this->con = $c->getConexao();
		}

		public function incluirServico(Servico $servico, Array $datadisp){
			$arrayLimpo = array_filter($datadisp); //pega somente as colunas preenchidas, ignorando vazio ou null
			$sql = $this->con->prepare("insert into servicos (nome, valor, descricao, id_tipo) values (:nom, :val, :desc, :tip)");

			$sql->bindValue(':nom', $servico->getNome());
			$sql->bindValue(':val', $servico->getValor());	
			$sql->bindValue(':desc', $servico->getDescricao());	
			$sql->bindValue(':tip', $servico->getId_tipo());	
			$sql->execute();
			$last_id = $this->con->lastInsertId();


			for($i = 0; $i < count($arrayLimpo); $i++) {
				$sqlData = $this->con->prepare("insert into datasdisponiveis (id_servico, data, disponivel) values (:idse, :dat, 0)");
				$sqlData->bindValue(':idse', $last_id);
				$sqlData->bindValue(':dat', $arrayLimpo[$i]);		
				
				$sqlData->execute();
			}
			
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