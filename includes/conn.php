<?php

class Database
{

	private $server = "remotemysql.com";
	private $database = "xk7zJ6Nf1T";
	private $username = "xk7zJ6Nf1T";
	private $password = "af6nNyvgcj";
	private $charset = "utf8mb4";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

	protected $conn = "mysql:host=$host;dbname=$database;charset=$charset";

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			return $this->conn;
		} catch (PDOException $e) {
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}

	public function close()
	{
		$this->conn = null;
	}
}

$pdo = new Database();
