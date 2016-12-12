<?php

abstract class Conexao {

	const USER = "b2e65ea0e96181";
	const PASS = "71783f6f";

	private static $instance = null;

	private static function conectar() {

		try {
			if (self::$instance == null):
				$dsn = "mysql:host=br-cdbr-azure-south-b.cloudapp.net;dbname=ecossistema";
				self::$instance = new PDO($dsn, self::USER, self::PASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			endif;
		} catch (PDOException $e) {
			echo "Erro: " . $e->getMessage();
		}
		return self::$instance;
	}

	protected static function getDB() {
		return self::conectar();
	}
}

?>
