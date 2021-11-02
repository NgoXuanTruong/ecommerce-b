<?php

class Database
{

	private $server = "mysql5033.site4now.net";
	private $database = "db_a7bea1_xtruong";
	private $username = "a7bea1_xtruong";
	private $password = "99419Oggy";

	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO("mysql:host=$this->server;dbname= $this->database ", $this->username, $this->password);
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
