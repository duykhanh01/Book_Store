<?php

class Database
{
    private $host;
    private $user;
    private $pass;
    private $db;
    public $conn;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'db';
        $this->db_connect();
    }

    private function db_connect()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
    public function getConn()
    {
        return $this->mysqli;
    }
    public function db_num($sql)
    {
        $result = $this->mysqli->query($sql);
        return $result->num_rows;
    }
}

$db = new Database();
$db->db_num("SELECT fields FROM YourTable");
