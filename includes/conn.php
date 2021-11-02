<?php

class Database
{

	private $server = "mysql5033.site4now.net";
	private $username = "a7bea1_xtruong";
	private $password = "99419Oggy";
	private $database  = "db_a7bea1_xtruong";
	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->database);
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
