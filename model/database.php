<?php

namespace Model;

class Database {

	protected $con;
	private $host 			= "localhost";
	private $db 				= "toko_buku";
	private $username		= "root";
	private $password 	= "";

	public function __construct(){
		$this->con = new \PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
	}

}
