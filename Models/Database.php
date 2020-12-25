<?php

	class Database
	{
		private $host = 'localhost';
		private $username = 'root';
		private $password = 'root';
		private $dbname = 'inventory';

		public $connection;
		
		function connectionToDatabase()
		{
			$this->connection = null;
			try {
				$this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password, array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				));
			} catch (PDOException $e) {
				die("Error: ".$e->getMessage());
			}
			return $this->connection;
		}
	}