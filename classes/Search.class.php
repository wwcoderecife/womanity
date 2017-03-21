<?php

include_once 'Conexao.class.php';

class Search extends Conexao {

	//consulta as naturezas e públicos-alvo das organizações/iniciativas
	public function getNat_publicoAlvo_All(){

		$conexao = parent::getDB();

		$consulta = $conexao->prepare("SELECT tipo, publico_atendido FROM organizacoes");
		$consulta->execute();

		foreach($consulta->fetchAll(PDO::FETCH_ASSOC) as $row){
			$result[] = $row;
		}

		return $result;

	}

	//consulta as naturezas e públicos-alvo apenas das organizações 
	public function getNat_publicoAlvo_Org(){

		$conexao = parent::getDB();

		$consulta = $conexao->prepare("SELECT ong.tipo, ong.publico_atendido FROM organizacoes ong 
										INNER JOIN usuarios user ON ong.usuario_id = user.id AND user.tipo = 1");
		$consulta->execute();

		foreach($consulta->fetchAll(PDO::FETCH_ASSOC) as $row){
			$result[] = $row;
		}
	
		return $result;

	}

	//consulta as naturezas e públicos-alvo apenas das iniciativas
	public function getNat_publicoAlvo_Ini(){

		$conexao = parent::getDB();

		$consulta = $conexao->prepare("SELECT ong.tipo, ong.publico_atendido FROM organizacoes ong 
										INNER JOIN usuarios user ON ong.usuario_id = user.id AND user.tipo = 2");
		$consulta->execute();

		foreach($consulta->fetchAll(PDO::FETCH_ASSOC) as $row){
			$result[] = $row;
		}

		return $result;

	}

}

?>